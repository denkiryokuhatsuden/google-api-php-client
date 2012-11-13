<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:47
 * To change this template use File | Settings | File Templates.
 */

class Google_Operation extends Google_Model {
    public $status;
    public $kind;
    public $name;
    public $startTime;
    public $httpErrorStatusCode;
    public $user;
    protected $__errorType = 'Google_OperationError';
    protected $__errorDataType = '';
    public $error;
    public $targetId;
    public $operationType;
    public $statusMessage;
    public $insertTime;
    public $httpErrorMessage;
    public $progress;
    public $clientOperationId;
    public $endTime;
    public $creationTimestamp;
    public $id;
    public $selfLink;
    public $targetLink;
    public function setStatus($status) {
        $this->status = $status;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setKind($kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setStartTime($startTime) {
        $this->startTime = $startTime;
    }
    public function getStartTime() {
        return $this->startTime;
    }
    public function setHttpErrorStatusCode($httpErrorStatusCode) {
        $this->httpErrorStatusCode = $httpErrorStatusCode;
    }
    public function getHttpErrorStatusCode() {
        return $this->httpErrorStatusCode;
    }
    public function setUser($user) {
        $this->user = $user;
    }
    public function getUser() {
        return $this->user;
    }
    public function setError(Google_OperationError $error) {
        $this->error = $error;
    }
    public function getError() {
        return $this->error;
    }
    public function setTargetId($targetId) {
        $this->targetId = $targetId;
    }
    public function getTargetId() {
        return $this->targetId;
    }
    public function setOperationType($operationType) {
        $this->operationType = $operationType;
    }
    public function getOperationType() {
        return $this->operationType;
    }
    public function setStatusMessage($statusMessage) {
        $this->statusMessage = $statusMessage;
    }
    public function getStatusMessage() {
        return $this->statusMessage;
    }
    public function setInsertTime($insertTime) {
        $this->insertTime = $insertTime;
    }
    public function getInsertTime() {
        return $this->insertTime;
    }
    public function setHttpErrorMessage($httpErrorMessage) {
        $this->httpErrorMessage = $httpErrorMessage;
    }
    public function getHttpErrorMessage() {
        return $this->httpErrorMessage;
    }
    public function setProgress($progress) {
        $this->progress = $progress;
    }
    public function getProgress() {
        return $this->progress;
    }
    public function setClientOperationId($clientOperationId) {
        $this->clientOperationId = $clientOperationId;
    }
    public function getClientOperationId() {
        return $this->clientOperationId;
    }
    public function setEndTime($endTime) {
        $this->endTime = $endTime;
    }
    public function getEndTime() {
        return $this->endTime;
    }
    public function setCreationTimestamp($creationTimestamp) {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp() {
        return $this->creationTimestamp;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setTargetLink($targetLink) {
        $this->targetLink = $targetLink;
    }
    public function getTargetLink() {
        return $this->targetLink;
    }
}