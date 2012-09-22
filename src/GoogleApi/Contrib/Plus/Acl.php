<?php

namespace GoogleApi\Contrib\Plus;

use GoogleApi\Service\Model;

/**
 * 
 * @author dag
 *
 */
class Acl extends Model
{
    protected $__itemsType = 'GoogleApi\Contrib\Plus\PlusAclentryResource';

    protected $__itemsDataType = 'array';

    public $items;

    public $kind;

    public $description;

    public function setItems(/* array(PlusAclentryResource) */ $items)
    {
        $this->assertIsArray($items, 'GoogleApi\Contrib\Plus\PlusAclentryResource', __METHOD__);
        $this->items = $items;
    }

    public function getItems ()
    {
        return $this->items;
    }

    public function setKind ($kind)
    {
        $this->kind = $kind;
    }

    public function getKind ()
    {
        return $this->kind;
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
