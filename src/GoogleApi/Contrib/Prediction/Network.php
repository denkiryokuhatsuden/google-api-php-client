<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;

class Network extends Model
{
    public $kind;
    public $description;
    public $IPv4Range;
    public $gatewayIPv4;
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

    public function setIPv4Range($IPv4Range)
    {
        $this->IPv4Range = $IPv4Range;
    }

    public function getIPv4Range()
    {
        return $this->IPv4Range;
    }

    public function setGatewayIPv4($gatewayIPv4)
    {
        $this->gatewayIPv4 = $gatewayIPv4;
    }

    public function getGatewayIPv4()
    {
        return $this->gatewayIPv4;
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