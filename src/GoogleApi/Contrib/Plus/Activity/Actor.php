<?php

namespace GoogleApi\Contrib\Plus\Activity;

use GoogleApi\Service\Model;

class Actor extends Model
{
    public $displayName;

    public $url;

    protected $__imageType = 'GoogleApi\Contrib\Plus\Activity\Actor\Image';

    protected $__imageDataType = '';

    public $image;

    public $familyName;

    public $givenName;

    public $id;

    public function setDisplayName ($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName ()
    {
        return $this->displayName;
    }

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
    }

    public function setImage (GoogleApi\Contrib\Plus\Activity\Actor\Image $image)
    {
        $this->image = $image;
    }

    public function getImage ()
    {
        return $this->image;
    }

    public function setFamilyName ($familyName)
    {
        $this->familyName = $familyName;
    }

    public function getFamilyName ()
    {
        return $this->familyName;
    }

    public function setGivenName ($givenName)
    {
        $this->givenName = $givenName;
    }

    public function getGivenName ()
    {
        return $this->givenName;
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