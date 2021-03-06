<?php

/**
 * Copyright 2008 Google Inc. Licensed under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License. You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0 Unless required by applicable law
 * or agreed to in writing, software distributed under the License is
 * distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied. See the License for the specific language
 * governing permissions and limitations under the License.
 */

namespace GoogleApi\Cache;

use GoogleApi\Config;

/**
 * This class implements a basic on disk storage. While that does work quite
 * well it's not the most elegant and scalable solution. It will also get you
 * into a heap of trouble when you try to run this in a clustered environment.
 * In those cases please use the MySql back-end 
 * 
 * @author Chris Chabot <chabotc@google.com>
 */
class FileCache extends Cache
{
    /**
     * @var unknown_type
     */
    private $path;

    /**
     * @param unknown_type $config
     */
    public function __construct ($config)
    {
        parent::__construct($config);
        $this->path = $this->apiConfig->get('ioFileCache_directory');
    }

    /**
     * @param unknown_type $storageFile
     * @return boolean
     */
    private function isLocked ($storageFile)
    {
        // our lock file convention is simple: /the/file/path.lock
        return file_exists($storageFile . '.lock');
    }

    /**
     * @param unknown_type $storageFile
     * @throws Exception
     */
    private function createLock ($storageFile)
    {
        $storageDir = dirname($storageFile);
        if (! is_dir($storageDir)) {
            // @codeCoverageIgnoreStart
            if (! @mkdir($storageDir, 0755, true)) {
                // make sure the failure isn't because of a concurrency issue
                if (! is_dir($storageDir)) {
                    throw new Exception("Could not create storage directory: $storageDir");
                }
            }
            // @codeCoverageIgnoreEnd
        }
        @touch($storageFile . '.lock');
    }

    /**
     * @param unknown_type $storageFile
     */
    private function removeLock ($storageFile)
    {
        // suppress all warnings, if some other process removed it that's ok too
        @unlink($storageFile . '.lock');
    }

    /**
     * @param unknown_type $storageFile
     */
    private function waitForLock ($storageFile)
    {
        // 20 x 250 = 5 seconds
        $tries = 20;
        $cnt = 0;
        do {
            // make sure PHP picks up on file changes. This is an expensive
            // action but really can't be avoided
            clearstatcache();
            // 250 ms is a long time to sleep, but it does stop the server from
            // burning all resources on polling locks..
            usleep(250);
            $cnt ++;
        } while ($cnt <= $tries && $this->isLocked($storageFile));
        if ($this->isLocked($storageFile)) {
            // 5 seconds passed, assume the owning process died off and remove
            // it
            $this->removeLock($storageFile);
        }
    }

    /**
     * @param unknown_type $hash
     * @return string
     */
    private function getCacheDir ($hash)
    {
        // use the first 2 characters of the hash as a directory prefix
        // this should prevent slowdowns due to huge directory listings
        // and thus give some basic amount of scalability
        return $this->path . '/' . substr($hash, 0, 2);
    }

    /**
     * @param unknown_type $hash
     * @return string
     */
    private function getCacheFile ($hash)
    {
        return $this->getCacheDir($hash) . '/' . $hash;
    }

    /**
     * (non-PHPdoc)
     * @see \GoogleApi\Cache\Cache::get()
     */
    public function get ($key, $expiration = false)
    {
        $storageFile = $this->getCacheFile(md5($key));
        // See if this storage file is locked, if so we wait upto 5 seconds for
        // the lock owning process to
        // complete it's work. If the lock is not released within that time
        // frame, it's cleaned up.
        // This should give us a fair amount of 'Cache Stampeding' protection
        if ($this->isLocked($storageFile)) {
            $this->waitForLock($storageFile);
        }
        if (file_exists($storageFile) && is_readable($storageFile)) {
            $now = time();
            if (! $expiration ||
                     (($mtime = @filemtime($storageFile)) !== false &&
                     ($now - $mtime) < $expiration)) {
                if (($data = @file_get_contents($storageFile)) !== false) {
                    $data = unserialize($data);
                    return $data;
                }
            }
        }
        return false;
    }

    /**
     * (non-PHPdoc)
     * @see \GoogleApi\Cache\Cache::set()
     */
    public function set ($key, $value)
    {
        $storageDir = $this->getCacheDir(md5($key));
        $storageFile = $this->getCacheFile(md5($key));
        if ($this->isLocked($storageFile)) {
            // some other process is writing to this file too, wait until it's
            // done to prevent hickups
            $this->waitForLock($storageFile);
        }
        if (! is_dir($storageDir)) {
            if (! @mkdir($storageDir, 0755, true)) {
                throw new Exception(
                        "Could not create storage directory: $storageDir");
            }
        }
        // we serialize the whole request object, since we don't only want the
        // responseContent but also the postBody used, headers, size, etc
        $data = serialize($value);
        $this->createLock($storageFile);
        if (! @file_put_contents($storageFile, $data)) {
            $this->removeLock($storageFile);
            throw new Exception("Could not store data in the file");
        }
        $this->removeLock($storageFile);
    }

    /**
     * (non-PHPdoc)
     * @see \GoogleApi\Cache\Cache::delete()
     */
    public function delete ($key)
    {
        $file = $this->getCacheFile(md5($key));
        if (! @unlink($file)) {
            throw new Exception("Cache file could not be deleted");
        }
    }
}
