<?php

namespace GoogleApi\Contrib\Books\Volume;

use GoogleApi\Service\Model;

class AccessInfo extends Model {
	public $publicDomain;
	public $embeddable;
	protected $__downloadAccessType = '\GoogleApi\Contrib\Books\Volume\DownloadAccessRestriction';
	protected $__downloadAccessDataType = '';
	public $downloadAccess;
	public $country;
	public $textToSpeechPermission;
	protected $__pdfType = '\GoogleApi\Contrib\Books\Volume\AccessInfoPdf';
	protected $__pdfDataType = '';
	public $pdf;
	public $viewability;
	protected $__epubType = '\GoogleApi\Contrib\Books\Volume\AccessInfoEpub';
	protected $__epubDataType = '';
	public $epub;
	public $accessViewStatus;
	public function setPublicDomain($publicDomain) {
		$this->publicDomain = $publicDomain;
	}
	public function getPublicDomain() {
		return $this->publicDomain;
	}
	public function setEmbeddable($embeddable) {
		$this->embeddable = $embeddable;
	}
	public function getEmbeddable() {
		return $this->embeddable;
	}
	public function setDownloadAccess(DownloadAccessRestriction $downloadAccess) {
		$this->downloadAccess = $downloadAccess;
	}
	public function getDownloadAccess() {
		return $this->downloadAccess;
	}
	public function setCountry($country) {
		$this->country = $country;
	}
	public function getCountry() {
		return $this->country;
	}
	public function setTextToSpeechPermission($textToSpeechPermission) {
		$this->textToSpeechPermission = $textToSpeechPermission;
	}
	public function getTextToSpeechPermission() {
		return $this->textToSpeechPermission;
	}
	public function setPdf(VolumeAccessInfoPdf $pdf) {
		$this->pdf = $pdf;
	}
	public function getPdf() {
		return $this->pdf;
	}
	public function setViewability($viewability) {
		$this->viewability = $viewability;
	}
	public function getViewability() {
		return $this->viewability;
	}
	public function setEpub(VolumeAccessInfoEpub $epub) {
		$this->epub = $epub;
	}
	public function getEpub() {
		return $this->epub;
	}
	public function setAccessViewStatus($accessViewStatus) {
		$this->accessViewStatus = $accessViewStatus;
	}
	public function getAccessViewStatus() {
		return $this->accessViewStatus;
	}
}


