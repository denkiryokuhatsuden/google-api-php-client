<?php

include 'bootstrap.php';


use Symfony\Component\Yaml\Yaml;
use GoogleApi\Test\OAuthHelper;

//$parameters = parse_ini_file();
$parameters = Yaml::parse('./parameters.yml');

OAuthHelper::getAuthToken(
    $parameters['client_id'], $parameters['client_secret']
);