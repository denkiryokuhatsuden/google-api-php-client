<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;

class Image extends Model
{
    public $kind;
    public $description;
    protected $__rawDiskType = '\GoogleApi\Contrib\Prediction\Image\RawDisk';
    protected $__rawDiskDataType = '';
    public $rawDisk;
    public $preferredKernel;
    protected $__diskSnapshotType = '\GoogleApi\Contrib\Prediction\Image\DiskSnapshot';
    protected $__diskSnapshotDataType = '';
    public $diskSnapshot;
    public $sourceType;
    public $creationTimestamp;
    public $id;
    public $selfLink;
    public $name;

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setRawDisk(\GoogleApi\Contrib\Prediction\Image\RawDisk $rawDisk)
    {
        $this->rawDisk = $rawDisk;
    }

    public function getRawDisk()
    {
        return $this->rawDisk;
    }

    public function setPreferredKernel($preferredKernel)
    {
        $this->preferredKernel = $preferredKernel;
    }

    public function getPreferredKernel()
    {
        return $this->preferredKernel;
    }

    public function setDiskSnapshot(\GoogleApi\Contrib\Prediction\Image\DiskSnapshot $diskSnapshot)
    {
        $this->diskSnapshot = $diskSnapshot;
    }

    public function getDiskSnapshot()
    {
        return $this->diskSnapshot;
    }

    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
    }

    public function getSourceType()
    {
        return $this->sourceType;
    }

    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}