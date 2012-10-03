<?php

namespace GoogleApi\Contrib\Analytics;

use GoogleApi\Service\Model;

class GoalUrlDestinationDetailsSteps extends Model
{

    public $url;

    public $name;

    public $number;

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
    }

    public function setName ($name)
    {
        $this->name = $name;
    }

    public function getName ()
    {
        return $this->name;
    }

    public function setNumber ($number)
    {
        $this->number = $number;
    }

    public function getNumber ()
    {
        return $this->number;
    }
}
