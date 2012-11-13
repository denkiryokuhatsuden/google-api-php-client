<?php

namespace GoogleApi\Contrib\Prediction\Image;

use GoogleApi\Service\Model;

class DiskSnapshot extends Model
{
    public $source;

    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getSource()
    {
        return $this->source;
    }
}