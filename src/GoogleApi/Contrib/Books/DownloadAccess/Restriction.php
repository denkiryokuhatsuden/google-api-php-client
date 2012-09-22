<?php


namespace GoogleApi\Contrib\Books\DownloadAccess;

use GoogleApi\Service\Model;

class DownloadAccessRestriction extends Model {
    public $nonce;
    public $kind;
    public $justAcquired;
    public $maxDownloadDevices;
    public $downloadsAcquired;
    public $signature;
    public $volumeId;
    public $deviceAllowed;
    public $source;
    public $restricted;
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
    public function setJustAcquired($justAcquired) {
        $this->justAcquired = $justAcquired;
    }
    public function getJustAcquired() {
        return $this->justAcquired;
    }
    public function setMaxDownloadDevices($maxDownloadDevices) {
        $this->maxDownloadDevices = $maxDownloadDevices;
    }
    public function getMaxDownloadDevices() {
        return $this->maxDownloadDevices;
    }
    public function setDownloadsAcquired($downloadsAcquired) {
        $this->downloadsAcquired = $downloadsAcquired;
    }
    public function getDownloadsAcquired() {
        return $this->downloadsAcquired;
    }
    public function setSignature($signature) {
        $this->signature = $signature;
    }
    public function getSignature() {
        return $this->signature;
    }
    public function setVolumeId($volumeId) {
        $this->volumeId = $volumeId;
    }
    public function getVolumeId() {
        return $this->volumeId;
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
    public function setRestricted($restricted) {
        $this->restricted = $restricted;
    }
    public function getRestricted() {
        return $this->restricted;
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