<?php

namespace GoogleApi\Contrib\Freebase;

use GoogleApi\Client;
use GoogleApi\Service\Service as AbstractService;

/**
 * Service definition for Freebase (v1).
 *
 * <p>
 * Lets you access the Freebase repository of open data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://wiki.freebase.com/wiki/New_Freebase_API" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Service extends AbstractService
{
  public $mqlread;
  public $image;
  public $text;

  /**
   * Constructs the internal representation of the Freebase service.
   *
   * @param Client Client
   */
  public function __construct(Client $client)
  {
      parent::__construct($client);
      
    $this->rpcPath = '/rpc';
    $this->restBasePath = '/freebase/v1/';
    $this->version = 'v1';
    $this->serviceName = 'freebase';

    $client->addService($this->serviceName, $this->version);
    $this->text = new Text\ServiceResource($this, $this->serviceName, 'text', json_decode('{"methods": {"get": {"parameters": {"format": {"default": "plain", "enum": ["html", "plain", "raw"], "location": "query", "type": "string"}, "id": {"repeated": true, "required": true, "type": "string", "location": "path"}, "maxlength": {"format": "uint32", "type": "integer", "location": "query"}}, "id": "freebase.text.get", "httpMethod": "GET", "path": "text{/id*}", "response": {"$ref": "ContentserviceGet"}}}}', true));
    $this->mqlread = new Mqlread\ServiceResource($this, $this->serviceName, 'mqlread', json_decode('{"httpMethod": "GET", "parameters": {"lang": {"default": "/lang/en", "type": "string", "location": "query"}, "cursor": {"type": "string", "location": "query"}, "indent": {"format": "uint32", "default": "0", "maximum": "10", "location": "query", "type": "integer"}, "uniqueness_failure": {"default": "hard", "enum": ["hard", "soft"], "location": "query", "type": "string"}, "dateline": {"type": "string", "location": "query"}, "html_escape": {"default": "true", "type": "boolean", "location": "query"}, "callback": {"type": "string", "location": "query"}, "cost": {"default": "false", "type": "boolean", "location": "query"}, "query": {"required": true, "type": "string", "location": "query"}, "as_of_time": {"type": "string", "location": "query"}}, "path": "mqlread", "id": "freebase.mqlread"}', true));
    $this->image = new Image\ServiceResource($this, $this->serviceName, 'image', json_decode('{"httpMethod": "GET", "parameters": {"maxwidth": {"format": "uint32", "type": "integer", "location": "query", "maximum": "4096"}, "maxheight": {"format": "uint32", "type": "integer", "location": "query", "maximum": "4096"}, "fallbackid": {"default": "/freebase/no_image_png", "type": "string", "location": "query"}, "pad": {"default": "false", "type": "boolean", "location": "query"}, "mode": {"default": "fit", "enum": ["fill", "fillcrop", "fillcropmid", "fit"], "location": "query", "type": "string"}, "id": {"repeated": true, "required": true, "type": "string", "location": "path"}}, "path": "image{/id*}", "id": "freebase.image"}', true));
  }
}