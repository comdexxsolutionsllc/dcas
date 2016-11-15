<?php

namespace Modules\Api\Http\Controllers\Traits;

trait APITrait {

    protected $limit;


    /**
     * Enforce $_GET['limit'] between 0-250.
     *
     * @throws \OutOfRangeException
     */
    protected function enforceLimit()
    {
        switch ($this->limit)
        {
            case ($this->limit < 0):
                throw new \OutOfRangeException('Limit MUST be positive.');
            case ($this->limit > 250):
                throw new \OutOfRangeException('Limit MUST NOT exceed 250.');
            default:
                break;
        }
    }


    /**
     * Check limit has valid characters.
     *
     * @throws \UnexpectedValueException
     */
    protected function checkLimitHasValidChars()
    {
        if ( ! self::isPureDigit())
        {
            throw new \UnexpectedValueException('Limit contains invalid characters.');
        }
    }


    /**
     * Return true if pure digit.
     *
     * @return bool
     */
    private function isPureDigit()
    {
        return ctype_digit($this->limit);
    }

}
