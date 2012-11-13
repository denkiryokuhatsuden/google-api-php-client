<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:58
 * To change this template use File | Settings | File Templates.
 */



class Google_MachineTypeEphemeralDisks extends Google_Model {
    public $diskGb;
    public function setDiskGb($diskGb) {
        $this->diskGb = $diskGb;
    }
    public function getDiskGb() {
        return $this->diskGb;
    }
}