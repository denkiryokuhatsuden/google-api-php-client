<?php

namespace GoogleApi\Contrib\Books\Volume;

use GoogleApi\Service\Model;

class VolumeInfoDimensions extends Model {
    public $width;
    public $thickness;
    public $height;
    public function setWidth($width) {
        $this->width = $width;
    }
    public function getWidth() {
        return $this->width;
    }
    public function setThickness($thickness) {
        $this->thickness = $thickness;
    }
    public function getThickness() {
        return $this->thickness;
    }
    public function setHeight($height) {
        $this->height = $height;
    }
    public function getHeight() {
        return $this->height;
    }
}
