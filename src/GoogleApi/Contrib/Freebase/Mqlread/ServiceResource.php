<?php

namespace GoogleApi\Contrib\Freebase\Mqlread;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "mqlread" collection of methods.
 * Typical usage is:
 *  <code>
 *   $freebaseService = new apiFreebaseService(...);
 *   $mqlread = $freebaseService->mqlread;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource
{
	/**
	 * Performs MQL Queries. (mqlread.mqlread)
	 *
	 * @param string $query An envelope containing a single MQL query.
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string lang The language of the results - an id of a /type/lang object.
	 * @opt_param bool html_escape Whether or not to escape entities.
	 * @opt_param string indent How many spaces to indent the json.
	 * @opt_param string uniqueness_failure How MQL responds to uniqueness failures.
	 * @opt_param string dateline The dateline that you get in a mqlwrite response to ensure consistent results.
	 * @opt_param string cursor The mql cursor.
	 * @opt_param string callback JS method name for JSONP callbacks.
	 * @opt_param bool cost Show the costs or not.
	 * @opt_param string as_of_time Run the query as it would've been run at the specified point in time.
	 */
	public function mqlread($query, $optParams = array()) {
		$params = array('query' => $query);
		$params = array_merge($params, $optParams);
		$data = $this->__call('mqlread', array($params));
		return $data;
	}

}