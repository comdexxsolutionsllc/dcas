<?php

namespace DCASDomain\Exceptions;

class UnknownErrorException extends AbstractException {

    public function __construct()
    {
        parent::__construct($this->create(func_get_args()));
    }

}
