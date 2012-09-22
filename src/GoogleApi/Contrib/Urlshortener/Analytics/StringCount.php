<?php

namespace GoogleApi\Contrib\Urlshortener\Analytics;

use GoogleApi\Service\Model;

/**
 *
 * @author dag
 *        
 */
class StringCount extends Model
{
    public $count;

    public $id;

    public function setCount ($count)
    {
        $this->count = $count;
    }

    public function getCount ()
    {
        return $this->count;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getId ()
    {
        return $this->id;
    }
}