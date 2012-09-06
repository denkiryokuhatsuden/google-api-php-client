<?php 

namespace GoogleApi\Contrib\Books\Volume;

use GoogleApi\Service\Model;

class VolumeInfoIndustryIdentifiers extends Model {
	public $identifier;
	public $type;
	public function setIdentifier($identifier) {
		$this->identifier = $identifier;
	}
	public function getIdentifier() {
		return $this->identifier;
	}
	public function setType($type) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}