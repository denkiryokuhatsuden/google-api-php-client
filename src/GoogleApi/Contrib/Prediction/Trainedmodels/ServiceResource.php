<?php

namespace GoogleApi\Contrib\Prediction\Trainedmodels;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "trainedmodels" collection of methods.
 * Typical usage is:
 * <code>
 * $predictionService = new apiPredictionService(...);
 * $trainedmodels = $predictionService->trainedmodels;
 * </code>
 */
class ServiceResource extends AbstractServiceResource
{
    /**
     * Submit model id and request a prediction (trainedmodels.predict)
     *
     * @param string $id
     *            The unique name for the predictive model.
     * @param Input $postBody
     * @return Output
     */
    public function predict ($id, \GoogleApi\Contrib\Prediction\Input $postBody, $optParams = array())
    {
        $params = array(
            'id' => $id,
            'postBody' => $postBody
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('predict', array(
            $params
        ));
        if ($this->useObjects()) {
            return new Output($data);
        } else {
            return $data;
        }
    }

    /**
     * Begin training your model.
     * (trainedmodels.insert)
     *
     * @param Training $postBody
     * @return Training
     */
    public function insert (Training $postBody, $optParams = array())
    {
        $params = array(
            'postBody' => $postBody
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', array(
            $params
        ));
        if ($this->useObjects()) {
            return new Training($data);
        } else {
            return $data;
        }
    }

    /**
     * Check training status of your model.
     * (trainedmodels.get)
     *
     * @param string $id
     *            The unique name for the predictive model.
     * @return Training
     */
    public function get ($id, $optParams = array())
    {
        $params = array(
            'id' => $id
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array(
            $params
        ));
        if ($this->useObjects()) {
            return new Training($data);
        } else {
            return $data;
        }
    }

    /**
     * Add new data to a trained model.
     * (trainedmodels.update)
     *
     * @param string $id
     *            The unique name for the predictive model.
     * @param Update $postBody
     * @return Training
     */
    public function update ($id, Update $postBody, $optParams = array())
    {
        $params = array(
            'id' => $id,
            'postBody' => $postBody
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', array(
            $params
        ));
        if ($this->useObjects()) {
            return new Training($data);
        } else {
            return $data;
        }
    }

    /**
     * Delete a trained model.
     * (trainedmodels.delete)
     *
     * @param string $id
     *            The unique name for the predictive model.
     */
    public function delete ($id, $optParams = array())
    {
        $params = array(
            'id' => $id
        );
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', array(
            $params
        ));
        return $data;
    }

    /**
     * Executes "list" api method.
     * list is a php saved keyword and therefore it can't be used as method name
     *
     * @param array $optParams
     */
    public function listModels ($optParams = array())
    {
        $data = $this->__call('list', array(
            $optParams
        ));

        if ($this->useObjects()) {
            return new ListModel($data);
        } else {
            return $data;
        }
    }
}