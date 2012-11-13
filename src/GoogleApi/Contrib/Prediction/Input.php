<?php

namespace GoogleApi\Contrib\Prediction;

use GoogleApi\Service\Model;

class Input extends Model
{

    protected $__inputType = 'GoogleApi\Contrib\InputInput';

    protected $__inputDataType = '';

    public $input;

    public function setInput(\GoogleApi\Contrib\Prediction\Input\Input $input)
    {
        $this->input = $input;
    }

    public function getInput()
    {
        return $this->input;
    }
}