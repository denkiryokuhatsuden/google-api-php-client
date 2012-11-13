<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 22:15
 * To change this template use File | Settings | File Templates.
 */

class OutputOutputMulti extends Model
{

    public $score;

    public $label;

    public function setScore ($score)
    {
        $this->score = $score;
    }

    public function getScore ()
    {
        return $this->score;
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