<?php

namespace GoogleApi\Contrib\Plus\Comment;

use GoogleApi\Service\Model;

class Object extends Model
{
    public $content;

    public $objectType;

    public function setContent ($content)
    {
        $this->content = $content;
    }

    public function getContent ()
    {
        return $this->content;
    }

    public function setObjectType ($objectType)
    {
        $this->objectType = $objectType;
    }

    public function getObjectType ()
    {
        return $this->objectType;
    }
}