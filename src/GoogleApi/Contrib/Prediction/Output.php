<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 22:09
 * To change this template use File | Settings | File Templates.
 */


class Output extends Model
{

    public $kind;

    public $outputLabel;

    public $id;

    protected $__outputMultiType = 'GoogleApi\Contrib\OutputOutputMulti';

    protected $__outputMultiDataType = 'array';

    public $outputMulti;

    public $outputValue;

    public $selfLink;

    public function setKind ($kind)
    {
        $this->kind = $kind;
    }

    public function getKind ()
    {
        return $this->kind;
    }

    public function setOutputLabel ($outputLabel)
    {
        $this->outputLabel = $outputLabel;
    }

    public function getOutputLabel ()
    {
        return $this->outputLabel;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getId ()
    {
        return $this->id;
    }

    public function setOutputMulti(/* array(OutputOutputMulti) */ $outputMulti)
    {
        $this->assertIsArray($outputMulti, 'OutputOutputMulti', __METHOD__);
        $this->outputMulti = $outputMulti;
    }

    public function getOutputMulti ()
    {
        return $this->outputMulti;
    }

    public function setOutputValue ($outputValue)
    {
        $this->outputValue = $outputValue;
    }

    public function getOutputValue ()
    {
        return $this->outputValue;
    }

    public function setSelfLink ($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink ()
    {
        return $this->selfLink;
    }
}
