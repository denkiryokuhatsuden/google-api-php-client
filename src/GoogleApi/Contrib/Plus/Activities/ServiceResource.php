<?php

namespace GoogleApi\Contrib\Plus\Activities;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;
use GoogleApi\Contrib\Plus\Activity;

/**
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new apiPlusService(...);
 *   $activities = $plusService->activities;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource
{
    /**
     * Search public activities.
     * (activities.search)
     *
     * @param string $query Full-text search query string.
     * @param array $optParams
     *            Optional parameters. Valid optional parameters are listed
     *            below.
     *            
     *            @opt_param string orderBy Specifies how to order search
     *            results.
     *            @opt_param string pageToken The continuation token, used to
     *            page through large result sets. To get the next page of
     *            results, set this parameter to the value of "nextPageToken"
     *            from the previous response. This token may be of any length.
     *            @opt_param string maxResults The maximum number of activities
     *            to include in the response, used for paging. For any response,
     *            the actual number returned may be less than the specified
     *            maxResults.
     *            @opt_param string language Specify the preferred language to
     *            search with. See search language codes for available values.
     * @return ActivityFeed
     */
    public function search ($query, $optParams = array())
    {
        $params = array(
                'query' => $query
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('search', array(
                $params
        ));
        if ($this->useObjects()) {
            return new Activity\Feed($data);
        } else {
            return $data;
        }
    }

    /**
     * List all of the activities in the specified collection for a particular
     * user.
     * (activities.list)
     *
     * @param string $userId
     *            The ID of the user to get activities for. The special value
     *            "me" can be used to indicate the authenticated user.
     * @param string $collection
     *            The collection of activities to list.
     * @param array $optParams
     *            Optional parameters. Valid optional parameters are listed
     *            below.
     *            
     *            @opt_param string pageToken The continuation token, used to
     *            page through large result sets. To get the next page of
     *            results, set this parameter to the value of "nextPageToken"
     *            from the previous response.
     *            @opt_param string maxResults The maximum number of activities
     *            to include in the response, used for paging. For any response,
     *            the actual number returned may be less than the specified
     *            maxResults.
     * @return ActivityFeed
     */
    public function listActivities ($userId, $collection, $optParams = array())
    {
        $params = array(
                'userId' => $userId,
                'collection' => $collection
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array(
                $params
        ));
        if ($this->useObjects()) {
            return new Activity\Feed($data);
        } else {
            return $data;
        }
    }

    /**
     * Get an activity.
     * (activities.get)
     *
     * @param string $activityId
     *            The ID of the activity to get.
     * @return Activity
     */
    public function get ($activityId, $optParams = array())
    {
        $params = array(
                'activityId' => $activityId
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array(
                $params
        ));
        if ($this->useObjects()) {
            return new Activity($data);
        } else {
            return $data;
        }
    }
}