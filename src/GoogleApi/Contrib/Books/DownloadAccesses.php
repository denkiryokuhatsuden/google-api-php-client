<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;

class DownloadAccesses extends Model {
	protected $__downloadAccessListType = 'DownloadAccessRestriction';
	protected $__downloadAccessListDataType = 'array';
	public $downloadAccessList;
	public $kind;
	public function setDownloadAccessList(/* array(DownloadAccessRestriction) */ $downloadAccessList) {
		$this->assertIsArray($downloadAccessList, 'DownloadAccessRestriction', __METHOD__);
		$this->downloadAccessList = $downloadAccessList;
	}
	public function getDownloadAccessList() {
		return $this->downloadAccessList;
	}
	public function setKind($kind) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
}
