<?php

namespace GoogleApi\Contrib\Plus;

use GoogleApi\Service\Model;

class PlusAclentryResource extends Model
{
    public $type;

    public $id;

    public function setType ($type)
    {
        $this->type = $type;
    }

    public function getType ()
    {
        return $this->type;
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