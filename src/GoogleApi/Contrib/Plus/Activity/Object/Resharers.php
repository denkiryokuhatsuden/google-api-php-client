<?php

namespace GoogleApi\Contrib\Plus\Activity\Object;

use GoogleApi\Service\Model;

class Resharers extends Model {
    public $totalItems;
    public $selfLink;
    public function setTotalItems($totalItems) {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems() {
        return $this->totalItems;
    }
    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
}

