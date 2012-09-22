<?php

namespace GoogleApi\Contrib\Books\Volume;

use GoogleApi\Service\Model;

class Source extends Model {
    public $extraDescription;
    public $url;
    public $description;
    public function setExtraDescription($extraDescription) {
        $this->extraDescription = $extraDescription;
    }
    public function getExtraDescription() {
        return $this->extraDescription;
    }
    public function setUrl($url) {
        $this->url = $url;
    }
    public function getUrl() {
        return $this->url;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescription() {
        return $this->description;
    }
}
