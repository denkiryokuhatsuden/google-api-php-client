<?php

namespace GoogleApi\Contrib\Analytics;

use GoogleApi\Service\Model;

class GoalVisitNumPagesDetails extends Model
{

    public $comparisonType;

    public $comparisonValue;

    public function setComparisonType ($comparisonType)
    {
        $this->comparisonType = $comparisonType;
    }

    public function getComparisonType ()
    {
        return $this->comparisonType;
    }

    public function setComparisonValue ($comparisonValue)
    {
        $this->comparisonValue = $comparisonValue;
    }

    public function getComparisonValue ()
    {
        return $this->comparisonValue;
    }
}
