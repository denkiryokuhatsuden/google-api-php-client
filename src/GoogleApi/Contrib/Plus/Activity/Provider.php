<?php

namespace GoogleApi\Contrib\Plus\Activity;

use GoogleApi\Service\Model;

/**
 * 
 * @author dag
 *
 */
class Provider extends Model
{
    public $title;

    public function setTitle ($title)
    {
        $this->title = $title;
    }

    public function getTitle ()
    {
        return $this->title;
    }
}