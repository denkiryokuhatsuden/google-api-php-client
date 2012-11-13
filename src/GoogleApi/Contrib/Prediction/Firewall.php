<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;

class Firewall extends Model
{
    public $kind;
    public $description;
    public $sourceTags;
    public $sourceRanges;
    public $network;
    public $targetTags;
    protected $__allowedType = '\GoogleApi\Contrib\Prediction\Firewall\Allowed';
    protected $__allowedDataType = 'array';
    public $allowed;
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

    public function setSourceTags($sourceTags)
    {
        $this->sourceTags = $sourceTags;
    }

    public function getSourceTags()
    {
        return $this->sourceTags;
    }

    public function setSourceRanges($sourceRanges)
    {
        $this->sourceRanges = $sourceRanges;
    }

    public function getSourceRanges()
    {
        return $this->sourceRanges;
    }

    public function setNetwork($network)
    {
        $this->network = $network;
    }

    public function getNetwork()
    {
        return $this->network;
    }

    public function setTargetTags($targetTags)
    {
        $this->targetTags = $targetTags;
    }

    public function getTargetTags()
    {
        return $this->targetTags;
    }

    public function setAllowed($allowed)
    {
        $this->assertIsArray($allowed, '\GoogleApi\Contrib\Prediction\Firewall\Allowed', __METHOD__);
        $this->allowed = $allowed;
    }

    public function getAllowed()
    {
        return $this->allowed;
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