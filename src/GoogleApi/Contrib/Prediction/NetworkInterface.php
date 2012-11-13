<?php


namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;


class NetworkInterface extends Model
{
    public $network;
    protected $__accessConfigsType = 'Google_AccessConfig';
    protected $__accessConfigsDataType = 'array';
    public $accessConfigs;
    public $networkIP;
    public $kind;
    public $name;

    public function setNetwork($network)
    {
        $this->network = $network;
    }

    public function getNetwork()
    {
        return $this->network;
    }

    public function setAccessConfigs($accessConfigs)
    {
        $this->assertIsArray($accessConfigs, 'Google_AccessConfig', __METHOD__);
        $this->accessConfigs = $accessConfigs;
    }

    public function getAccessConfigs()
    {
        return $this->accessConfigs;
    }

    public function setNetworkIP($networkIP)
    {
        $this->networkIP = $networkIP;
    }

    public function getNetworkIP()
    {
        return $this->networkIP;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
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