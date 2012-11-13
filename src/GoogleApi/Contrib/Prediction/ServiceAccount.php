<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:59
 * To change this template use File | Settings | File Templates.
 */


class Google_ServiceAccount extends Google_Model {
    public $scopes;
    public $kind;
    public $email;
    public function setScopes($scopes) {
        $this->scopes = $scopes;
    }
    public function getScopes() {
        return $this->scopes;
    }
    public function setKind($kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }
}
