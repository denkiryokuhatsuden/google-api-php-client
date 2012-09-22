<?php

namespace GoogleApi\Contrib\Plus\Activity\Object\Attachments;

use GoogleApi\Service\Model;

class Image extends Model
{
    public $url;

    public $width;

    public $type;

    public $height;

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
    }

    public function setWidth ($width)
    {
        $this->width = $width;
    }

    public function getWidth ()
    {
        return $this->width;
    }

    public function setType ($type)
    {
        $this->type = $type;
    }

    public function getType ()
    {
        return $this->type;
    }

    public function setHeight ($height)
    {
        $this->height = $height;
    }

    public function getHeight ()
    {
        return $this->height;
    }
}