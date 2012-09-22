<?php

namespace GoogleApi\Contrib\Urlshortener\Analytics;

use GoogleApi\Service\Model;

/**
 * 
 * @author dag
 *
 */
class Snapshot extends Model
{
    public $shortUrlClicks;

    protected $__countriesType = 'StringCount';

    protected $__countriesDataType = 'array';

    public $countries;

    protected $__platformsType = 'StringCount';

    protected $__platformsDataType = 'array';

    public $platforms;

    protected $__browsersType = 'StringCount';

    protected $__browsersDataType = 'array';

    public $browsers;

    protected $__referrersType = 'StringCount';

    protected $__referrersDataType = 'array';

    public $referrers;

    public $longUrlClicks;

    public function setShortUrlClicks ($shortUrlClicks)
    {
        $this->shortUrlClicks = $shortUrlClicks;
    }

    public function getShortUrlClicks ()
    {
        return $this->shortUrlClicks;
    }

    public function setCountries(/* array(StringCount) */ $countries)
    {
        $this->assertIsArray($countries, 'StringCount', __METHOD__);
        $this->countries = $countries;
    }

    public function getCountries ()
    {
        return $this->countries;
    }

    public function setPlatforms(/* array(StringCount) */ $platforms)
    {
        $this->assertIsArray($platforms, 'StringCount', __METHOD__);
        $this->platforms = $platforms;
    }

    public function getPlatforms ()
    {
        return $this->platforms;
    }

    public function setBrowsers(/* array(StringCount) */ $browsers)
    {
        $this->assertIsArray($browsers, 'StringCount', __METHOD__);
        $this->browsers = $browsers;
    }

    public function getBrowsers ()
    {
        return $this->browsers;
    }

    public function setReferrers(/* array(StringCount) */ $referrers)
    {
        $this->assertIsArray($referrers, 'StringCount', __METHOD__);
        $this->referrers = $referrers;
    }

    public function getReferrers ()
    {
        return $this->referrers;
    }

    public function setLongUrlClicks ($longUrlClicks)
    {
        $this->longUrlClicks = $longUrlClicks;
    }

    public function getLongUrlClicks ()
    {
        return $this->longUrlClicks;
    }
}