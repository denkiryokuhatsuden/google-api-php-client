<?php

namespace GoogleApi\Contrib\Books\Volumes;

use GoogleApi\Contrib\Books\Volume;
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
	 * Performs a book search. (volumes.list)
	 *
	 * @param string $q Full-text search query string.
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string orderBy Sort search results.
	 * @opt_param string projection Restrict information returned to a set of selected fields.
	 * @opt_param string libraryRestrict Restrict search to this user's library.
	 * @opt_param string langRestrict Restrict results to books with this language code.
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param string printType Restrict to books or magazines.
	 * @opt_param string maxResults Maximum number of results to return.
	 * @opt_param string filter Filter search results.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string startIndex Index of the first result to return (starts at 0)
	 * @opt_param string download Restrict to volumes by download availability.
	 * @opt_param string partner Identifier of partner for whom to restrict and brand results.
	 * @opt_param bool showPreorders Set to true to show books available for preorder. Defaults to false.
	 * @return Volumes
	 */
	public function listVolumes($q, $optParams = array()) {
		$params = array('q' => $q);
		$params = array_merge($params, $optParams);
		$data = $this->__call('list', array($params));
		if ($this->useObjects()) {
			return new Volumes($data);
		} else {
			return $data;
		}
	}
	/**
	 * Gets volume information for a single volume. (volumes.get)
	 *
	 * @param string $volumeId Id of volume to retrieve.
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param string projection Restrict information returned to a set of selected fields.
	 * @opt_param string partner Identifier of partner for whom to brand results.
	 * @return Volume
	 */
	public function get($volumeId, $optParams = array()) {
		$params = array('volumeId' => $volumeId);
		$params = array_merge($params, $optParams);
		$data = $this->__call('get', array($params));
		if ($this->useObjects()) {
			return new Volume($data);
		} else {
			return $data;
		}
	}
}