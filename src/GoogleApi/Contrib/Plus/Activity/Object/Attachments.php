<?php

namespace GoogleApi\Contrib\Plus\Activity\Object;

use GoogleApi\Service\Model;

class Attachments extends Model
{
    public $displayName;

    protected $__fullImageType = 'ActivityObjectAttachmentsFullImage';

    protected $__fullImageDataType = '';

    public $fullImage;

    public $url;

    protected $__imageType = 'ActivityObjectAttachmentsImage';

    protected $__imageDataType = '';

    public $image;

    public $content;

    protected $__embedType = 'ActivityObjectAttachmentsEmbed';

    protected $__embedDataType = '';

    public $embed;

    public $id;

    public $objectType;

    public function setDisplayName ($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName ()
    {
        return $this->displayName;
    }

    public function setFullImage (ActivityObjectAttachmentsFullImage $fullImage)
    {
        $this->fullImage = $fullImage;
    }

    public function getFullImage ()
    {
        return $this->fullImage;
    }

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
    }

    public function setImage (ActivityObjectAttachmentsImage $image)
    {
        $this->image = $image;
    }

    public function getImage ()
    {
        return $this->image;
    }

    public function setContent ($content)
    {
        $this->content = $content;
    }

    public function getContent ()
    {
        return $this->content;
    }

    public function setEmbed (ActivityObjectAttachmentsEmbed $embed)
    {
        $this->embed = $embed;
    }

    public function getEmbed ()
    {
        return $this->embed;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getId ()
    {
        return $this->id;
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