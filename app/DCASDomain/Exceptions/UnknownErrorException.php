<?php

namespace DCASDomain\Exceptions;

class UnknownErrorException extends AbstractException {

    /**
     * UnknownErrorException constructor.
     */
    public function __construct()
    {
        parent::__construct($this->create(func_get_args()));
    }

}
