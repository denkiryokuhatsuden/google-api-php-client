<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 22:10
 * To change this template use File | Settings | File Templates.
 */

namespace GoogleApi\Contrib\Prediction\Input;

use GoogleApi\Service\Model;

class Input extends Model
{
    public $csvInstance;

    public function setCsvInstance(/* array(object) */ $csvInstance)
    {
        $this->assertIsArray($csvInstance, 'object', __METHOD__);
        $this->csvInstance = $csvInstance;
    }

    public function getCsvInstance ()
    {
        return $this->csvInstance;
    }
}