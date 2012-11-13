<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:50
 * To change this template use File | Settings | File Templates.
 */


class Google_Zone extends Google_Model {
    public $status;
    public $kind;
    public $availableMachineType;
    public $description;
    protected $__maintenanceWindowsType = 'Google_ZoneMaintenanceWindows';
    protected $__maintenanceWindowsDataType = 'array';
    public $maintenanceWindows;
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
    public function setAvailableMachineType($availableMachineType) {
        $this->availableMachineType = $availableMachineType;
    }
    public function getAvailableMachineType() {
        return $this->availableMachineType;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescription() {
        return $this->description;
    }
    public function setMaintenanceWindows($maintenanceWindows) {
        $this->assertIsArray($maintenanceWindows, 'Google_ZoneMaintenanceWindows', __METHOD__);
        $this->maintenanceWindows = $maintenanceWindows;
    }
    public function getMaintenanceWindows() {
        return $this->maintenanceWindows;
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