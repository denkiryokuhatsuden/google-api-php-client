<?php

namespace GoogleApi\Contrib\Analytics;

use GoogleApi\Service\Model;

class GoalEventDetails extends Model
{

    protected $__eventConditionsType = 'GoalEventDetailsEventConditions';

    protected $__eventConditionsDataType = 'array';

    public $eventConditions;

    public $useEventValue;

    public function setEventConditions(/* array(GoalEventDetailsEventConditions) */ $eventConditions)
    {
        $this->assertIsArray($eventConditions,
            'GoalEventDetailsEventConditions', __METHOD__);
        $this->eventConditions = $eventConditions;
    }

    public function getEventConditions ()
    {
        return $this->eventConditions;
    }

    public function setUseEventValue ($useEventValue)
    {
        $this->useEventValue = $useEventValue;
    }

    public function getUseEventValue ()
    {
        return $this->useEventValue;
    }
}
