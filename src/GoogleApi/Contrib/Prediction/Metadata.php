<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;

class Metadata extends Model
{
    protected $__itemsType = '\GoogleApi\Contrib\Prediction\Metadata\Items';
    protected $__itemsDataType = 'array';
    public $items;
    public $kind;

    public function setItems($items)
    {
        $this->assertIsArray($items, '\GoogleApi\Contrib\Prediction\Metadata\Items', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }
}
