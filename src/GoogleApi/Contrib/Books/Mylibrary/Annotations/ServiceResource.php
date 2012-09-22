<?php

namespace GoogleApi\Contrib\Books\Mylibrary\Annotations;

use GoogleApi\Contrib\Annotations;

use GoogleApi\Contrib\Annotation;
use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "annotations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new apiBooksService(...);
 *   $annotations = $booksService->annotations;
 *  </code>
 */
class ServiceResource extends AbstractServiceResource {


    /**
     * Inserts a new annotation. (annotations.insert)
     *
     * @param Annotation $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param string source String to identify the originator of this request.
     * @return Annotation
     */
    public function insert(Annotation $postBody, $optParams = array()) {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', array($params));
        if ($this->useObjects()) {
            return new Annotation($data);
        } else {
            return $data;
        }
    }
    /**
     * Gets an annotation by its id. (annotations.get)
     *
     * @param string $annotationId The annotation identifier for the annotation to retrieve.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param string source String to identify the originator of this request.
     * @return Annotation
     */
    public function get($annotationId, $optParams = array()) {
        $params = array('annotationId' => $annotationId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Annotation($data);
        } else {
            return $data;
        }
    }
    /**
     * Retrieves a list of annotations, possibly filtered. (annotations.list)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param string volumeId The volume to restrict annotations to.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken The value of the nextToken from the previous page.
     * @opt_param string pageIds The page id(s) for the volume that is being queried.
     * @opt_param string contentVersion The content version for the requested volume.
     * @opt_param string layerId The layer id to limit annotation by.
     * @return Annotations
     */
    public function listMylibraryAnnotations($optParams = array()) {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Annotations($data);
        } else {
            return $data;
        }
    }
    /**
     * Updates an existing annotation. (annotations.update)
     *
     * @param string $annotationId The annotation identifier for the annotation to update.
     * @param Annotation $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param string source String to identify the originator of this request.
     * @return Annotation
     */
    public function update($annotationId, Annotation $postBody, $optParams = array()) {
        $params = array('annotationId' => $annotationId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', array($params));
        if ($this->useObjects()) {
            return new Annotation($data);
        } else {
            return $data;
        }
    }
    /**
     * Deletes an annotation. (annotations.delete)
     *
     * @param string $annotationId The annotation identifier for the annotation to delete.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param string source String to identify the originator of this request.
     */
    public function delete($annotationId, $optParams = array()) {
        $params = array('annotationId' => $annotationId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', array($params));
        return $data;
    }
}

