<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;
 
class Bookshelf extends Model {
	public $kind;
	public $description;
	public $created;
	public $volumeCount;
	public $title;
	public $updated;
	public $access;
	public $volumesLastUpdated;
	public $id;
	public $selfLink;
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
	public function setCreated($created) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setVolumeCount($volumeCount) {
		$this->volumeCount = $volumeCount;
	}
	public function getVolumeCount() {
		return $this->volumeCount;
	}
	public function setTitle($title) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setUpdated($updated) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setAccess($access) {
		$this->access = $access;
	}
	public function getAccess() {
		return $this->access;
	}
	public function setVolumesLastUpdated($volumesLastUpdated) {
		$this->volumesLastUpdated = $volumesLastUpdated;
	}
	public function getVolumesLastUpdated() {
		return $this->volumesLastUpdated;
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