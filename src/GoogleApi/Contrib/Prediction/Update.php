<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 22:08
 * To change this template use File | Settings | File Templates.
 */

class Update extends Model
{

    public $csvInstance;

    public $label;

    public function setCsvInstance(/* array(object) */ $csvInstance)
    {
        $this->assertIsArray($csvInstance, 'object', __METHOD__);
        $this->csvInstance = $csvInstance;
    }

    public function getCsvInstance ()
    {
        return $this->csvInstance;
    }

    public function setLabel ($label)
    {
        $this->label = $label;
    }

    public function getLabel ()
    {
        return $this->label;
    }
}
