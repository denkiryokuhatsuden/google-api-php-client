<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:56
 * To change this template use File | Settings | File Templates.
 */

class Google_FirewallAllowed extends Google_Model {
    public $IPProtocol;
    public $ports;
    public function setIPProtocol($IPProtocol) {
        $this->IPProtocol = $IPProtocol;
    }
    public function getIPProtocol() {
        return $this->IPProtocol;
    }
    public function setPorts($ports) {
        $this->ports = $ports;
    }
    public function getPorts() {
        return $this->ports;
    }
}