<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:51
 * To change this template use File | Settings | File Templates.
 */



class Google_Project extends Google_Model {
    public $kind;
    public $description;
    protected $__commonInstanceMetadataType = 'Google_Metadata';
    protected $__commonInstanceMetadataDataType = '';
    public $commonInstanceMetadata;
    public $externalIpAddresses;
    protected $__quotasType = 'Google_ProjectQuotas';
    protected $__quotasDataType = 'array';
    public $quotas;
    public $creationTimestamp;
    public $id;
    public $selfLink;
    public $name;
    public function setKind($kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescription() {
        return $this->description;
    }
    public function setCommonInstanceMetadata(Google_Metadata $commonInstanceMetadata) {
        $this->commonInstanceMetadata = $commonInstanceMetadata;
    }
    public function getCommonInstanceMetadata() {
        return $this->commonInstanceMetadata;
    }
    public function setExternalIpAddresses($externalIpAddresses) {
        $this->externalIpAddresses = $externalIpAddresses;
    }
    public function getExternalIpAddresses() {
        return $this->externalIpAddresses;
    }
    public function setQuotas($quotas) {
        $this->assertIsArray($quotas, 'Google_ProjectQuotas', __METHOD__);
        $this->quotas = $quotas;
    }
    public function getQuotas() {
        return $this->quotas;
    }
    public function setCreationTimestamp($creationTimestamp) {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp() {
        return $this->creationTimestamp;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}