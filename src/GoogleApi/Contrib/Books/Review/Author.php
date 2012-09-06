<?php

namespace GoogleApi\Contrib\Books\Review;

use GoogleApi\Service\Model;

class Author extends Model {
	public $displayName;
	public function setDisplayName($displayName) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
}