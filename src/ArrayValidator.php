<?php

namespace Wreyno\Validator;

class ArrayValidator {

    public function __construct()
    {

    }

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

    public static function compare($array, $sign)
    {

    }

    public static function numberElementsBetween($array, $min, $max)
    {

    }

    public static function keyExists($array, $key)
    {

    }
} 