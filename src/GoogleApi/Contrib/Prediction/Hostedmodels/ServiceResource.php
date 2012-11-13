<?php

namespace GoogleApi\Contrib\Prediction\Hostedmodels;

use GoogleApi\Service\ServiceResource as AbstractServiceResource;

/**
 * The "hostedmodels" collection of methods.
 * Typical usage is:
 * <code>
 * $predictionService = new apiPredictionService(...);
 * $hostedmodels = $predictionService->hostedmodels;
 * </code>
 */
class ServiceResource extends AbstractServiceResource
{
    /**
     * Submit input and request an output against a hosted model.
     * (hostedmodels.predict)
     *
     * @param string $hostedModelName
     *            The name of a hosted model.
     * @param Input $postBody
     * @return Output
     */
    public function predict ($hostedModelName, Input $postBody,
                             $optParams = array())
    {
        $params = array(
            'hostedModelName' => $hostedModelName,
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
}
