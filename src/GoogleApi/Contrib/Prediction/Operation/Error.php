<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dag
 * Date: 13.11.12
 * Time: 21:48
 * To change this template use File | Settings | File Templates.
 */


class Google_OperationError extends Google_Model {
    protected $__errorsType = 'Google_OperationErrorErrors';
    protected $__errorsDataType = 'array';
    public $errors;
    public function setErrors($errors) {
        $this->assertIsArray($errors, 'Google_OperationErrorErrors', __METHOD__);
        $this->errors = $errors;
    }
    public function getErrors() {
        return $this->errors;
    }
}
