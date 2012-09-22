<?php 

namespace GoogleApi\Contrib\Freebase\Text;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "text" collection of methods.
 * Typical usage is:
 *  <code>
 *   $freebaseService = new apiFreebaseService(...);
 *   $text = $freebaseService->text;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource
{
	/**
	 * Returns blob attached to node at specified id as HTML (text.get)
	 *
	 * @param string $id The id of the item that you want data about
	 * @param array $optParams Optional parameters. Valid optional parameters are listed below.
	 *
	 * @opt_param string maxlength The max number of characters to return. Valid only for 'plain' format.
	 * @opt_param string format Sanitizing transformation.
	 * @return ContentserviceGet
	 */
	public function get($id, $optParams = array())
	{
		$params = array('id' => $id);
		$params = array_merge($params, $optParams);
		$data = $this->__call('get', array($params));
		if ($this->useObjects()) {
			return new Contentservice\Get($data);
		} else {
			return $data;
		}
	}
}