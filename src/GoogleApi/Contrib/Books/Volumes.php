<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;

class Volumes extends Model {
	public $totalItems;
	protected $__itemsType = '\GoogleApi\Contrib\Books\Volume';
	protected $__itemsDataType = 'array';
	public $items;
	public $kind;

	public function setTotalItems($totalItems) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
	public function setItems(/* array(Volume) */ $items) {
		$this->assertIsArray($items, '\GoogleApi\Contrib\Books\Volume', __METHOD__);
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