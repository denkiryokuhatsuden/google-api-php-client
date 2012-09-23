<?php

namespace GoogleApi\Contrib\Plus\People;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;
use GoogleApi\Contrib\Plus\Person;

/**
 * The "people" collection of methods.
 * Typical usage is:
 * <code>
 * $plusService = new apiPlusService(...);
 * $people = $plusService->people;
 * </code>
 */
class ServiceResource extends AbstractServiceResource
{
    /**
     * List all of the people in the specified collection for a particular
     * activity.
     * (people.listByActivity)
     *
     * @param string $activityId The ID of the activity to get the list of people for.
     * @param string $collection The collection of people to list.
     * @param array $optParams
     *            Optional parameters. Valid optional parameters are listed
     *            below.
     *            
     *            @opt_param string pageToken The continuation token, used to
     *            page through large result sets. To get the next page of
     *            results, set this parameter to the value of "nextPageToken"
     *            from the previous response.
     *            @opt_param string maxResults The maximum number of people to
     *            include in the response, used for paging. For any response,
     *            the actual number returned may be less than the specified
     *            maxResults.
     * @return PeopleFeed
     */
    public function listByActivity ($activityId, $collection, $optParams = array())
    {
        $params = array(
            'activityId' => $activityId,
            'collection' => $collection
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('listByActivity', array(
                $params
        ));
        
        if ($this->useObjects()) {
            return new Feed($data);
        } else {
            return $data;
        }
    }

    /**
     * Search all public profiles.
     * (people.search)
     *
     * @param string $query
     *            Full-text search query string.
     * @param array $optParams
     *            Optional parameters. Valid optional parameters are listed
     *            below.
     *            
     *            @opt_param string pageToken The continuation token, used to
     *            page through large result sets. To get the next page of
     *            results, set this parameter to the value of "nextPageToken"
     *            from the previous response. This token may be of any length.
     *            @opt_param string maxResults The maximum number of people to
     *            include in the response, used for paging. For any response,
     *            the actual number returned may be less than the specified
     *            maxResults.
     *            @opt_param string language Specify the preferred language to
     *            search with. See search language codes for available values.
     * @return PeopleFeed
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
            return new Feed($data);
        } else {
            return $data;
        }
    }

    /**
     * Get a person's profile.
     * (people.get)
     *
     * @param string $userId The ID of the person to get the profile for. The special value
     *     "me" can be used to indicate the authenticated user.
     * @return Person
     */
    public function get ($userId, $optParams = array())
    {
        $params = array(
            'userId' => $userId
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array(
                $params
        ));
        if ($this->useObjects()) {
            return new Person($data);
        } else {
            return $data;
        }
    }
}


