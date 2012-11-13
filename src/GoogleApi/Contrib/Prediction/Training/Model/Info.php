<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 22:07
 * To change this template use File | Settings | File Templates.
 */


class TrainingModelInfo extends Model
{

    public $confusionMatrixRowTotals;

    public $numberLabels;

    public $confusionMatrix;

    public $meanSquaredError;

    public $modelType;

    public $numberInstances;

    public $classWeightedAccuracy;

    public $classificationAccuracy;

    public function setConfusionMatrixRowTotals ($confusionMatrixRowTotals)
    {
        $this->confusionMatrixRowTotals = $confusionMatrixRowTotals;
    }

    public function getConfusionMatrixRowTotals ()
    {
        return $this->confusionMatrixRowTotals;
    }

    public function setNumberLabels ($numberLabels)
    {
        $this->numberLabels = $numberLabels;
    }

    public function getNumberLabels ()
    {
        return $this->numberLabels;
    }

    public function setConfusionMatrix ($confusionMatrix)
    {
        $this->confusionMatrix = $confusionMatrix;
    }

    public function getConfusionMatrix ()
    {
        return $this->confusionMatrix;
    }

    public function setMeanSquaredError ($meanSquaredError)
    {
        $this->meanSquaredError = $meanSquaredError;
    }

    public function getMeanSquaredError ()
    {
        return $this->meanSquaredError;
    }

    public function setModelType ($modelType)
    {
        $this->modelType = $modelType;
    }

    public function getModelType ()
    {
        return $this->modelType;
    }

    public function setNumberInstances ($numberInstances)
    {
        $this->numberInstances = $numberInstances;
    }

    public function getNumberInstances ()
    {
        return $this->numberInstances;
    }

    public function setClassWeightedAccuracy ($classWeightedAccuracy)
    {
        $this->classWeightedAccuracy = $classWeightedAccuracy;
    }

    public function getClassWeightedAccuracy ()
    {
        return $this->classWeightedAccuracy;
    }

    public function setClassificationAccuracy ($classificationAccuracy)
    {
        $this->classificationAccuracy = $classificationAccuracy;
    }

    public function getClassificationAccuracy ()
    {
        return $this->classificationAccuracy;
    }
}
