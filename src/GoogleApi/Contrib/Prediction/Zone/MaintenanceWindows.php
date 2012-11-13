<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:50
 * To change this template use File | Settings | File Templates.
 */


class Google_ZoneMaintenanceWindows extends Google_Model {
    public $endTime;
    public $beginTime;
    public $name;
    public $description;
    public function setEndTime($endTime) {
        $this->endTime = $endTime;
    }
    public function getEndTime() {
        return $this->endTime;
    }
    public function setBeginTime($beginTime) {
        $this->beginTime = $beginTime;
    }
    public function getBeginTime() {
        return $this->beginTime;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescription() {
        return $this->description;
    }
}
