<?php

namespace GoogleApi\Contrib\Tasks;

use GoogleApi\Service\Service as AbstractService;

/**
 * Service definition for Tasks (v1).
 *
 * <p>
 * Lets you manage your tasks and task lists.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/tasks/v1/using.html" target="_blank">API
 * Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Service extends AbstractService
{
    public $tasks;

    public $tasklists;

    /**
     * Constructs the internal representation of the Tasks service.
     *
     * @param Client client
     */
    public function __construct (\GoogleApi\Client $client)
    {
        parent::__construct($client);
        
        $this->rpcPath = '/rpc';
        $this->restBasePath = '/tasks/v1/';
        $this->version = 'v1';
        $this->serviceName = 'tasks';

        $client->addService($this->serviceName, $this->version);
        $this->tasks = new Tasks\ServiceResource($this, $this->serviceName, 'tasks', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}, "parent": {"type": "string", "location": "query"}, "previous": {"type": "string", "location": "query"}}, "request": {"$ref": "Task"}, "id": "tasks.tasks.insert", "httpMethod": "POST", "path": "lists/{tasklist}/tasks", "response": {"$ref": "Task"}}, "get": {"scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}}, "id": "tasks.tasks.get", "httpMethod": "GET", "path": "lists/{tasklist}/tasks/{task}", "response": {"$ref": "Task"}}, "clear": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "POST", "path": "lists/{tasklist}/clear", "id": "tasks.tasks.clear"}, "move": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"previous": {"type": "string", "location": "query"}, "tasklist": {"required": true, "type": "string", "location": "path"}, "parent": {"type": "string", "location": "query"}, "task": {"required": true, "type": "string", "location": "path"}}, "id": "tasks.tasks.move", "httpMethod": "POST", "path": "lists/{tasklist}/tasks/{task}/move", "response": {"$ref": "Task"}}, "list": {"scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"], "parameters": {"dueMax": {"type": "string", "location": "query"}, "tasklist": {"required": true, "type": "string", "location": "path"}, "pageToken": {"type": "string", "location": "query"}, "updatedMin": {"type": "string", "location": "query"}, "completedMin": {"type": "string", "location": "query"}, "maxResults": {"format": "int64", "type": "string", "location": "query"}, "showCompleted": {"type": "boolean", "location": "query"}, "showDeleted": {"type": "boolean", "location": "query"}, "completedMax": {"type": "string", "location": "query"}, "showHidden": {"type": "boolean", "location": "query"}, "dueMin": {"type": "string", "location": "query"}}, "id": "tasks.tasks.list", "httpMethod": "GET", "path": "lists/{tasklist}/tasks", "response": {"$ref": "Tasks"}}, "update": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Task"}, "id": "tasks.tasks.update", "httpMethod": "PUT", "path": "lists/{tasklist}/tasks/{task}", "response": {"$ref": "Task"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Task"}, "id": "tasks.tasks.patch", "httpMethod": "PATCH", "path": "lists/{tasklist}/tasks/{task}", "response": {"$ref": "Task"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}, "task": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "lists/{tasklist}/tasks/{task}", "id": "tasks.tasks.delete"}}}', true));
        $this->tasklists = new Tasklists\ServiceResource($this, $this->serviceName, 'tasklists', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/tasks"], "request": {"$ref": "TaskList"}, "response": {"$ref": "TaskList"}, "httpMethod": "POST", "path": "users/@me/lists", "id": "tasks.tasklists.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}}, "id": "tasks.tasklists.get", "httpMethod": "GET", "path": "users/@me/lists/{tasklist}", "response": {"$ref": "TaskList"}}, "list": {"scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "int64", "type": "string", "location": "query"}}, "response": {"$ref": "TaskLists"}, "httpMethod": "GET", "path": "users/@me/lists", "id": "tasks.tasklists.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "TaskList"}, "id": "tasks.tasklists.update", "httpMethod": "PUT", "path": "users/@me/lists/{tasklist}", "response": {"$ref": "TaskList"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "TaskList"}, "id": "tasks.tasklists.patch", "httpMethod": "PATCH", "path": "users/@me/lists/{tasklist}", "response": {"$ref": "TaskList"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/tasks"], "parameters": {"tasklist": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "users/@me/lists/{tasklist}", "id": "tasks.tasklists.delete"}}}', true));
    }
}

