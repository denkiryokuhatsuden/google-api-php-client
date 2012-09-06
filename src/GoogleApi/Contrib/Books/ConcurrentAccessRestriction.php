<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;

class ConcurrentAccessRestriction extends Model {
	public $nonce;
	public $kind;
	public $restricted;
	public $volumeId;
	public $maxConcurrentDevices;
	public $deviceAllowed;
	public $source;
	public $timeWindowSeconds;
	public $signature;
	public $reasonCode;
	public $message;
	public function setNonce($nonce) {
		$this->nonce = $nonce;
	}
	public function getNonce() {
		return $this->nonce;
	}
	public function setKind($kind) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setRestricted($restricted) {
		$this->restricted = $restricted;
	}
	public function getRestricted() {
		return $this->restricted;
	}
	public function setVolumeId($volumeId) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
	public function setMaxConcurrentDevices($maxConcurrentDevices) {
		$this->maxConcurrentDevices = $maxConcurrentDevices;
	}
	public function getMaxConcurrentDevices() {
		return $this->maxConcurrentDevices;
	}
	public function setDeviceAllowed($deviceAllowed) {
		$this->deviceAllowed = $deviceAllowed;
	}
	public function getDeviceAllowed() {
		return $this->deviceAllowed;
	}
	public function setSource($source) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
	}
	public function setTimeWindowSeconds($timeWindowSeconds) {
		$this->timeWindowSeconds = $timeWindowSeconds;
	}
	public function getTimeWindowSeconds() {
		return $this->timeWindowSeconds;
	}
	public function setSignature($signature) {
		$this->signature = $signature;
	}
	public function getSignature() {
		return $this->signature;
	}
	public function setReasonCode($reasonCode) {
		$this->reasonCode = $reasonCode;
	}
	public function getReasonCode() {
		return $this->reasonCode;
	}
	public function setMessage($message) {
		$this->message = $message;
	}
	public function getMessage() {
		return $this->message;
	}
}
