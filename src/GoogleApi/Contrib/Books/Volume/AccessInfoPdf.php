<?php

namespace GoogleApi\Contrib\Books\Volume;

use GoogleApi\Service\Model;

class AccessInfoPdf extends Model {
	public $downloadLink;
	public $acsTokenLink;
	public function setDownloadLink($downloadLink) {
		$this->downloadLink = $downloadLink;
	}
	public function getDownloadLink() {
		return $this->downloadLink;
	}
	public function setAcsTokenLink($acsTokenLink) {
		$this->acsTokenLink = $acsTokenLink;
	}
	public function getAcsTokenLink() {
		return $this->acsTokenLink;
	}
}
