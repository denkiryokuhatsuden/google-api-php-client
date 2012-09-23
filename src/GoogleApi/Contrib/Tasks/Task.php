<?php

namespace GoogleApi\Contrib\Tasks;

use GoogleApi\Service\Model;

class Task extends Model
{
    public $status;

    public $kind;

    public $updated;

    public $parent;

    protected $__linksType = 'GoogleApi\Contrib\Tasks\Task\Links';

    protected $__linksDataType = 'array';

    public $links;

    public $title;

    public $deleted;

    public $completed;

    public $due;

    public $etag;

    public $notes;

    public $position;

    public $hidden;

    public $id;

    public $selfLink;

    public function setStatus ($status)
    {
        $this->status = $status;
    }

    public function getStatus ()
    {
        return $this->status;
    }

    public function setKind ($kind)
    {
        $this->kind = $kind;
    }

    public function getKind ()
    {
        return $this->kind;
    }

    public function setUpdated ($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated ()
    {
        return $this->updated;
    }

    public function setParent ($parent)
    {
        $this->parent = $parent;
    }

    public function getParent ()
    {
        return $this->parent;
    }

    public function setLinks(/* array(TaskLinks) */ $links)
    {
        $this->assertIsArray($links, 'GoogleApi\Contrib\Tasks\Task\Links', __METHOD__);
        $this->links = $links;
    }

    public function getLinks ()
    {
        return $this->links;
    }

    public function setTitle ($title)
    {
        $this->title = $title;
    }

    public function getTitle ()
    {
        return $this->title;
    }

    public function setDeleted ($deleted)
    {
        $this->deleted = $deleted;
    }

    public function getDeleted ()
    {
        return $this->deleted;
    }

    public function setCompleted ($completed)
    {
        $this->completed = $completed;
    }

    public function getCompleted ()
    {
        return $this->completed;
    }

    public function setDue ($due)
    {
        $this->due = $due;
    }

    public function getDue ()
    {
        return $this->due;
    }

    public function setEtag ($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag ()
    {
        return $this->etag;
    }

    public function setNotes ($notes)
    {
        $this->notes = $notes;
    }

    public function getNotes ()
    {
        return $this->notes;
    }

    public function setPosition ($position)
    {
        $this->position = $position;
    }

    public function getPosition ()
    {
        return $this->position;
    }

    public function setHidden ($hidden)
    {
        $this->hidden = $hidden;
    }

    public function getHidden ()
    {
        return $this->hidden;
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