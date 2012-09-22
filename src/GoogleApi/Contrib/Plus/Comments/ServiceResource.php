<?php

namespace GoogleApi\Contrib\Plus\Comments;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new apiPlusService(...);
 *   $comments = $plusService->comments;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource
{

    /**
     * List all of the comments for an activity.
     * (comments.list)
     *
     * @param string $activityId
     *            The ID of the activity to get comments for.
     * @param array $optParams
     *            Optional parameters. Valid optional parameters are listed
     *            below.
     *            
     *            @opt_param string pageToken The continuation token, used to
     *            page through large result sets. To get the next page of
     *            results, set this parameter to the value of "nextPageToken"
     *            from the previous response.
     *            @opt_param string maxResults The maximum number of comments to
     *            include in the response, used for paging. For any response,
     *            the actual number returned may be less than the specified
     *            maxResults.
     * @return CommentFeed
     */
    public function listComments ($activityId, $optParams = array())
    {
        $params = array(
                'activityId' => $activityId
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array(
                $params
        ));
        if ($this->useObjects()) {
            return new CommentFeed($data);
        } else {
            return $data;
        }
    }

    /**
     * Get a comment.
     * (comments.get)
     *
     * @param string $commentId
     *            The ID of the comment to get.
     * @return Comment
     */
    public function get ($commentId, $optParams = array())
    {
        $params = array(
                'commentId' => $commentId
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array(
                $params
        ));
        if ($this->useObjects()) {
            return new Comment($data);
        } else {
            return $data;
        }
    }
}


