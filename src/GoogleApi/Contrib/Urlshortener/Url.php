<?php

namespace GoogleApi\Contrib\Urlshortener;

use GoogleApi\Service\Model;

/**
 * 
 * @author dag
 *
 */
class Url extends Model
{
    public $status;

    public $kind;

    public $created;

    protected $__analyticsType = 'GoogleApi\Contrib\Urlshortener\Analytics\Summary';

    protected $__analyticsDataType = '';

    public $analytics;

    public $longUrl;

    public $id;

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

    public function setCreated ($created)
    {
        $this->created = $created;
    }

    public function getCreated ()
    {
        return $this->created;
    }

    public function setAnalytics (Analytics\Summary $analytics)
    {
        $this->analytics = $analytics;
    }

    public function getAnalytics ()
    {
        return $this->analytics;
    }

    public function setLongUrl ($longUrl)
    {
        $this->longUrl = $longUrl;
    }

    public function getLongUrl ()
    {
        return $this->longUrl;
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