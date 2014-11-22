<?php

namespace Wreyno\Validator;

/**
 * Class IntegerValidator
 * @package Wreyno\Validator
 */
class IntegerValidator {

    /**
     *
     */
    public function __construct()
    {

    }

    /**
     * @param $a
     * @param $b
     * @return bool|string
     */
    public static function equal($a, $b)
    {
        if(is_int($a) && is_int($b))
        {
            if ($a == $b)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return "Variables must be integers";
        }
    }

    /**
     * @param $highest
     * @param $lowest
     * @return bool|string
     */
    public static function higher($highest, $lowest)
    {
        if(is_int($highest) && is_int($lowest))
        {
            if ($highest > $lowest)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return "Variables must be integers";
        }
    }

    /**
     * @param $lowest
     * @param $highest
     * @return bool|string
     */
    public static function lower($lowest, $highest)
    {
        if(is_int($lowest) && is_int($highest))
        {
            if ($lowest < $highest)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return "Variables must be integers";
        }
    }

    /**
     * @param $integer
     * @param $min
     * @param $max
     * @return bool|string
     */
    public static function between($integer, $min, $max)
    {
        if(is_int($integer) && is_int($min) && is_int($max))
        {
            if (($integer > $min) && ($integer < $max))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return "Variables must be integers";
        }
    }

    /**
     * @param $integer
     * @param bool $zeroAccepted
     * @return bool|string
     */
    public static function negative($integer, $zeroAccepted = true)
    {
        if(is_int($integer) && is_bool($zeroAccepted))
        {
            if ($zeroAccepted)
            {
                if ($integer <= 0)
                {
                    return true;
                }
                elseif ($integer < 0)
                {
                    return true;
                }
                else {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return "Variables must be integers";
        }
    }

    /**
     * @param $integer
     * @param bool $zeroAccepted
     * @return bool|string
     */
    public static function positive($integer, $zeroAccepted = true)
    {
        if(is_int($integer) && is_bool($zeroAccepted))
        {
            if ($zeroAccepted)
            {
                if ($integer >= 0)
                {
                    return true;
                }
                elseif ($integer > 0)
                {
                    return true;
                }
                else {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return "Variables must be integers";
        }
    }
} 