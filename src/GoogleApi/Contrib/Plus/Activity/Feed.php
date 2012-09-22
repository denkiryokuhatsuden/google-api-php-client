<?php

namespace GoogleApi\Contrib\Plus\Activity;

use GoogleApi\Service\Model;

class Feed extends Model
{

    public $nextPageToken;

    public $kind;

    public $title;

    protected $__itemsType = 'GoogleApi\Contrib\Plus\Activity';

    protected $__itemsDataType = 'array';

    public $items;

    public $updated;

    public $nextLink;

    public $etag;

    public $id;

    public $selfLink;

    public function setNextPageToken ($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken ()
    {
        return $this->nextPageToken;
    }

    public function setKind ($kind)
    {
        $this->kind = $kind;
    }

    public function getKind ()
    {
        return $this->kind;
    }

    public function setTitle ($title)
    {
        $this->title = $title;
    }

    public function getTitle ()
    {
        return $this->title;
    }

    public function setItems(/* array(Activity) */ $items)
    {
        $this->assertIsArray($items, 'GoogleApi\Contrib\Plus\Activity', __METHOD__);
        $this->items = $items;
    }

    public function getItems ()
    {
        return $this->items;
    }

    public function setUpdated ($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated ()
    {
        return $this->updated;
    }

    public function setNextLink ($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getNextLink ()
    {
        return $this->nextLink;
    }

    public function setEtag ($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag ()
    {
        return $this->etag;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getId ()
    {
        return $this->id;
    }

    public function setSelfLink ($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink ()
    {
        return $this->selfLink;
    }
}