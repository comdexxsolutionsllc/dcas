<?php

namespace DCASDomain\Contracts;

interface Enumeration {

    /**
     * @return array
     */
    public static function getConstantList() : array;
}