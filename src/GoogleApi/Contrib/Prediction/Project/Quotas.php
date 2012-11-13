<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:52
 * To change this template use File | Settings | File Templates.
 */

class Google_ProjectQuotas extends Google_Model {
    public $usage;
    public $metric;
    public $limit;
    public function setUsage($usage) {
        $this->usage = $usage;
    }
    public function getUsage() {
        return $this->usage;
    }
    public function setMetric($metric) {
        $this->metric = $metric;
    }
    public function getMetric() {
        return $this->metric;
    }
    public function setLimit($limit) {
        $this->limit = $limit;
    }
    public function getLimit() {
        return $this->limit;
    }
}
