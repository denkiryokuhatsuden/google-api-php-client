<?php

namespace GoogleApi\Contrib\Urlshortener\Analytics;

use GoogleApi\Service\Model;


/**
 * 
 * @author dag
 *
 */
class Summary extends Model
{
    protected $__weekType = 'Analytics\Snapshot';

    protected $__weekDataType = '';

    public $week;

    protected $__allTimeType = 'Analytics\Snapshot';

    protected $__allTimeDataType = '';

    public $allTime;

    protected $__twoHoursType = 'Analytics\Snapshot';

    protected $__twoHoursDataType = '';

    public $twoHours;

    protected $__dayType = 'Analytics\Snapshot';

    protected $__dayDataType = '';

    public $day;

    protected $__monthType = 'Analytics\Snapshot';

    protected $__monthDataType = '';

    public $month;

    /**
     * @param Analytics\Snapshot $week
     */
    public function setWeek (Analytics\Snapshot $week)
    {
        $this->week = $week;
    }

    public function getWeek ()
    {
        return $this->week;
    }

    /**
     * @param Analytics\Snapshot $allTime
     */
    public function setAllTime (Analytics\Snapshot $allTime)
    {
        $this->allTime = $allTime;
    }

    public function getAllTime ()
    {
        return $this->allTime;
    }

    /**
     * @param Analytics\Snapshot $twoHours
     */
    public function setTwoHours (Analytics\Snapshot $twoHours)
    {
        $this->twoHours = $twoHours;
    }

    public function getTwoHours ()
    {
        return $this->twoHours;
    }

    /**
     * @param Analytics\Snapshot $day
     */
    public function setDay (Analytics\Snapshot $day)
    {
        $this->day = $day;
    }

    public function getDay ()
    {
        return $this->day;
    }

    /**
     * @param Analytics\Snapshot $month
     */
    public function setMonth (Analytics\Snapshot $month)
    {
        $this->month = $month;
    }

    public function getMonth ()
    {
        return $this->month;
    }
}