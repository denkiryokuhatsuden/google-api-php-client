<?php

namespace GoogleApi\Contrib\Books\Bookshelves;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "bookshelves" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new apiBooksService(...);
 *   $bookshelves = $booksService->bookshelves;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource {


	/**
	 * Retrieves a list of public bookshelves for the specified user. (bookshelves.list)
	 *
	 * @param string $userId Id of user for whom to retrieve bookshelves.
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param string source String to identify the originator of this request.
	 * @return Bookshelves
	 */
	public function listBookshelves($userId, $optParams = array()) {
		$params = array('userId' => $userId);
		$params = array_merge($params, $optParams);
		$data = $this->__call('list', array($params));
		if ($this->useObjects()) {
			return new Bookshelves($data);
		} else {
			return $data;
		}
	}
	/**
	 * Retrieves a specific bookshelf for the specified user. (bookshelves.get)
	 *
	 * @param string $userId Id of user for whom to retrieve bookshelves.
	 * @param string $shelf Id of bookshelf to retrieve.
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param string source String to identify the originator of this request.
	 * @return Bookshelf
	 */
	public function get($userId, $shelf, $optParams = array()) {
		$params = array('userId' => $userId, 'shelf' => $shelf);
		$params = array_merge($params, $optParams);
		$data = $this->__call('get', array($params));
		if ($this->useObjects()) {
			return new Bookshelf($data);
		} else {
			return $data;
		}
	}
}
