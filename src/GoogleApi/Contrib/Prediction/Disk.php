<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;

class Disk extends Model
{
    public $status;
    public $sourceSnapshot;
    public $kind;
    public $description;
    public $sizeGb;
    public $id;
    public $sourceSnapshotId;
    public $zone;
    public $creationTimestamp;
    public $options;
    public $selfLink;
    public $name;

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setSourceSnapshot($sourceSnapshot)
    {
        $this->sourceSnapshot = $sourceSnapshot;
    }

    public function getSourceSnapshot()
    {
        return $this->sourceSnapshot;
    }

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

    public function setSizeGb($sizeGb)
    {
        $this->sizeGb = $sizeGb;
    }

    public function getSizeGb()
    {
        return $this->sizeGb;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setSourceSnapshotId($sourceSnapshotId)
    {
        $this->sourceSnapshotId = $sourceSnapshotId;
    }

    public function getSourceSnapshotId()
    {
        return $this->sourceSnapshotId;
    }

    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    public function getZone()
    {
        return $this->zone;
    }

    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    public function setOptions($options)
    {
        $this->options = $options;
    }

    public function getOptions()
    {
        return $this->options;
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


