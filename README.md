Google APIs Client Library for PHP
=====================================

## Description
The Google API Client Library enables you to work with Google APIs such as Buzz, Moderator, Tasks, or Latitude on your server.

Warning: Currently only the following services are working
* books service (only volumes service without authentication tested)
* freebase
* urlshortener
* plus
* tasks
* analytics

Based on:
* https://github.com/evert/google-api-php-client

Current version is hosted here:
* https://github.com/gh0zt/google-api-php-client

A Composer package of the latest build can be found at packagist
http://packagist.org/packages/dag/google-api-php-client 

## Fork information

This project was forked made the library compatible with modern techniques like DI and to
get rid of the global like static config object:

* Replaced the Config class with a non static version which is constructor injected into the classes which use the configuration object.
* Refactored the Services to one class per file with proper namespacing to support PSR-0 autoloading
* Specified fully qualified classnames for factory keys 

TODO:
* Refactore all other services
* Replace config usage in Models which should not be config aware. (e.g GoogleApi\Service\Model)

The existing documentation applies, just keep in mind that instead of class
like `apiHttpRequest`, you must now use `\GoogleApi\Io\HttpRequest`.



## Requirements:

* PHP 5.3.x or higher (http://www.php.net/)
* PHP Curl extension (http://www.php.net/manual/en/intro.curl.php)
* PHP JSON extension (http://php.net/manual/en/book.json.php)

Project page:

* http://code.google.com/p/google-api-php-client

OAuth 2 instructions:

* http://code.google.com/p/google-api-php-client/wiki/OAuth2

Report a defect or feature request here:

* http://code.google.com/p/google-api-php-client/issues/entry

Subscribe to project updates in your feed reader:

* http://code.google.com/feeds/p/google-api-php-client/updates/basic

Supported sample applications:
* http://code.google.com/p/google-api-php-client/wiki/Samples

## Basic Example

```
<?php
include 'vendor/.composer/autoload.php';

$client = new \GoogleApi\Config();
$client = new \GoogleApi\Client($config);
$service = new \GoogleApi\Contrib\Books\Service($client);

$optParams = array('filter' => 'free-ebooks');
$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

foreach ($results['items'] as $item) {
  print($item['volumeInfo']['title'] . '<br>');
}
```
