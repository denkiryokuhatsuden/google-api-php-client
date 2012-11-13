<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 22:15
 * To change this template use File | Settings | File Templates.
 */

class TrainingDataAnalysis extends Model
{

    public $warnings;

    public function setWarnings(/* array(string) */ $warnings)
    {
        $this->assertIsArray($warnings, 'string', __METHOD__);
        $this->warnings = $warnings;
    }

    public function getWarnings ()
    {
        return $this->warnings;
    }
}
