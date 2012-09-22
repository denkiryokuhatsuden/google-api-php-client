<?php

namespace GoogleApi\Contrib\Plus;

use GoogleApi\Service\Model;

/**
 * 
 * @author dag
 *
 */
class Person extends Model
{
    public $relationshipStatus;

    protected $__organizationsType = 'GoogleApi\Contrib\Plus\Person\Organizations';

    protected $__organizationsDataType = 'array';

    public $organizations;

    public $kind;

    public $displayName;

    protected $__nameType = 'GoogleApi\Contrib\Plus\Person\Name';

    protected $__nameDataType = '';

    public $name;

    public $url;

    public $gender;

    public $aboutMe;

    public $tagline;

    protected $__urlsType = 'GoogleApi\Contrib\Plus\Person\Urls';

    protected $__urlsDataType = 'array';

    public $urls;

    protected $__placesLivedType = 'GoogleApi\Contrib\Plus\Person\PlacesLived';

    protected $__placesLivedDataType = 'array';

    public $placesLived;

    protected $__emailsType = 'GoogleApi\Contrib\Plus\Person\Emails';

    protected $__emailsDataType = 'array';

    public $emails;

    public $nickname;

    public $birthday;

    public $etag;

    protected $__imageType = 'GoogleApi\Contrib\Plus\Person\Image';

    protected $__imageDataType = '';

    public $image;

    public $hasApp;

    public $id;

    public $languagesSpoken;

    public $currentLocation;

    public $objectType;

    public function setRelationshipStatus ($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;
    }

    public function getRelationshipStatus ()
    {
        return $this->relationshipStatus;
    }

    public function setOrganizations(/* array(PersonOrganizations) */ $organizations)
    {
        $this->assertIsArray($organizations, 'GoogleApi\Contrib\Plus\Person\Organizations', __METHOD__);
        $this->organizations = $organizations;
    }

    public function getOrganizations ()
    {
        return $this->organizations;
    }

    public function setKind ($kind)
    {
        $this->kind = $kind;
    }

    public function getKind ()
    {
        return $this->kind;
    }

    public function setDisplayName ($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName ()
    {
        return $this->displayName;
    }

    public function setName (PersonName $name)
    {
        $this->name = $name;
    }

    public function getName ()
    {
        return $this->name;
    }

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
    }

    public function setGender ($gender)
    {
        $this->gender = $gender;
    }

    public function getGender ()
    {
        return $this->gender;
    }

    public function setAboutMe ($aboutMe)
    {
        $this->aboutMe = $aboutMe;
    }

    public function getAboutMe ()
    {
        return $this->aboutMe;
    }

    public function setTagline ($tagline)
    {
        $this->tagline = $tagline;
    }

    public function getTagline ()
    {
        return $this->tagline;
    }

    public function setUrls(/* array(PersonUrls) */ $urls)
    {
        $this->assertIsArray($urls, 'GoogleApi\Contrib\Plus\Person\Urls', __METHOD__);
        $this->urls = $urls;
    }

    public function getUrls ()
    {
        return $this->urls;
    }

    public function setPlacesLived(/* array(PersonPlacesLived) */ $placesLived)
    {
        $this->assertIsArray($placesLived, 'GoogleApi\Contrib\Plus\Person\PlacesLived', __METHOD__);
        $this->placesLived = $placesLived;
    }

    public function getPlacesLived ()
    {
        return $this->placesLived;
    }

    public function setEmails(/* array(PersonEmails) */ $emails)
    {
        $this->assertIsArray($emails, 'GoogleApi\Contrib\Plus\Person\Emails', __METHOD__);
        $this->emails = $emails;
    }

    public function getEmails ()
    {
        return $this->emails;
    }

    public function setNickname ($nickname)
    {
        $this->nickname = $nickname;
    }

    public function getNickname ()
    {
        return $this->nickname;
    }

    public function setBirthday ($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getBirthday ()
    {
        return $this->birthday;
    }

    public function setEtag ($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag ()
    {
        return $this->etag;
    }

    public function setImage (PersonImage $image)
    {
        $this->image = $image;
    }

    public function getImage ()
    {
        return $this->image;
    }

    public function setHasApp ($hasApp)
    {
        $this->hasApp = $hasApp;
    }

    public function getHasApp ()
    {
        return $this->hasApp;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getId ()
    {
        return $this->id;
    }

    public function setLanguagesSpoken(/* array(string) */ $languagesSpoken)
    {
        $this->assertIsArray($languagesSpoken, 'string', __METHOD__);
        $this->languagesSpoken = $languagesSpoken;
    }

    public function getLanguagesSpoken ()
    {
        return $this->languagesSpoken;
    }

    public function setCurrentLocation ($currentLocation)
    {
        $this->currentLocation = $currentLocation;
    }

    public function getCurrentLocation ()
    {
        return $this->currentLocation;
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