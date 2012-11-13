<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:51
 * To change this template use File | Settings | File Templates.
 */


class Google_Snapshot extends Google_Model {
    public $status;
    public $kind;
    public $description;
    public $sourceDisk;
    public $sourceDiskId;
    public $diskSizeGb;
    public $creationTimestamp;
    public $id;
    public $selfLink;
    public $name;
    public function setStatus($status) {
        $this->status = $status;
    }
    public function getStatus() {
        return $this->status;
    }
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
    public function setSourceDisk($sourceDisk) {
        $this->sourceDisk = $sourceDisk;
    }
    public function getSourceDisk() {
        return $this->sourceDisk;
    }
    public function setSourceDiskId($sourceDiskId) {
        $this->sourceDiskId = $sourceDiskId;
    }
    public function getSourceDiskId() {
        return $this->sourceDiskId;
    }
    public function setDiskSizeGb($diskSizeGb) {
        $this->diskSizeGb = $diskSizeGb;
    }
    public function getDiskSizeGb() {
        return $this->diskSizeGb;
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