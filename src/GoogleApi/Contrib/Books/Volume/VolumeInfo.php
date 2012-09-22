<?php


namespace GoogleApi\Contrib\Books\Volume;

use GoogleApi\Service\Model;

class VolumeInfo extends Model {
    public $publisher;
    public $subtitle;
    public $description;
    public $language;
    public $pageCount;
    protected $__imageLinksType = '\GoogleApi\Contrib\Books\Volume\VolumeInfoImageLinks';
    protected $__imageLinksDataType = '';
    public $imageLinks;
    public $publishedDate;
    public $previewLink;
    public $printType;
    public $ratingsCount;
    public $mainCategory;
    protected $__dimensionsType = '\GoogleApi\Contrib\Books\Volume\VolumeInfoDimensions';
    protected $__dimensionsDataType = '';
    public $dimensions;
    public $contentVersion;
    protected $__industryIdentifiersType = '\GoogleApi\Contrib\Books\Volume\VolumeInfoIndustryIdentifiers';
    protected $__industryIdentifiersDataType = 'array';
    public $industryIdentifiers;
    public $authors;
    public $title;
    public $canonicalVolumeLink;
    public $infoLink;
    public $categories;
    public $averageRating;
    public function setPublisher($publisher) {
        $this->publisher = $publisher;
    }
    public function getPublisher() {
        return $this->publisher;
    }
    public function setSubtitle($subtitle) {
        $this->subtitle = $subtitle;
    }
    public function getSubtitle() {
        return $this->subtitle;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescription() {
        return $this->description;
    }
    public function setLanguage($language) {
        $this->language = $language;
    }
    public function getLanguage() {
        return $this->language;
    }
    public function setPageCount($pageCount) {
        $this->pageCount = $pageCount;
    }
    public function getPageCount() {
        return $this->pageCount;
    }
    public function setImageLinks(VolumeVolumeInfoImageLinks $imageLinks) {
        $this->imageLinks = $imageLinks;
    }
    public function getImageLinks() {
        return $this->imageLinks;
    }
    public function setPublishedDate($publishedDate) {
        $this->publishedDate = $publishedDate;
    }
    public function getPublishedDate() {
        return $this->publishedDate;
    }
    public function setPreviewLink($previewLink) {
        $this->previewLink = $previewLink;
    }
    public function getPreviewLink() {
        return $this->previewLink;
    }
    public function setPrintType($printType) {
        $this->printType = $printType;
    }
    public function getPrintType() {
        return $this->printType;
    }
    public function setRatingsCount($ratingsCount) {
        $this->ratingsCount = $ratingsCount;
    }
    public function getRatingsCount() {
        return $this->ratingsCount;
    }
    public function setMainCategory($mainCategory) {
        $this->mainCategory = $mainCategory;
    }
    public function getMainCategory() {
        return $this->mainCategory;
    }
    public function setDimensions(VolumeVolumeInfoDimensions $dimensions) {
        $this->dimensions = $dimensions;
    }
    public function getDimensions() {
        return $this->dimensions;
    }
    public function setContentVersion($contentVersion) {
        $this->contentVersion = $contentVersion;
    }
    public function getContentVersion() {
        return $this->contentVersion;
    }
    public function setIndustryIdentifiers(/* array(VolumeVolumeInfoIndustryIdentifiers) */ $industryIdentifiers) {
        $this->assertIsArray($industryIdentifiers, 'VolumeVolumeInfoIndustryIdentifiers', __METHOD__);
        $this->industryIdentifiers = $industryIdentifiers;
    }
    public function getIndustryIdentifiers() {
        return $this->industryIdentifiers;
    }
    public function setAuthors(/* array(string) */ $authors) {
        $this->assertIsArray($authors, 'string', __METHOD__);
        $this->authors = $authors;
    }
    public function getAuthors() {
        return $this->authors;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function getTitle() {
        return $this->title;
    }
    public function setCanonicalVolumeLink($canonicalVolumeLink) {
        $this->canonicalVolumeLink = $canonicalVolumeLink;
    }
    public function getCanonicalVolumeLink() {
        return $this->canonicalVolumeLink;
    }
    public function setInfoLink($infoLink) {
        $this->infoLink = $infoLink;
    }
    public function getInfoLink() {
        return $this->infoLink;
    }
    public function setCategories(/* array(string) */ $categories) {
        $this->assertIsArray($categories, 'string', __METHOD__);
        $this->categories = $categories;
    }
    public function getCategories() {
        return $this->categories;
    }
    public function setAverageRating($averageRating) {
        $this->averageRating = $averageRating;
    }
    public function getAverageRating() {
        return $this->averageRating;
    }
}