<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;

class Review extends Model {
    public $rating;
    public $kind;
    protected $__authorType = 'Review\Author';
    protected $__authorDataType = '';
    public $author;
    public $title;
    public $volumeId;
    public $content;
    protected $__sourceType = 'Review\Source';
    protected $__sourceDataType = '';
    public $source;
    public $date;
    public $type;
    public $fullTextUrl;
    public function setRating($rating) {
        $this->rating = $rating;
    }
    public function getRating() {
        return $this->rating;
    }
    public function setKind($kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setAuthor(ReviewAuthor $author) {
        $this->author = $author;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function getTitle() {
        return $this->title;
    }
    public function setVolumeId($volumeId) {
        $this->volumeId = $volumeId;
    }
    public function getVolumeId() {
        return $this->volumeId;
    }
    public function setContent($content) {
        $this->content = $content;
    }
    public function getContent() {
        return $this->content;
    }
    public function setSource(ReviewSource $source) {
        $this->source = $source;
    }
    public function getSource() {
        return $this->source;
    }
    public function setDate($date) {
        $this->date = $date;
    }
    public function getDate() {
        return $this->date;
    }
    public function setType($type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
    public function setFullTextUrl($fullTextUrl) {
        $this->fullTextUrl = $fullTextUrl;
    }
    public function getFullTextUrl() {
        return $this->fullTextUrl;
    }
}