<?php

namespace DCASDomain\Enumerations;

/**
 * Class Time
 * @note waiting for PHP 7.2 to get enum types.  cannot use SplEnum.
 * @package DCASDomain\Enumerations
 */
class Time {

    const __default = self::hour;

    const minute = 60 * 60;
    const hour = 60 * 60 * 60;
    const three_hours = 60 * 60 * 60 * 3;
    const six_hours = three_hours * 2;
    const twelve_hours = six_hours * 2;
    const one_day = twelve_hours * 2;
    const one_week = one_day * 7;
}