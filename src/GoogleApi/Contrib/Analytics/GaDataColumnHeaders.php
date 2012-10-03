<?php

namespace GoogleApi\Contrib\Analytics;

use GoogleApi\Service\Model;

class GaDataColumnHeaders extends Model
{

    public $dataType;

    public $columnType;

    public $name;

    public function setDataType ($dataType)
    {
        $this->dataType = $dataType;
    }

    public function getDataType ()
    {
        return $this->dataType;
    }

    public function setColumnType ($columnType)
    {
        $this->columnType = $columnType;
    }

    public function getColumnType ()
    {
        return $this->columnType;
    }

    public function setName ($name)
    {
        $this->name = $name;
    }

    public function getName ()
    {
        return $this->name;
    }
}
