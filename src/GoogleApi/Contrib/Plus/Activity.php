<?php

namespace GoogleApi\Contrib\Plus;

use GoogleApi\Service\Model;

/**
 * 
 * @author dag
 *
 */
class Activity extends Model
{
    public $placeName;

    public $kind;

    public $updated;

    protected $__providerType = 'GoogleApi\Contrib\Plus\Activity\Provider';

    protected $__providerDataType = '';

    public $provider;

    public $title;

    public $url;

    public $geocode;

    protected $__objectType = 'GoogleApi\Contrib\Plus\Activity\Object';

    protected $__objectDataType = '';

    public $object;

    public $placeId;

    protected $__actorType = 'GoogleApi\Contrib\Plus\Activity\Actor';

    protected $__actorDataType = '';

    public $actor;

    public $id;

    protected $__accessType = 'GoogleApi\Contrib\Plus\Acl';

    protected $__accessDataType = '';

    public $access;

    public $verb;

    public $etag;

    public $radius;

    public $address;

    public $crosspostSource;

    public $placeholder;

    public $annotation;

    public $published;

    public function setPlaceName ($placeName)
    {
        $this->placeName = $placeName;
    }

    public function getPlaceName ()
    {
        return $this->placeName;
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

    public function setProvider (GoogleApi\Contrib\Plus\Activity\Provider $provider)
    {
        $this->provider = $provider;
    }

    public function getProvider ()
    {
        return $this->provider;
    }

    public function setTitle ($title)
    {
        $this->title = $title;
    }

    public function getTitle ()
    {
        return $this->title;
    }

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
    }

    public function setGeocode ($geocode)
    {
        $this->geocode = $geocode;
    }

    public function getGeocode ()
    {
        return $this->geocode;
    }

    public function setObject (GoogleApi\Contrib\Plus\Activity\Object $object)
    {
        $this->object = $object;
    }

    public function getObject ()
    {
        return $this->object;
    }

    public function setPlaceId ($placeId)
    {
        $this->placeId = $placeId;
    }

    public function getPlaceId ()
    {
        return $this->placeId;
    }

    public function setActor (GoogleApi\Contrib\Plus\Activity\Actor $actor)
    {
        $this->actor = $actor;
    }

    public function getActor ()
    {
        return $this->actor;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getId ()
    {
        return $this->id;
    }

    public function setAccess (GoogleApi\Contrib\Plus\Acl $access)
    {
        $this->access = $access;
    }

    public function getAccess ()
    {
        return $this->access;
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

    public function setRadius ($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius ()
    {
        return $this->radius;
    }

    public function setAddress ($address)
    {
        $this->address = $address;
    }

    public function getAddress ()
    {
        return $this->address;
    }

    public function setCrosspostSource ($crosspostSource)
    {
        $this->crosspostSource = $crosspostSource;
    }

    public function getCrosspostSource ()
    {
        return $this->crosspostSource;
    }

    public function setPlaceholder ($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    public function getPlaceholder ()
    {
        return $this->placeholder;
    }

    public function setAnnotation ($annotation)
    {
        $this->annotation = $annotation;
    }

    public function getAnnotation ()
    {
        return $this->annotation;
    }

    public function setPublished ($published)
    {
        $this->published = $published;
    }

    public function getPublished ()
    {
        return $this->published;
    }
}