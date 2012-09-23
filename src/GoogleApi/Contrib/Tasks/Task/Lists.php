<?php


namespace GoogleApi\Contrib\Tasks\Task;

use GoogleApi\Service\Model;

class TaskLists extends Model
{
    public $nextPageToken;

    protected $__itemsType = 'GoogleApi\Contrib\Tasks\Task\TaskList';

    protected $__itemsDataType = 'array';

    public $items;

    public $kind;

    public $etag;

    public function setNextPageToken ($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken ()
    {
        return $this->nextPageToken;
    }

    public function setItems(/* array(TaskList) */ $items)
    {
        $this->assertIsArray($items, 'GoogleApi\Contrib\Tasks\Task\TaskList', __METHOD__);
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

    public function setEtag ($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag ()
    {
        return $this->etag;
    }
}
