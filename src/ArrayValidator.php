<?php

namespace Wreyno\Validator;

/**
 * Class ArrayValidator
 * @package Wreyno\Validator
 */
class ArrayValidator {

    const EQUAL = 0;
    const HIGHER = 1;
    const HIGHER_OR_EQUAL = 2;
    const LOWER = 3;
    const LOWER_OR_EQUAL = 4;

    /**
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isEmpty($array)
    {
        if(is_array($array))
        {
            if(empty($array))
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
            throw new \Exception('Not an array');
        }
    }

    /**
     * @param array $array
     * @param int $sign
     * @param int $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function compare($array, $sign, $integer)
    {
        if (is_array($array) && is_int($sign) && is_int($integer))
        {
            switch($sign)
            {
                case self::EQUAL:
                    return count($array) == $integer;
                    break;

                case self::HIGHER:
                    return count($array) > $integer;
                    break;

                case self::HIGHER_OR_EQUAL:
                    return count($array) >= $integer;
                    break;

                case self::LOWER:
                    return count($array) < $integer;
                    break;

                case self::LOWER_OR_EQUAL:
                    return count($array) <= $integer;
                    break;
            }
        }
        else
        {
            throw new \Exception('Not an array or an integer');
        }
    }

    /**
     * @param array $array
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsBetween($array, $min, $max)
    {
        if(is_array($array) && is_int($min) && is_int($max))
        {
            if ((mb_strlen($array) >= $min) && (mb_strlen($array) <= $max))
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
            throw new \Exception('Not an array or an integer');
        }
    }

    /**
     * @param array $array
     * @param string $key
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function keyExists($array, $key)
    {
        if(is_array($array))
        {
            if(array_key_exists($key, $array))
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
            throw new \Exception('Not an array');
        }
    }

    public static function valueExists($array, $value)
    {
        if(is_array($array))
        {
            if(in_array($value, $array))
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
            throw new \Exception('Not an array');
        }
    }
} 