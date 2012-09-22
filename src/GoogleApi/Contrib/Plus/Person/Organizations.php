<?php

namespace GoogleApi\Contrib\Plus\Person;

use GoogleApi\Service\Model;

class Organizations extends Model
{
    public $startDate;

    public $endDate;

    public $description;

    public $title;

    public $primary;

    public $location;

    public $department;

    public $type;

    public $name;

    public function setStartDate ($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getStartDate ()
    {
        return $this->startDate;
    }

    public function setEndDate ($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getEndDate ()
    {
        return $this->endDate;
    }

    public function setDescription ($description)
    {
        $this->description = $description;
    }

    public function getDescription ()
    {
        return $this->description;
    }

    public function setTitle ($title)
    {
        $this->title = $title;
    }

    public function getTitle ()
    {
        return $this->title;
    }

    public function setPrimary ($primary)
    {
        $this->primary = $primary;
    }

    public function getPrimary ()
    {
        return $this->primary;
    }

    public function setLocation ($location)
    {
        $this->location = $location;
    }

    public function getLocation ()
    {
        return $this->location;
    }

    public function setDepartment ($department)
    {
        $this->department = $department;
    }

    public function getDepartment ()
    {
        return $this->department;
    }

    public function setType ($type)
    {
        $this->type = $type;
    }

    public function getType ()
    {
        return $this->type;
    }

    public function setName ($name)
    {
        $this->name = $name;
    }

    public function getName ()
    {
        return $this->name;
    }
}