<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;

class BooksAnnotationsRange extends Model {
	public $startPosition;
	public $endPosition;
	public $startOffset;
	public $endOffset;
	public function setStartPosition($startPosition) {
		$this->startPosition = $startPosition;
	}
	public function getStartPosition() {
		return $this->startPosition;
	}
	public function setEndPosition($endPosition) {
		$this->endPosition = $endPosition;
	}
	public function getEndPosition() {
		return $this->endPosition;
	}
	public function setStartOffset($startOffset) {
		$this->startOffset = $startOffset;
	}
	public function getStartOffset() {
		return $this->startOffset;
	}
	public function setEndOffset($endOffset) {
		$this->endOffset = $endOffset;
	}
	public function getEndOffset() {
		return $this->endOffset;
	}
}
