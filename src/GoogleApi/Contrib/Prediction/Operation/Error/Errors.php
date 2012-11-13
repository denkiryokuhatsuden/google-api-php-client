<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:48
 * To change this template use File | Settings | File Templates.
 */

class Google_OperationErrorErrors extends Google_Model {
    public $message;
    public $code;
    public $location;
    public function setMessage($message) {
        $this->message = $message;
    }
    public function getMessage() {
        return $this->message;
    }
    public function setCode($code) {
        $this->code = $code;
    }
    public function getCode() {
        return $this->code;
    }
    public function setLocation($location) {
        $this->location = $location;
    }
    public function getLocation() {
        return $this->location;
    }
}