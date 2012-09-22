<?php


namespace GoogleApi\Contrib\Urlshortener\Url;

use GoogleApi\Service\Model;

/**
 * 
 * @author dag
 *
 */
class History extends Model
{
    public $nextPageToken;

    protected $__itemsType = 'Url';

    protected $__itemsDataType = 'array';

    public $items;

    public $kind;

    public $itemsPerPage;

    public $totalItems;

    /**
     * @param unknown_type $nextPageToken
     */
    public function setNextPageToken ($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken ()
    {
        return $this->nextPageToken;
    }

    /**
     * @param unknown_type $items array(Url) 
     */
    public function setItems($items)
    {
        $this->assertIsArray($items, 'Url', __METHOD__);
        $this->items = $items;
    }

    public function getItems ()
    {
        return $this->items;
    }

    /**
     * @param unknown_type $kind
     */
    public function setKind ($kind)
    {
        $this->kind = $kind;
    }

    public function getKind ()
    {
        return $this->kind;
    }

    /**
     * @param unknown_type $itemsPerPage
     */
    public function setItemsPerPage ($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    public function getItemsPerPage ()
    {
        return $this->itemsPerPage;
    }

    /**
     * @param unknown_type $totalItems
     */
    public function setTotalItems ($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems ()
    {
        return $this->totalItems;
    }
}
