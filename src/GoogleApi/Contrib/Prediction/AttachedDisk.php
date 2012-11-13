<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;

class AttachedDisk extends Model
{
    public $deviceName;
    public $kind;
    public $index;
    public $source;
    public $mode;
    public $deleteOnTerminate;
    public $type;

    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
    }

    public function getDeviceName()
    {
        return $this->deviceName;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setIndex($index)
    {
        $this->index = $index;
    }

    public function getIndex()
    {
        return $this->index;
    }

    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    public function getMode()
    {
        return $this->mode;
    }

    public function setDeleteOnTerminate($deleteOnTerminate)
    {
        $this->deleteOnTerminate = $deleteOnTerminate;
    }

    public function getDeleteOnTerminate()
    {
        return $this->deleteOnTerminate;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}





