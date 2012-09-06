<?php

namespace GoogleApi\Contrib\Books\Bookshelves\Volumes;

use GoogleApi\Contrib\Books\Volumes;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new apiBooksService(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource {


	/**
	 * Retrieves volumes in a specific bookshelf for the specified user. (volumes.list)
	 *
	 * @param string $userId Id of user for whom to retrieve bookshelf volumes.
	 * @param string $shelf Id of bookshelf to retrieve volumes.
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.
	 * @opt_param string maxResults Maximum number of results to return
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string startIndex Index of the first element to return (starts at 0)
	 * @return Volumes
	 */
	public function listBookshelvesVolumes($userId, $shelf, $optParams = array()) {
		$params = array('userId' => $userId, 'shelf' => $shelf);
		$params = array_merge($params, $optParams);
		$data = $this->__call('list', array($params));
		if ($this->useObjects()) {
			return new Volumes($data);
		} else {
			return $data;
		}
	}
}