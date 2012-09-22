<?php

namespace GoogleApi\Contrib\Plus\Comment;

use GoogleApi\Service\Model;

class Actor extends Model
{
    public $url;

    protected $__imageType = 'GoogleApi\Contrib\Plus\Comment\Actor\Image';

    protected $__imageDataType = '';

    public $image;

    public $displayName;

    public $id;

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
    }

    public function setImage (GoogleApi\Contrib\Plus\Comment\Actor\Image $image)
    {
        $this->image = $image;
    }

    public function getImage ()
    {
        return $this->image;
    }

    public function setDisplayName ($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName ()
    {
        return $this->displayName;
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