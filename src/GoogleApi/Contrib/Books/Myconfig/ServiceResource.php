<?php

namespace GoogleApi\Contrib\Books\Myconfig;

use GoogleApi\Contrib\Books\Volumes;
use GoogleApi\Contrib\Books\RequestAccess;
use GoogleApi\Contrib\Books\DownloadAccesses;
use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "myconfig" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new apiBooksService(...);
 *   $myconfig = $booksService->myconfig;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource {


    /**
     * Release downloaded content access restriction. (myconfig.releaseDownloadAccess)
     *
     * @param string $volumeIds The volume(s) to release restrictions for.
     * @param string $cpksver The device/version identifier from which to release the restriction.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param string source String to identify the originator of this request.
     * @return DownloadAccesses
     */
    public function releaseDownloadAccess($volumeIds, $cpksver, $optParams = array()) {
        $params = array('volumeIds' => $volumeIds, 'cpksver' => $cpksver);
        $params = array_merge($params, $optParams);
        $data = $this->__call('releaseDownloadAccess', array($params));
        if ($this->useObjects()) {
            return new DownloadAccesses($data);
        } else {
            return $data;
        }
    }
    /**
     * Request concurrent and download access restrictions. (myconfig.requestAccess)
     *
     * @param string $source String to identify the originator of this request.
     * @param string $volumeId The volume to request concurrent/download restrictions for.
     * @param string $nonce The client nonce value.
     * @param string $cpksver The device/version identifier from which to request the restrictions.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @return RequestAccess
     */
    public function requestAccess($source, $volumeId, $nonce, $cpksver, $optParams = array()) {
        $params = array('source' => $source, 'volumeId' => $volumeId, 'nonce' => $nonce, 'cpksver' => $cpksver);
        $params = array_merge($params, $optParams);
        $data = $this->__call('requestAccess', array($params));
        if ($this->useObjects()) {
            return new RequestAccess($data);
        } else {
            return $data;
        }
    }
    /**
     * Request downloaded content access for specified volumes on the My eBooks shelf.
     * (myconfig.syncVolumeLicenses)
     *
     * @param string $source String to identify the originator of this request.
     * @param string $nonce The client nonce value.
     * @param string $cpksver The device/version identifier from which to release the restriction.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param string volumeIds The volume(s) to request download restrictions for.
     * @return Volumes
     */
    public function syncVolumeLicenses($source, $nonce, $cpksver, $optParams = array()) {
        $params = array('source' => $source, 'nonce' => $nonce, 'cpksver' => $cpksver);
        $params = array_merge($params, $optParams);
        $data = $this->__call('syncVolumeLicenses', array($params));
        if ($this->useObjects()) {
            return new Volumes($data);
        } else {
            return $data;
        }
    }
}



