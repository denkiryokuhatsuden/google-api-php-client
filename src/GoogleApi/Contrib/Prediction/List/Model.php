<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 22:15
 * To change this template use File | Settings | File Templates.
 */


class ListModel extends Model
{

    public $kind;

    public $selfLink;

    public $items;

    protected $__itemsType = 'GoogleApi\Contrib\Training';

    protected $__itemsDataType = 'array';

    public function setKind ($kind)
    {
        $this->kind = $kind;
    }

    public function getKind ()
    {
        return $this->kind;
    }

    public function setSelfLink ($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink ()
    {
        return $this->selfLink;
    }

    public function setItems(/* array(Webproperty) */ $items)
    {
        $this->assertIsArray($items, 'GoogleApi\Contrib\Training', __METHOD__);
        $this->items = $items;
    }

    public function getItems ()
    {
        return $this->items;
    }
}
