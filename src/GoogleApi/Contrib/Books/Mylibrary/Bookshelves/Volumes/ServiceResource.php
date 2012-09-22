<?php

namespace GoogleApi\Contrib\Books\Mylibrary\Bookshelves\Volumes;

use GoogleApi\Contrib\Books\Volumes;
use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new apiBooksService(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource
{
    /**
     * Gets volume information for volumes on a bookshelf. (volumes.list)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string shelf The bookshelf id or name retrieve volumes for.
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string q Full-text search query string in this bookshelf.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startIndex Index of the first element to return (starts at 0)
     * @return Volumes
     */
    public function listMylibraryBookshelvesVolumes($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Volumes($data);
        } else {
            return $data;
        }
    }
}