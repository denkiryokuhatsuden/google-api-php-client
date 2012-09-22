<?php

namespace GoogleApi\Contrib\Urlshortener\Url;

use GoogleApi\Contrib\Urlshortener\Url;
use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "url" collection of methods.
 * Typical usage is:
 *  <code>
 *   $urlshortenerService = new apiUrlshortenerService(...);
 *   $url = $urlshortenerService->url;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource
{
    /**
     * Creates a new short URL.
     * (url.insert)
     *
     * @param Url $postBody            
     * @return Url
     */
    public function insert (Url $postBody, $optParams = array())
    {
        $params = array(
                'postBody' => $postBody
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', 
                array(
                        $params
                ));
        if ($this->useObjects()) {
            return new Url($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of URLs shortened by a user.
     * (url.list)
     *
     * @param array $optParams
     *            Optional parameters. Valid optional parameters are listed
     *            below.
     *            
     *            @opt_param string start-token Token for requesting successive
     *            pages of results.
     *            @opt_param string projection Additional information to return.
     * @return UrlHistory
     */
    public function listUrl ($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array(
                $params
        ));
        if ($this->useObjects()) {
            return new Url\History($data);
        } else {
            return $data;
        }
    }

    /**
     * Expands a short URL or gets creation time and analytics.
     * (url.get)
     *
     * @param string $shortUrl
     *            The short URL, including the protocol.
     * @param array $optParams
     *            Optional parameters. Valid optional parameters are listed
     *            below.
     *            @opt_param string projection Additional information to return.
     * @return Url
     */
    public function get ($shortUrl, $optParams = array())
    {
        $params = array(
                'shortUrl' => $shortUrl
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array(
                $params
        ));
        if ($this->useObjects()) {
            return new Url($data);
        } else {
            return $data;
        }
    }
}