<?php


namespace GoogleApi\Contrib\Urlshortener;

use GoogleApi\Client;
use GoogleApi\Service\Service as AbstractService;

/**
 * Service definition for Urlshortener (v1).
 *
 * <p>
 * Lets you create, inspect, and manage goo.gl short URLs
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/urlshortener/v1/getting_started.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Service extends AbstractService
{
    public $url;

    /**
     * Constructs the internal representation of the Urlshortener service.
     *
     * @param Client $client
     */
    public function __construct (Client $client)
    {
        parent::__construct($client);
        
        $this->rpcPath = '/rpc';
        $this->restBasePath = '/urlshortener/v1/';
        $this->version = 'v1';
        $this->serviceName = 'urlshortener';
        
        $client->addService($this->serviceName, $this->version);
        $this->url = new Url\ServiceResource(
            $this, $this->serviceName, 'url', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/urlshortener"], "request": {"$ref": "Url"}, "response": {"$ref": "Url"}, "httpMethod": "POST", "path": "url", "id": "urlshortener.url.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/urlshortener"], "parameters": {"start-token": {"type": "string", "location": "query"}, "projection": {"enum": ["ANALYTICS_CLICKS", "FULL"], "type": "string", "location": "query"}}, "response": {"$ref": "UrlHistory"}, "httpMethod": "GET", "path": "url/history", "id": "urlshortener.url.list"}, "get": {"parameters": {"shortUrl": {"required": true, "type": "string", "location": "query"}, "projection": {"enum": ["ANALYTICS_CLICKS", "ANALYTICS_TOP_STRINGS", "FULL"], "type": "string", "location": "query"}}, "id": "urlshortener.url.get", "httpMethod": "GET", "path": "url", "response": {"$ref": "Url"}}}}', true)
        );
    }
}