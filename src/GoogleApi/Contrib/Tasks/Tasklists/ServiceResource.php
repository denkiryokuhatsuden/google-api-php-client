<?php

namespace GoogleApi\Contrib\Tasks\Tasklists;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;
use GoogleApi\Contrib\Tasks\Task\TaskList;
use GoogleApi\Contrib\Tasks\Task\TaskLists;

/**
 * The "tasklists" collection of methods.
 * Typical usage is:
 * <code>
 * $tasksService = new apiTasksService(...);
 * $tasklists = $tasksService->tasklists;
 * </code>
 */
class ServiceResource extends AbstractServiceResource
{
    /**
     * Creates a new task list and adds it to the authenticated user's task
     * lists.
     * (tasklists.insert)
     *
     * @param TaskList $postBody
     * @return TaskList
     */
    public function insert (TaskList $postBody, $optParams = array())
    {
        $params = array(
            'postBody' => $postBody
        );
        
        $params = array_merge($params, $optParams);

        $data = $this->__call('insert', array($params));
        
        if ($this->useObjects()) {
            return new TaskList($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the authenticated user's specified task list.
     * (tasklists.get)
     *
     * @param string $tasklist Task list identifier.
     * @return TaskList
     */
    public function get ($tasklist, $optParams = array())
    {
        $params = array(
            'tasklist' => $tasklist
        );
        
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        
        if ($this->useObjects()) {
            return new TaskList($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns all the authenticated user's task lists.
     * (tasklists.list)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     * @opt_param string pageToken Token specifying the result page to return. Optional.
     * @opt_param string maxResults Maximum number of task lists returned on one page. Optional. The default is 100.
     * 
     * @return TaskLists
     */
    public function listTasklists ($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        
        if ($this->useObjects()) {
            return new TaskLists($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the authenticated user's specified task list.
     * (tasklists.update)
     *
     * @param string $tasklist
     *            Task list identifier.
     * @param TaskList $postBody
     * @return TaskList
     */
    public function update ($tasklist, TaskList $postBody, $optParams = array())
    {
        $params = array(
                'tasklist' => $tasklist,
                'postBody' => $postBody
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', array(
                $params
        ));
        if ($this->useObjects()) {
            return new TaskList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the authenticated user's specified task list.
     * This method supports patch semantics.
     * (tasklists.patch)
     *
     * @param string $tasklist
     *            Task list identifier.
     * @param TaskList $postBody
     * @return TaskList
     */
    public function patch ($tasklist, TaskList $postBody, $optParams = array())
    {
        $params = array(
                'tasklist' => $tasklist,
                'postBody' => $postBody
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', array(
                $params
        ));
        if ($this->useObjects()) {
            return new TaskList($data);
        } else {
            return $data;
        }
    }

    /**
     * Deletes the authenticated user's specified task list.
     * (tasklists.delete)
     *
     * @param string $tasklist
     *            Task list identifier.
     */
    public function delete ($tasklist, $optParams = array())
    {
        $params = array(
                'tasklist' => $tasklist
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', array(
                $params
        ));
        return $data;
    }
}
