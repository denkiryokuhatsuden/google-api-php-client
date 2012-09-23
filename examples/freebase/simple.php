<?php

/*
 * @see http://wiki.freebase.com/wiki/API
 * @see https://developers.google.com/apis-explorer/#s/freebase/v1/
 */

require_once '../bootstrap.php';

$config = new \GoogleApi\Config(array('use_objects' => true));
$client = new \GoogleApi\Client($config);
$client->setApplicationName("My_Freebase_API_Example");
$service = new \GoogleApi\Contrib\Freebase\Service($client);

try {
    $result = $service->text->get('en/bob_dylan');
    
    var_dump($result);
    
    $result = $service->mqlread->mqlread(json_encode(array(
        'type' => '/people/person',
        'id' => '/en/madonna',
        'children' => array()
    )), array('as_of_time' => '2009-01'));

    var_dump($result);
} catch(GoogleApi\Service\Exception $e) {
    echo $e->getMessage();
}