<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 22:08
 * To change this template use File | Settings | File Templates.
 */


class Training extends Model
{

    public $kind;

    public $storageDataLocation;

    public $storagePMMLModelLocation;

    protected $__dataAnalysisType = 'GoogleApi\Contrib\TrainingDataAnalysis';

    protected $__dataAnalysisDataType = '';

    public $dataAnalysis;

    public $trainingStatus;

    protected $__modelInfoType = 'GoogleApi\Contrib\TrainingModelInfo';

    protected $__modelInfoDataType = '';

    public $modelInfo;

    public $storagePMMLLocation;

    public $id;

    public $selfLink;

    public $utility;

    public function setKind ($kind)
    {
        $this->kind = $kind;
    }

    public function getKind ()
    {
        return $this->kind;
    }

    public function setStorageDataLocation ($storageDataLocation)
    {
        $this->storageDataLocation = $storageDataLocation;
    }

    public function getStorageDataLocation ()
    {
        return $this->storageDataLocation;
    }

    public function setStoragePMMLModelLocation ($storagePMMLModelLocation)
    {
        $this->storagePMMLModelLocation = $storagePMMLModelLocation;
    }

    public function getStoragePMMLModelLocation ()
    {
        return $this->storagePMMLModelLocation;
    }

    public function setDataAnalysis (TrainingDataAnalysis $dataAnalysis)
    {
        $this->dataAnalysis = $dataAnalysis;
    }

    public function getDataAnalysis ()
    {
        return $this->dataAnalysis;
    }

    public function setTrainingStatus ($trainingStatus)
    {
        $this->trainingStatus = $trainingStatus;
    }

    public function getTrainingStatus ()
    {
        return $this->trainingStatus;
    }

    public function setModelInfo (TrainingModelInfo $modelInfo)
    {
        $this->modelInfo = $modelInfo;
    }

    public function getModelInfo ()
    {
        return $this->modelInfo;
    }

    public function setStoragePMMLLocation ($storagePMMLLocation)
    {
        $this->storagePMMLLocation = $storagePMMLLocation;
    }

    public function getStoragePMMLLocation ()
    {
        return $this->storagePMMLLocation;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getId ()
    {
        return $this->id;
    }

    public function setSelfLink ($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink ()
    {
        return $this->selfLink;
    }

    public function setUtility(/* array(double) */ $utility)
    {
        $this->assertIsArray($utility, 'double', __METHOD__);
        $this->utility = $utility;
    }

    public function getUtility ()
    {
        return $this->utility;
    }
}
