<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;

class MachineType extends Model
{
    public $guestCpus;
    public $imageSpaceGb;
    public $kind;
    protected $__ephemeralDisksType = '\GoogleApi\Contrib\Prediction\MachineType\EphemeralDisks';
    protected $__ephemeralDisksDataType = 'array';
    public $ephemeralDisks;
    public $maximumPersistentDisksSizeGb;
    public $description;
    public $maximumPersistentDisks;
    public $name;
    public $memoryMb;
    public $availableZone;
    public $creationTimestamp;
    public $id;
    public $selfLink;
    public $hostCpus;

    public function setGuestCpus($guestCpus)
    {
        $this->guestCpus = $guestCpus;
    }

    public function getGuestCpus()
    {
        return $this->guestCpus;
    }

    public function setImageSpaceGb($imageSpaceGb)
    {
        $this->imageSpaceGb = $imageSpaceGb;
    }

    public function getImageSpaceGb()
    {
        return $this->imageSpaceGb;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setEphemeralDisks($ephemeralDisks)
    {
        $this->assertIsArray($ephemeralDisks, '\GoogleApi\Contrib\Prediction\MachineType\EphemeralDisks', __METHOD__);
        $this->ephemeralDisks = $ephemeralDisks;
    }

    public function getEphemeralDisks()
    {
        return $this->ephemeralDisks;
    }

    public function setMaximumPersistentDisksSizeGb($maximumPersistentDisksSizeGb)
    {
        $this->maximumPersistentDisksSizeGb = $maximumPersistentDisksSizeGb;
    }

    public function getMaximumPersistentDisksSizeGb()
    {
        return $this->maximumPersistentDisksSizeGb;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setMaximumPersistentDisks($maximumPersistentDisks)
    {
        $this->maximumPersistentDisks = $maximumPersistentDisks;
    }

    public function getMaximumPersistentDisks()
    {
        return $this->maximumPersistentDisks;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setMemoryMb($memoryMb)
    {
        $this->memoryMb = $memoryMb;
    }

    public function getMemoryMb()
    {
        return $this->memoryMb;
    }

    public function setAvailableZone($availableZone)
    {
        $this->availableZone = $availableZone;
    }

    public function getAvailableZone()
    {
        return $this->availableZone;
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

    public function setHostCpus($hostCpus)
    {
        $this->hostCpus = $hostCpus;
    }

    public function getHostCpus()
    {
        return $this->hostCpus;
    }
}