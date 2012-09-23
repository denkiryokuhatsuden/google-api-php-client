<?php

namespace GoogleApi\Contrib\Tasks\Task;

use GoogleApi\Service\Model;

class inks extends Model
{

    public $type;

    public $link;

    public $description;

    public function setType ($type)
    {
        $this->type = $type;
    }

    public function getType ()
    {
        return $this->type;
    }

    public function setLink ($link)
    {
        $this->link = $link;
    }

    public function getLink ()
    {
        return $this->link;
    }

    public function setDescription ($description)
    {
        $this->description = $description;
    }

    public function getDescription ()
    {
        return $this->description;
    }
}