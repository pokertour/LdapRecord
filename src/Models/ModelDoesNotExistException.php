<?php

namespace LdapRecord\Models;

use LdapRecord\LdapRecordException;

/**
 * Class ModelDoesNotExistException.
 *
 * Thrown when a model being saved / updated does not actually exist.
 */
class ModelDoesNotExistException extends LdapRecordException
{
    /**
     * The class name of the model that does not exist.
     *
     * @var string
     */
    protected $model;

    /**
     * Sets the model that does not exist.
     *
     * @param string $model
     *
     * @return ModelDoesNotExistException
     */
    public function setModel($model)
    {
        $this->model = $model;

        $this->message = "Model [{$model}] does not exist.";

        return $this;
    }
}
