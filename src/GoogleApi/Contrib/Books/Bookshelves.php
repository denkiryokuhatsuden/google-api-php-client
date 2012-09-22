<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;

class Bookshelves extends Model {
    protected $__itemsType = 'Bookshelf';
    protected $__itemsDataType = 'array';
    public $items;
    public $kind;
    public function setItems(/* array(Bookshelf) */ $items) {
        $this->assertIsArray($items, 'Bookshelf', __METHOD__);
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
}