<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:59
 * To change this template use File | Settings | File Templates.
 */


class Google_DiskList extends Google_Model {
    public $nextPageToken;
    protected $__itemsType = 'Google_Disk';
    protected $__itemsDataType = 'array';
    public $items;
    public $kind;
    public $id;
    public $selfLink;
    public function setNextPageToken($nextPageToken) {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken() {
        return $this->nextPageToken;
    }
    public function setItems($items) {
        $this->assertIsArray($items, 'Google_Disk', __METHOD__);
        $this->items = $items;
    }
    public function getItems() {
        return $this->items;
    }
    public function setKind($kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
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