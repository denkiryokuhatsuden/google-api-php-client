<?php

namespace GoogleApi\Contrib\Plus\Comment;

use GoogleApi\Service\Model;

class InReplyTo extends Model
{
    public $url;

    public $id;

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
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
