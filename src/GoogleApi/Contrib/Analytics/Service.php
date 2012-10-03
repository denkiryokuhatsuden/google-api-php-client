<?php

namespace GoogleApi\Contrib\Analytics;

use GoogleApi\Client;
use GoogleApi\Service\Service as AbstractService;

/**
 * Service definition for Analytics (v3).
 *
 * <p>
 * View and manage your Google Analytics data
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/analytics" target="_blank">API
 * Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Service extends AbstractService
{

    public $management_webproperties;

    public $management_segments;

    public $management_accounts;

    public $management_goals;

    public $management_profiles;

    public $data_ga;

    /**
     * Constructs the internal representation of the Analytics service.
     *
     * @param Client Client
     */
    public function __construct (Client $client)
    {
        parent::__construct($client);

        $this->rpcPath = '/rpc';
        $this->restBasePath = '/analytics/v3/';
        $this->version = 'v3';
        $this->serviceName = 'analytics';

        $client->addService($this->serviceName, $this->version);
        $this->management_webproperties = new Management\Webproperties\ServiceResource(
            $this, $this->serviceName, 'webproperties',
            json_decode(
                '{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/analytics.readonly"], "parameters": {"max-results": {"format": "int32", "type": "integer", "location": "query"}, "start-index": {"format": "int32", "minimum": "1", "type": "integer", "location": "query"}, "accountId": {"required": true, "type": "string", "location": "path"}}, "id": "analytics.management.webproperties.list", "httpMethod": "GET", "path": "management/accounts/{accountId}/webproperties", "response": {"$ref": "Webproperties"}}}}',
                true));
        $this->management_segments = new Management\Segments\ServiceResource($this,
            $this->serviceName, 'segments',
            json_decode(
                '{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/analytics.readonly"], "parameters": {"max-results": {"format": "int32", "type": "integer", "location": "query"}, "start-index": {"format": "int32", "minimum": "1", "type": "integer", "location": "query"}}, "response": {"$ref": "Segments"}, "httpMethod": "GET", "path": "management/segments", "id": "analytics.management.segments.list"}}}',
                true));
        $this->management_accounts = new Management\Accounts\ServiceResource($this,
            $this->serviceName, 'accounts',
            json_decode(
                '{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/analytics.readonly"], "parameters": {"max-results": {"format": "int32", "type": "integer", "location": "query"}, "start-index": {"format": "int32", "minimum": "1", "type": "integer", "location": "query"}}, "response": {"$ref": "Accounts"}, "httpMethod": "GET", "path": "management/accounts", "id": "analytics.management.accounts.list"}}}',
                true));
        $this->management_goals = new Management\Goals\ServiceResource($this,
            $this->serviceName, 'goals',
            json_decode(
                '{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/analytics.readonly"], "parameters": {"max-results": {"format": "int32", "type": "integer", "location": "query"}, "profileId": {"required": true, "type": "string", "location": "path"}, "start-index": {"format": "int32", "minimum": "1", "type": "integer", "location": "query"}, "accountId": {"required": true, "type": "string", "location": "path"}, "webPropertyId": {"required": true, "type": "string", "location": "path"}}, "id": "analytics.management.goals.list", "httpMethod": "GET", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals", "response": {"$ref": "Goals"}}}}',
                true));
        $this->management_profiles = new Management\Profiles\ServiceResource($this,
            $this->serviceName, 'profiles',
            json_decode(
                '{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/analytics.readonly"], "parameters": {"max-results": {"format": "int32", "type": "integer", "location": "query"}, "start-index": {"format": "int32", "minimum": "1", "type": "integer", "location": "query"}, "accountId": {"required": true, "type": "string", "location": "path"}, "webPropertyId": {"required": true, "type": "string", "location": "path"}}, "id": "analytics.management.profiles.list", "httpMethod": "GET", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles", "response": {"$ref": "Profiles"}}}}',
                true));
        $this->data_ga = new DataGa\ServiceResource($this, $this->serviceName,
            'ga',
            json_decode(
                '{"methods": {"get": {"scopes": ["https://www.googleapis.com/auth/analytics.readonly"], "parameters": {"max-results": {"format": "int32", "type": "integer", "location": "query"}, "sort": {"type": "string", "location": "query"}, "dimensions": {"type": "string", "location": "query"}, "start-date": {"required": true, "type": "string", "location": "query"}, "start-index": {"format": "int32", "minimum": "1", "type": "integer", "location": "query"}, "end-date": {"required": true, "type": "string", "location": "query"}, "ids": {"required": true, "type": "string", "location": "query"}, "metrics": {"required": true, "type": "string", "location": "query"}, "filters": {"type": "string", "location": "query"}, "segment": {"type": "string", "location": "query"}}, "id": "analytics.data.ga.get", "httpMethod": "GET", "path": "data/ga", "response": {"$ref": "GaData"}}}}',
                true));
    }

}
