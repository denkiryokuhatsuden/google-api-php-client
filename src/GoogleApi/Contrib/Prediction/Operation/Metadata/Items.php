<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:53
 * To change this template use File | Settings | File Templates.
 */


class Google_MetadataItems extends Google_Model {
    public $value;
    public $key;
    public function setValue($value) {
        $this->value = $value;
    }
    public function getValue() {
        return $this->value;
    }
    public function setKey($key) {
        $this->key = $key;
    }
    public function getKey() {
        return $this->key;
    }
}
