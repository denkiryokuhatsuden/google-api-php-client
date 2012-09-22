<?php

namespace GoogleApi\Contrib\Books\Mylibrary\Bookshelves;

use GoogleApi\Contrib\Books\Bookshelf;

use GoogleApi\Contrib\Books\Bookshelves;
use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "bookshelves" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new apiBooksService(...);
 *   $bookshelves = $booksService->bookshelves;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource
{
	/**
	 * Clears all volumes from a bookshelf. (bookshelves.clearVolumes)
	 *
	 * @param string $shelf Id of bookshelf from which to remove a volume.
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param string source String to identify the originator of this request.
	 */
	public function clearVolumes($shelf, $optParams = array()) {
		$params = array('shelf' => $shelf);
		$params = array_merge($params, $optParams);
		$data = $this->__call('clearVolumes', array($params));
		return $data;
	}
	/**
	 * Removes a volume from a bookshelf. (bookshelves.removeVolume)
	 *
	 * @param string $shelf Id of bookshelf from which to remove a volume.
	 * @param string $volumeId Id of volume to remove.
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param string source String to identify the originator of this request.
	 */
	public function removeVolume($shelf, $volumeId, $optParams = array()) {
		$params = array('shelf' => $shelf, 'volumeId' => $volumeId);
		$params = array_merge($params, $optParams);
		$data = $this->__call('removeVolume', array($params));
		return $data;
	}
	/**
	 * Retrieves a list of bookshelves belonging to the authenticated user. (bookshelves.list)
	 *
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param string source String to identify the originator of this request.
	 * @return Bookshelves
	 */
	public function listMylibraryBookshelves($optParams = array()) {
		$params = array();
		$params = array_merge($params, $optParams);
		$data = $this->__call('list', array($params));
		if ($this->useObjects()) {
			return new Bookshelves($data);
		} else {
			return $data;
		}
	}
	/**
	 * Adds a volume to a bookshelf. (bookshelves.addVolume)
	 *
	 * @param string $shelf Id of bookshelf to which to add a volume.
	 * @param string $volumeId Id of volume to add.
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param string source String to identify the originator of this request.
	 */
	public function addVolume($shelf, $volumeId, $optParams = array()) {
		$params = array('shelf' => $shelf, 'volumeId' => $volumeId);
		$params = array_merge($params, $optParams);
		$data = $this->__call('addVolume', array($params));
		return $data;
	}
	/**
	 * Retrieves a specific bookshelf belonging to the authenticated user. (bookshelves.get)
	 *
	 * @param string $shelf Id of bookshelf to retrieve.
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param string source String to identify the originator of this request.
	 * @return Bookshelf
	 */
	public function get($shelf, $optParams = array()) {
		$params = array('shelf' => $shelf);
		$params = array_merge($params, $optParams);
		$data = $this->__call('get', array($params));
		if ($this->useObjects()) {
			return new Bookshelf($data);
		} else {
			return $data;
		}
	}
}