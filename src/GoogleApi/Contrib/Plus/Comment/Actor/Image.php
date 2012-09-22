<?php

namespace GoogleApi\Contrib\Plus\Comment;

use GoogleApi\Service\Model;

class Image extends Model
{
    public $url;

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
    }
}