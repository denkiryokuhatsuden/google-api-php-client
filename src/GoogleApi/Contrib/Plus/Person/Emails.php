<?php

namespace GoogleApi\Contrib\Plus\Person;

use GoogleApi\Service\Model;

class Emails extends Model
{
    public $type;

    public $primary;

    public $value;

    public function setType ($type)
    {
        $this->type = $type;
    }

    public function getType ()
    {
        return $this->type;
    }

    public function setPrimary ($primary)
    {
        $this->primary = $primary;
    }

    public function getPrimary ()
    {
        return $this->primary;
    }

    public function setValue ($value)
    {
        $this->value = $value;
    }

    public function getValue ()
    {
        return $this->value;
    }
}

