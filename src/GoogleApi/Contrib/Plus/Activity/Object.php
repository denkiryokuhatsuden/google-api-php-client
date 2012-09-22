<?php

namespace GoogleApi\Contrib\Plus\Activity;

use GoogleApi\Service\Model;

class Object extends Model
{
    protected $__resharersType = 'GoogleApi\Contrib\Plus\Activity\Object\Resharers';

    protected $__resharersDataType = '';

    public $resharers;

    protected $__attachmentsType = 'GoogleApi\Contrib\Plus\Activity\Object\Attachments';

    protected $__attachmentsDataType = 'array';

    public $attachments;

    public $originalContent;

    protected $__plusonersType = 'GoogleApi\Contrib\Plus\Activity\Object\Plusoners';

    protected $__plusonersDataType = '';

    public $plusoners;

    protected $__actorType = 'GoogleApi\Contrib\Plus\Activity\Object\Actor';

    protected $__actorDataType = '';

    public $actor;

    public $content;

    public $url;

    protected $__repliesType = 'GoogleApi\Contrib\Plus\Activity\Object\Replies';

    protected $__repliesDataType = '';

    public $replies;

    public $id;

    public $objectType;

    public function setResharers (ActivityObjectResharers $resharers)
    {
        $this->resharers = $resharers;
    }

    public function getResharers ()
    {
        return $this->resharers;
    }

    public function setAttachments(/* array(ActivityObjectAttachments) */ $attachments)
    {
        $this->assertIsArray($attachments, 'GoogleApi\Contrib\Plus\Activity\Object\Attachments', 
                __METHOD__);
        $this->attachments = $attachments;
    }

    public function getAttachments ()
    {
        return $this->attachments;
    }

    public function setOriginalContent ($originalContent)
    {
        $this->originalContent = $originalContent;
    }

    public function getOriginalContent ()
    {
        return $this->originalContent;
    }

    public function setPlusoners (GoogleApi\Contrib\Plus\Activity\Object\Plusoners $plusoners)
    {
        $this->plusoners = $plusoners;
    }

    public function getPlusoners ()
    {
        return $this->plusoners;
    }

    public function setActor (GoogleApi\Contrib\Plus\Activity\Object\Actor $actor)
    {
        $this->actor = $actor;
    }

    public function getActor ()
    {
        return $this->actor;
    }

    public function setContent ($content)
    {
        $this->content = $content;
    }

    public function getContent ()
    {
        return $this->content;
    }

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
    }

    public function setReplies (GoogleApi\Contrib\Plus\Activity\Object\Replies $replies)
    {
        $this->replies = $replies;
    }

    public function getReplies ()
    {
        return $this->replies;
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