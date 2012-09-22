<?php

namespace GoogleApi\Contrib\Plus\Activity\Object\Actor;

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
