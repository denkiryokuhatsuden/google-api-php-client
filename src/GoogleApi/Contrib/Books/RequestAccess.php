<?php

namespace GoogleApi\Contrib\Books;

use GoogleApi\Service\Model;

class RequestAccess extends Model {
    protected $__downloadAccessType = 'DownloadAccessRestriction';
    protected $__downloadAccessDataType = '';
    public $downloadAccess;
    public $kind;
    protected $__concurrentAccessType = 'ConcurrentAccessRestriction';
    protected $__concurrentAccessDataType = '';
    public $concurrentAccess;
    public function setDownloadAccess(DownloadAccessRestriction $downloadAccess) {
        $this->downloadAccess = $downloadAccess;
    }
    public function getDownloadAccess() {
        return $this->downloadAccess;
    }
    public function setKind($kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setConcurrentAccess(ConcurrentAccessRestriction $concurrentAccess) {
        $this->concurrentAccess = $concurrentAccess;
    }
    public function getConcurrentAccess() {
        return $this->concurrentAccess;
    }
}

