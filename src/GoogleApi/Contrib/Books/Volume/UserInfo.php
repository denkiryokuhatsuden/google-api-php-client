<?php

namespace GoogleApi\Contrib\Books\Volume;

use GoogleApi\Service\Model;

class UserInfo extends Model {
    public $updated;
    public $isPreordered;
    public $isPurchased;
    protected $__readingPositionType = 'ReadingPosition';
    protected $__readingPositionDataType = '';
    public $readingPosition;
    protected $__reviewType = 'Review';
    protected $__reviewDataType = '';
    public $review;
    public function setUpdated($updated) {
        $this->updated = $updated;
    }
    public function getUpdated() {
        return $this->updated;
    }
    public function setIsPreordered($isPreordered) {
        $this->isPreordered = $isPreordered;
    }
    public function getIsPreordered() {
        return $this->isPreordered;
    }
    public function setIsPurchased($isPurchased) {
        $this->isPurchased = $isPurchased;
    }
    public function getIsPurchased() {
        return $this->isPurchased;
    }
    public function setReadingPosition(ReadingPosition $readingPosition) {
        $this->readingPosition = $readingPosition;
    }
    public function getReadingPosition() {
        return $this->readingPosition;
    }
    public function setReview(Review $review) {
        $this->review = $review;
    }
    public function getReview() {
        return $this->review;
    }
}