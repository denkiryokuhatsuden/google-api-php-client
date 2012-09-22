<?php

namespace GoogleApi\Contrib\Books\Volume;

use GoogleApi\Service\Model;

class VolumeInfoImageLinks extends Model {
    public $medium;
    public $smallThumbnail;
    public $large;
    public $extraLarge;
    public $small;
    public $thumbnail;
    public function setMedium($medium) {
        $this->medium = $medium;
    }
    public function getMedium() {
        return $this->medium;
    }
    public function setSmallThumbnail($smallThumbnail) {
        $this->smallThumbnail = $smallThumbnail;
    }
    public function getSmallThumbnail() {
        return $this->smallThumbnail;
    }
    public function setLarge($large) {
        $this->large = $large;
    }
    public function getLarge() {
        return $this->large;
    }
    public function setExtraLarge($extraLarge) {
        $this->extraLarge = $extraLarge;
    }
    public function getExtraLarge() {
        return $this->extraLarge;
    }
    public function setSmall($small) {
        $this->small = $small;
    }
    public function getSmall() {
        return $this->small;
    }
    public function setThumbnail($thumbnail) {
        $this->thumbnail = $thumbnail;
    }
    public function getThumbnail() {
        return $this->thumbnail;
    }
}