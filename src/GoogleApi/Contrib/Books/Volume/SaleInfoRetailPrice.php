<?php

namespace GoogleApi\Contrib\Books\Volume;

use GoogleApi\Service\Model;

class SaleInfoRetailPrice extends Model {
	public $amount;
	public $currencyCode;
	public function setAmount($amount) {
		$this->amount = $amount;
	}
	public function getAmount() {
		return $this->amount;
	}
	public function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;
	}
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
}

