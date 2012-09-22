<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;

class ReadingPosition extends Model {
    public $kind;
    public $gbImagePosition;
    public $epubCfiPosition;
    public $updated;
    public $volumeId;
    public $pdfPosition;
    public $gbTextPosition;
    public function setKind($kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setGbImagePosition($gbImagePosition) {
        $this->gbImagePosition = $gbImagePosition;
    }
    public function getGbImagePosition() {
        return $this->gbImagePosition;
    }
    public function setEpubCfiPosition($epubCfiPosition) {
        $this->epubCfiPosition = $epubCfiPosition;
    }
    public function getEpubCfiPosition() {
        return $this->epubCfiPosition;
    }
    public function setUpdated($updated) {
        $this->updated = $updated;
    }
    public function getUpdated() {
        return $this->updated;
    }
    public function setVolumeId($volumeId) {
        $this->volumeId = $volumeId;
    }
    public function getVolumeId() {
        return $this->volumeId;
    }
    public function setPdfPosition($pdfPosition) {
        $this->pdfPosition = $pdfPosition;
    }
    public function getPdfPosition() {
        return $this->pdfPosition;
    }
    public function setGbTextPosition($gbTextPosition) {
        $this->gbTextPosition = $gbTextPosition;
    }
    public function getGbTextPosition() {
        return $this->gbTextPosition;
    }
}