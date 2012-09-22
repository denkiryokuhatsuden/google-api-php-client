<?php
class ActivityActorImage extends Model {
    public $url;
    public function setUrl($url) {
        $this->url = $url;
    }
    public function getUrl() {
        return $this->url;
    }
}
