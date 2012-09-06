<?php


class AnnotationCurrentVersionRanges extends Model {
	public $contentVersion;
	protected $__gbTextRangeType = 'BooksAnnotationsRange';
	protected $__gbTextRangeDataType = '';
	public $gbTextRange;
	protected $__cfiRangeType = 'BooksAnnotationsRange';
	protected $__cfiRangeDataType = '';
	public $cfiRange;
	protected $__gbImageRangeType = 'BooksAnnotationsRange';
	protected $__gbImageRangeDataType = '';
	public $gbImageRange;
	public function setContentVersion($contentVersion) {
		$this->contentVersion = $contentVersion;
	}
	public function getContentVersion() {
		return $this->contentVersion;
	}
	public function setGbTextRange(BooksAnnotationsRange $gbTextRange) {
		$this->gbTextRange = $gbTextRange;
	}
	public function getGbTextRange() {
		return $this->gbTextRange;
	}
	public function setCfiRange(BooksAnnotationsRange $cfiRange) {
		$this->cfiRange = $cfiRange;
	}
	public function getCfiRange() {
		return $this->cfiRange;
	}
	public function setGbImageRange(BooksAnnotationsRange $gbImageRange) {
		$this->gbImageRange = $gbImageRange;
	}
	public function getGbImageRange() {
		return $this->gbImageRange;
	}
}