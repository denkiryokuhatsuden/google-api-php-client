<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;

class Annotations extends Model {
    public $nextPageToken;
    protected $__itemsType = 'Annotation';
    protected $__itemsDataType = 'array';
    public $items;
    public $kind;
    public $totalItems;
    public function setNextPageToken($nextPageToken) {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken() {
        return $this->nextPageToken;
    }
    public function setItems(/* array(Annotation) */ $items) {
        $this->assertIsArray($items, 'Annotation', __METHOD__);
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
    public function setTotalItems($totalItems) {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems() {
        return $this->totalItems;
    }
}
