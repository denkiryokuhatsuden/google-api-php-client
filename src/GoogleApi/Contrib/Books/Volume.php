<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;

class Volume extends Model {
    public $kind;
    protected $__accessInfoType = '\GoogleApi\Contrib\Books\Volume\AccessInfo';
    protected $__accessInfoDataType = '';
    public $accessInfo;
    protected $__saleInfoType = '\GoogleApi\Contrib\Books\Volume\SaleInfo';
    protected $__saleInfoDataType = '';
    public $saleInfo;
    public $etag;
    protected $__userInfoType = '\GoogleApi\Contrib\Books\Volume\UserInfo';
    protected $__userInfoDataType = '';
    public $userInfo;
    protected $__volumeInfoType = '\GoogleApi\Contrib\Books\Volume\VolumeInfo';
    protected $__volumeInfoDataType = '';
    public $volumeInfo;
    public $id;
    public $selfLink;
    public function setKind($kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setAccessInfo(VolumeAccessInfo $accessInfo) {
        $this->accessInfo = $accessInfo;
    }
    public function getAccessInfo() {
        return $this->accessInfo;
    }
    public function setSaleInfo(VolumeSaleInfo $saleInfo) {
        $this->saleInfo = $saleInfo;
    }
    public function getSaleInfo() {
        return $this->saleInfo;
    }
    public function setEtag($etag) {
        $this->etag = $etag;
    }
    public function getEtag() {
        return $this->etag;
    }
    public function setUserInfo(VolumeUserInfo $userInfo) {
        $this->userInfo = $userInfo;
    }
    public function getUserInfo() {
        return $this->userInfo;
    }
    public function setVolumeInfo(VolumeVolumeInfo $volumeInfo) {
        $this->volumeInfo = $volumeInfo;
    }
    public function getVolumeInfo() {
        return $this->volumeInfo;
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
}
