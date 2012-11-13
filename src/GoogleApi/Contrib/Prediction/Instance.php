<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;

class Instance extends Model
{
    public $status;
    public $kind;
    public $machineType;
    public $description;
    public $zone;
    public $tags;
    public $image;
    protected $__disksType = '\GoogleApi\Contrib\Prediction\AttachedDisk';
    protected $__disksDataType = 'array';
    public $disks;
    public $name;
    public $statusMessage;
    protected $__serviceAccountsType = '\GoogleApi\Contrib\Prediction\ServiceAccount';
    protected $__serviceAccountsDataType = 'array';
    public $serviceAccounts;
    protected $__networkInterfacesType = '\GoogleApi\Contrib\Prediction\NetworkInterface';
    protected $__networkInterfacesDataType = 'array';
    public $networkInterfaces;
    public $creationTimestamp;
    public $id;
    public $selfLink;
    protected $__metadataType = '\GoogleApi\Contrib\Prediction\Metadata';
    protected $__metadataDataType = '';
    public $metadata;

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;
    }

    public function getMachineType()
    {
        return $this->machineType;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    public function getZone()
    {
        return $this->zone;
    }

    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setDisks($disks)
    {
        $this->assertIsArray($disks, '\GoogleApi\Contrib\Prediction\AttachedDisk', __METHOD__);
        $this->disks = $disks;
    }

    public function getDisks()
    {
        return $this->disks;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }

    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    public function setServiceAccounts($serviceAccounts)
    {
        $this->assertIsArray($serviceAccounts, '\GoogleApi\Contrib\Prediction\ServiceAccount', __METHOD__);
        $this->serviceAccounts = $serviceAccounts;
    }

    public function getServiceAccounts()
    {
        return $this->serviceAccounts;
    }

    public function setNetworkInterfaces($networkInterfaces)
    {
        $this->assertIsArray($networkInterfaces, '\GoogleApi\Contrib\Prediction\NetworkInterface', __METHOD__);
        $this->networkInterfaces = $networkInterfaces;
    }

    public function getNetworkInterfaces()
    {
        return $this->networkInterfaces;
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

    public function setMetadata(\GoogleApi\Contrib\Prediction\Metadata $metadata)
    {
        $this->metadata = $metadata;
    }

    public function getMetadata()
    {
        return $this->metadata;
    }
}