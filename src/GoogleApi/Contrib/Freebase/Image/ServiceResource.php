<?php 

namespace GoogleApi\Contrib\Freebase\Image;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "image" collection of methods.
 * Typical usage is:
 *  <code>
 *   $freebaseService = new apiFreebaseService(...);
 *   $image = $freebaseService->image;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource {
    /**
     * Returns the scaled/cropped image attached to a freebase node. (image.image)
     *
     * @param string $id Freebase entity or content id, mid, or guid.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string maxwidth Maximum width in pixels for resulting image.
     * @opt_param string maxheight Maximum height in pixels for resulting image.
     * @opt_param string fallbackid Use the image associated with this secondary id if no image is associated with the primary id.
     * @opt_param bool pad A boolean specifying whether the resulting image should be padded up to the requested dimensions.
     * @opt_param string mode Method used to scale or crop image.
     */
    public function image($id, $optParams = array()) {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        $data = $this->__call('image', array($params));
        return $data;
    }

}