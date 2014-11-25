<?php

namespace Wreyno\Validator;

/**
 * Class IntegerValidator
 * @package Wreyno\Validator
 */
class IntegerValidator
{

    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($a, $b)
    {
        if(!is_int($a) || !is_int($b))
            throw new \Exception('Not an integer');

        return ($a == $b) ? true : false;
    }

    /**
     * @param int $highest
     * @param int $lowest
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function higher($highest, $lowest)
    {
        if(!is_int($highest) || !is_int($lowest))
            throw new \Exception('Not an integer');

        return ($highest > $lowest) ? true : false;
    }

    /**
     * @param int $lowest
     * @param int $highest
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lower($lowest, $highest)
    {
        if(!is_int($lowest) || !is_int($highest))
            throw new \Exception('Not an integer');

        return ($lowest < $highest) ? true : false;
    }

    /**
     * @param int $integer
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function between($integer, $min, $max)
    {
        if(!is_int($integer)  ||  !is_int($min)  ||  !is_int($max))
            throw new \Exception('Not an integer');

        return (($integer >= $min) && ($integer <= $max)) ? true : false;
    }

    /**
     * @param int  $integer
     * @param bool $zeroAccepted
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($integer, $zeroAccepted = true)
    {
        if(!is_int($integer) || !is_bool($zeroAccepted))
            throw new \Exception('Not an integer');

        return ($zeroAccepted === true) ? ($integer <= 0) ? true : false : ($integer < 0) ? true : false;
    }

    /**
     * @param int  $integer
     * @param bool $zeroAccepted
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($integer, $zeroAccepted = true)
    {
        if(!is_int($integer) || !is_bool($zeroAccepted))
            throw new \Exception('Not an integer');

        return ($zeroAccepted === true) ? ($integer >= 0) ? true : false : ($integer > 0) ? true : false;
    }
}
