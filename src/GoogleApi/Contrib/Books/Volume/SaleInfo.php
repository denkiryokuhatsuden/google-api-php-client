<?php

namespace GoogleApi\Contrib\Books\Volume;

use GoogleApi\Service\Model;

class SaleInfo extends Model {
	public $country;
	protected $__retailPriceType = '\GoogleApi\Contrib\Books\Volume\SaleInfoRetailPrice';
	protected $__retailPriceDataType = '';
	public $retailPrice;
	public $isEbook;
	public $saleability;
	public $buyLink;
	public $onSaleDate;
	protected $__listPriceType = '\GoogleApi\Contrib\Books\Volume\SaleInfoListPrice';
	protected $__listPriceDataType = '';
	public $listPrice;
	public function setCountry($country) {
		$this->country = $country;
	}
	public function getCountry() {
		return $this->country;
	}
	public function setRetailPrice(VolumeSaleInfoRetailPrice $retailPrice) {
		$this->retailPrice = $retailPrice;
	}
	public function getRetailPrice() {
		return $this->retailPrice;
	}
	public function setIsEbook($isEbook) {
		$this->isEbook = $isEbook;
	}
	public function getIsEbook() {
		return $this->isEbook;
	}
	public function setSaleability($saleability) {
		$this->saleability = $saleability;
	}
	public function getSaleability() {
		return $this->saleability;
	}
	public function setBuyLink($buyLink) {
		$this->buyLink = $buyLink;
	}
	public function getBuyLink() {
		return $this->buyLink;
	}
	public function setOnSaleDate($onSaleDate) {
		$this->onSaleDate = $onSaleDate;
	}
	public function getOnSaleDate() {
		return $this->onSaleDate;
	}
	public function setListPrice(VolumeSaleInfoListPrice $listPrice) {
		$this->listPrice = $listPrice;
	}
	public function getListPrice() {
		return $this->listPrice;
	}
}



