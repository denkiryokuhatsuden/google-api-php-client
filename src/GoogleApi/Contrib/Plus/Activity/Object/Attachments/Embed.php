<?php

namespace GoogleApi\Contrib\Plus\Activity\Object\Attachments;

use GoogleApi\Service\Model;

/**
 * 
 * @author dag
 *
 */
class Embed extends Model
{
    public $url;

    public $type;

    public function setUrl ($url)
    {
        $this->url = $url;
    }

    public function getUrl ()
    {
        return $this->url;
    }

    public function setType ($type)
    {
        $this->type = $type;
    }

    public function getType ()
    {
        return $this->type;
    }
}
