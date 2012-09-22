<?php

namespace GoogleApi\Contrib\Plus;

use GoogleApi\Service\Service as AbstractService;

/**
 * Service definition for Plus (v1).
 *
 * <p>
 * The Google+ API enables developers to build on top of the Google+ platform.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://developers.google.com/+/api/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Service extends AbstractService
{
    public $activities;

    public $comments;

    public $people;

    /**
     * Constructs the internal representation of the Plus service.
     *
     * @param Client client
     */
    public function __construct (\GoogleApi\Client $client)
    {
        parent::__construct($client);
        
        $this->rpcPath = '/rpc';
        $this->restBasePath = '/plus/v1/';
        $this->version = 'v1';
        $this->serviceName = 'plus';
        
        $client->addService($this->serviceName, $this->version);

        $this->activities = new Activities\ServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"search": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"orderBy": {"default": "recent", "enum": ["best", "recent"], "location": "query", "type": "string"}, "pageToken": {"type": "string", "location": "query"}, "language": {"default": "", "type": "string", "location": "query"}, "maxResults": {"format": "uint32", "default": "10", "maximum": "20", "minimum": "1", "location": "query", "type": "integer"}, "query": {"required": true, "type": "string", "location": "query"}}, "id": "plus.activities.search", "httpMethod": "GET", "path": "activities", "response": {"$ref": "ActivityFeed"}}, "list": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "alt": {"default": "json", "enum": ["json"], "location": "query", "type": "string"}, "userId": {"required": true, "type": "string", "location": "path"}, "collection": {"required": true, "enum": ["public"], "location": "path", "type": "string"}, "maxResults": {"format": "uint32", "default": "20", "maximum": "100", "minimum": "1", "location": "query", "type": "integer"}}, "id": "plus.activities.list", "httpMethod": "GET", "path": "people/{userId}/activities/{collection}", "response": {"$ref": "ActivityFeed"}}, "get": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}, "alt": {"default": "json", "enum": ["json"], "location": "query", "type": "string"}}, "id": "plus.activities.get", "httpMethod": "GET", "path": "activities/{activityId}", "response": {"$ref": "Activity"}}}}', true));
        $this->comments = new Comments\ServiceResource($this, $this->serviceName, 'comments', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "activityId": {"required": true, "type": "string", "location": "path"}, "alt": {"default": "json", "enum": ["json"], "location": "query", "type": "string"}, "maxResults": {"format": "uint32", "default": "20", "maximum": "100", "minimum": "0", "location": "query", "type": "integer"}}, "id": "plus.comments.list", "httpMethod": "GET", "path": "activities/{activityId}/comments", "response": {"$ref": "CommentFeed"}}, "get": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"commentId": {"required": true, "type": "string", "location": "path"}}, "id": "plus.comments.get", "httpMethod": "GET", "path": "comments/{commentId}", "response": {"$ref": "Comment"}}}}', true));
        $this->people = new People\ServiceResource($this, $this->serviceName, 'people', json_decode('{"methods": {"listByActivity": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "activityId": {"required": true, "type": "string", "location": "path"}, "collection": {"required": true, "enum": ["plusoners", "resharers"], "location": "path", "type": "string"}, "maxResults": {"format": "uint32", "default": "20", "maximum": "100", "minimum": "1", "location": "query", "type": "integer"}}, "id": "plus.people.listByActivity", "httpMethod": "GET", "path": "activities/{activityId}/people/{collection}", "response": {"$ref": "PeopleFeed"}}, "search": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "language": {"default": "", "type": "string", "location": "query"}, "maxResults": {"format": "uint32", "default": "10", "maximum": "20", "minimum": "1", "location": "query", "type": "integer"}, "query": {"required": true, "type": "string", "location": "query"}}, "id": "plus.people.search", "httpMethod": "GET", "path": "people", "response": {"$ref": "PeopleFeed"}}, "get": {"scopes": ["https://www.googleapis.com/auth/plus.me", "https://www.googleapis.com/auth/userinfo.email"], "parameters": {"userId": {"required": true, "type": "string", "location": "path"}}, "id": "plus.people.get", "httpMethod": "GET", "path": "people/{userId}", "response": {"$ref": "Person"}}}}', true));
    }
}