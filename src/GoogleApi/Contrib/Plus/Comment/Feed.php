<?php

namespace GoogleApi\Contrib\Plus\Comment;

use GoogleApi\Service\Model;

class Feed extends Model
{
    public $nextPageToken;

    public $kind;

    public $title;

    protected $__itemsType = 'GoogleApi\Contrib\Plus\Comment';

    protected $__itemsDataType = 'array';

    public $items;

    public $updated;

    public $nextLink;

    public $etag;

    public $id;

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

    public function setItems(/* array(Comment) */ $items)
    {
        $this->assertIsArray($items, 'GoogleApi\Contrib\Plus\Comment', __METHOD__);
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
}