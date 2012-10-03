<?php

namespace GoogleApi\Contrib\Analytics;

use GoogleApi\Service\Model;

class GoalEventDetailsEventConditions extends Model
{

    public $type;

    public $matchType;

    public $expression;

    public $comparisonType;

    public $comparisonValue;

    public function setType ($type)
    {
        $this->type = $type;
    }

    public function getType ()
    {
        return $this->type;
    }

    public function setMatchType ($matchType)
    {
        $this->matchType = $matchType;
    }

    public function getMatchType ()
    {
        return $this->matchType;
    }

    public function setExpression ($expression)
    {
        $this->expression = $expression;
    }

    public function getExpression ()
    {
        return $this->expression;
    }

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
