<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;
 
class Annotation extends Model{
	public $kind;
	public $updated;
	public $created;
	public $beforeSelectedText;
	protected $__currentVersionRangesType = 'AnnotationCurrentVersionRanges';
	protected $__currentVersionRangesDataType = '';
	public $currentVersionRanges;
	public $afterSelectedText;
	protected $__clientVersionRangesType = 'AnnotationClientVersionRanges';
	protected $__clientVersionRangesDataType = '';
	public $clientVersionRanges;
	public $volumeId;
	public $pageIds;
	public $layerId;
	public $selectedText;
	public $highlightStyle;
	public $data;
	public $id;
	public $selfLink;
	public function setKind($kind) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setUpdated($updated) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setCreated($created) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setBeforeSelectedText($beforeSelectedText) {
		$this->beforeSelectedText = $beforeSelectedText;
	}
	public function getBeforeSelectedText() {
		return $this->beforeSelectedText;
	}
	public function setCurrentVersionRanges(AnnotationCurrentVersionRanges $currentVersionRanges) {
		$this->currentVersionRanges = $currentVersionRanges;
	}
	public function getCurrentVersionRanges() {
		return $this->currentVersionRanges;
	}
	public function setAfterSelectedText($afterSelectedText) {
		$this->afterSelectedText = $afterSelectedText;
	}
	public function getAfterSelectedText() {
		return $this->afterSelectedText;
	}
	public function setClientVersionRanges(AnnotationClientVersionRanges $clientVersionRanges) {
		$this->clientVersionRanges = $clientVersionRanges;
	}
	public function getClientVersionRanges() {
		return $this->clientVersionRanges;
	}
	public function setVolumeId($volumeId) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
	public function setPageIds(/* array(string) */ $pageIds) {
		$this->assertIsArray($pageIds, 'string', __METHOD__);
		$this->pageIds = $pageIds;
	}
	public function getPageIds() {
		return $this->pageIds;
	}
	public function setLayerId($layerId) {
		$this->layerId = $layerId;
	}
	public function getLayerId() {
		return $this->layerId;
	}
	public function setSelectedText($selectedText) {
		$this->selectedText = $selectedText;
	}
	public function getSelectedText() {
		return $this->selectedText;
	}
	public function setHighlightStyle($highlightStyle) {
		$this->highlightStyle = $highlightStyle;
	}
	public function getHighlightStyle() {
		return $this->highlightStyle;
	}
	public function setData($data) {
		$this->data = $data;
	}
	public function getData() {
		return $this->data;
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