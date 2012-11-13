<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Service as AbstractService;
use GoogleApi\Client;


/**
 * Service definition for Prediction (v1.5).
 *
 * <p>
 * Lets you access a cloud hosted machine learning service that makes it easy to
 * build smart apps
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/predict/docs/developer-guide.html"
 * target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Service extends AbstractService
{
    public $trainedmodels;

    public $hostedmodels;

    /**
     * Constructs the internal representation of the Prediction service.
     *
     * @param Client Client
     */
    public function __construct (Client $client)
    {
        parent::__construct($client);

        $this->rpcPath = '/rpc';
        $this->restBasePath = '/prediction/v1.5/';
        $this->version = 'v1.5';
        $this->serviceName = 'prediction';

        $this->client->addService($this->serviceName, $this->version);
        $this->trainedmodels = new Trainedmodels\ServiceResource($this,
            $this->serviceName, 'trainedmodels',
            json_decode(
                '{"methods":{"predict":{"scopes":["https://www.googleapis.com/auth/prediction"],"parameters":{"id":{"required":true,"type":"string","location":"path"}},"request":{"$ref":"Input"},"id":"prediction.trainedmodels.predict","httpMethod":"POST","path":"trainedmodels/{id}/predict","response":{"$ref":"Output"}},"insert":{"scopes":["https://www.googleapis.com/auth/prediction"],"request":{"$ref":"Training"},"response":{"$ref":"Training"},"httpMethod":"POST","path":"trainedmodels","id":"prediction.trainedmodels.insert"},"delete":{"scopes":["https://www.googleapis.com/auth/prediction"],"parameters":{"id":{"required":true,"type":"string","location":"path"}},"httpMethod":"DELETE","path":"trainedmodels/{id}","id":"prediction.trainedmodels.delete"},"update":{"scopes":["https://www.googleapis.com/auth/prediction"],"parameters":{"id":{"required":true,"type":"string","location":"path"}},"request":{"$ref":"Update"},"id":"prediction.trainedmodels.update","httpMethod":"PUT","path":"trainedmodels/{id}","response":{"$ref":"Training"}},"get":{"scopes":["https://www.googleapis.com/auth/prediction"],"parameters":{"id":{"required":true,"type":"string","location":"path"}},"id":"prediction.trainedmodels.get","httpMethod":"GET","path":"trainedmodels/{id}","response":{"$ref":"Training"}},"list":{"scopes":["https://www.googleapis.com/auth/prediction"],"parameters":{},"id":"prediction.trainedmodels.list","httpMethod":"GET","path":"trainedmodels/list","response":{"$ref":"ListModel"}}}}',
                true));
        $this->hostedmodels = new Hostedmodels\ServiceResource($this,
            $this->serviceName, 'hostedmodels',
            json_decode(
                '{"methods": {"predict": {"scopes": ["https://www.googleapis.com/auth/prediction"], "parameters": {"hostedModelName": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Input"}, "id": "prediction.hostedmodels.predict", "httpMethod": "POST", "path": "hostedmodels/{hostedModelName}/predict", "response": {"$ref": "Output"}}}}',
                true));
    }
}
