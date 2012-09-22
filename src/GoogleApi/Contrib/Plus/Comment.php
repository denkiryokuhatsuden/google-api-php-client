<?php

namespace GoogleApi\Contrib\Plus;

use GoogleApi\Service\Model;

/**
 * 
 * @author dag
 *
 */
class Comment extends Model
{
    protected $__inReplyToType = 'GoogleApi\Contrib\Plus\Comment\InReplyTo';

    protected $__inReplyToDataType = 'array';

    public $inReplyTo;

    public $kind;

    protected $__objectType = 'GoogleApi\Contrib\Plus\Comment\Object';

    protected $__objectDataType = '';

    public $object;

    public $updated;

    protected $__actorType = 'GoogleApi\Contrib\Plus\Comment\Actor';

    protected $__actorDataType = '';

    public $actor;

    public $verb;

    public $etag;

    public $published;

    public $id;

    public $selfLink;

    public function setInReplyTo(/* array(CommentInReplyTo) */ $inReplyTo)
    {
        $this->assertIsArray($inReplyTo, 'GoogleApi\Contrib\Plus\Comment\InReplyTo', __METHOD__);
        $this->inReplyTo = $inReplyTo;
    }

    public function getInReplyTo ()
    {
        return $this->inReplyTo;
    }

    public function setKind ($kind)
    {
        $this->kind = $kind;
    }

    public function getKind ()
    {
        return $this->kind;
    }

    public function setObject (GoogleApi\Contrib\Plus\Comment\Object $object)
    {
        $this->object = $object;
    }

    public function getObject ()
    {
        return $this->object;
    }

    public function setUpdated ($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated ()
    {
        return $this->updated;
    }

    public function setActor (GoogleApi\Contrib\Plus\Comment\Actor $actor)
    {
        $this->actor = $actor;
    }

    public function getActor ()
    {
        return $this->actor;
    }

    public function setVerb ($verb)
    {
        $this->verb = $verb;
    }

    public function getVerb ()
    {
        return $this->verb;
    }

    public function setEtag ($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag ()
    {
        return $this->etag;
    }

    public function setPublished ($published)
    {
        $this->published = $published;
    }

    public function getPublished ()
    {
        return $this->published;
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
