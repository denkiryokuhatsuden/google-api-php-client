<?php

namespace GoogleApi\Test;

use GoogleApi;

class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var apiClient
     */
    public static $client;
    public $config;

    public function __construct ()
    {
        parent::__construct();
        
        if (! self::$client) {
            $this->config = new GoogleApi\Config(array(
                'ioFileCache_directory' => '/tmp/google-api-php-client/tests',
                'oauth_test_user' => 'testuser',
                'oauth_test_token' => '{"created" : "9999999999", "access_token" : "TOKEN","token_type" : "Bearer","expires_in" : 3600,"refresh_token" : "TOKEN"}'
            ));

            self::$client = new GoogleApi\Client($this->config);
            
            if (! self::$client->getAccessToken()) {
                self::$client->setAccessToken($this->config->get('oauth_test_token'));
            }
        }
    }

    public function __destruct ()
    {
        //$this->config->set('oauth_test_token', self::$client->getAccessToken());
    }
}