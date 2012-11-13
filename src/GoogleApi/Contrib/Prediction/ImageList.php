<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;

class ImageList extends Model
{
    public $nextPageToken;
    protected $__itemsType = '\GoogleApi\Contrib\Prediction\Image';
    protected $__itemsDataType = 'array';
    public $items;
    public $kind;
    public $id;
    public $selfLink;

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setItems($items)
    {
        $this->assertIsArray($items, '\GoogleApi\Contrib\Prediction\Image', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
