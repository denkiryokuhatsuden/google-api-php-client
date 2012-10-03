<?php

namespace GoogleApi\Contrib\Analytics;

use GoogleApi\Service\Model;

class ProfileParentLink extends Model
{

    public $href;

    public $type;

    public function setHref ($href)
    {
        $this->href = $href;
    }

    public function getHref ()
    {
        return $this->href;
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
