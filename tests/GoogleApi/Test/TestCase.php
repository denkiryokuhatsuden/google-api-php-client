<?php

namespace GoogleApi\Test;

use GoogleApi;
use Symfony\Component\Yaml\Yaml;

/**
 * 
 * @author dag
 *
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GoogleApi\Client
     */
    public $client;
    
    /**
     * @var GoogleApi\Config
     */
    public $config;

    /**
     * 
     */
    public function __construct ()
    {
        parent::__construct();
        
        if (! $this->client) {
            $configData = $this->loadParameters();

            $this->config = new GoogleApi\Config($configData);
            
            $this->client = new GoogleApi\Client($this->config);
            
            if (! $this->client->getAccessToken()) {
                $this->client->setAccessToken($this->config->get('oauth_test_token'));
            }
        }
    }
    
    /**
     * @return array
     */
    protected function loadParameters()
    {
        $file = dirname(dirname(__DIR__)) . '/parameters.yml';
        
        $parameters = Yaml::parse($file);
        
        return $parameters;
    }
    
    /**
     * 
     */
    public function __destruct ()
    {
        //$this->config->set('oauth_test_token', self::$client->getAccessToken());
    }
}