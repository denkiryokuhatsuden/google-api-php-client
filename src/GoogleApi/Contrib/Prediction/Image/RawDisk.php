<?php

namespace GoogleApi\Contrib\Prediction\Image;

use GoogleApi\Service\Model;

class RawDisk extends Model
{
    public $containerType;
    public $source;
    public $sha1Checksum;

    public function setContainerType($containerType)
    {
        $this->containerType = $containerType;
    }

    public function getContainerType()
    {
        return $this->containerType;
    }

    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSha1Checksum($sha1Checksum)
    {
        $this->sha1Checksum = $sha1Checksum;
    }

    public function getSha1Checksum()
    {
        return $this->sha1Checksum;
    }
}
