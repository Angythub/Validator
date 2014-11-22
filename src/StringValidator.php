<?php

namespace Wreyno\Validator;

/**
 * Class StringValidator
 * @package Wreyno\Validator
 */
class StringValidator {

    /**
     *
     */
    public function __construct()
    {

    }

    public static function equalLength($string, $length)
    {
        if(is_string($string) && is_int($length))
        {
            if (mb_strlen($string) == $length)
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
            return '$string must be a string and $length an integer';
        }
    }


    public static function higherLength($string, $length)
    {
        if(is_string($string) && is_int($length))
        {
            if (mb_strlen($string) > $length)
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
            return '$string must be a string and $length an integer';
        }
    }

    public static function lowerLength($string, $length)
    {
        if(is_string($string) && is_int($length))
        {
            if (mb_strlen($string) < $length)
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
            return '$string must be a string and $length an integer';
        }
    }

    public static function betweenLength($string, $min, $max)
    {
        if(is_string($string) && is_int($min) && is_int($max))
        {
            if ((mb_strlen($string) > $min) && (mb_strlen($string) < $max))
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
            return '$string must be a string and $length an integer';
        }
    }

    public static function startAndEndWhiteSpace($string)
    {

    }

    public static function noWhiteSpace($string)
    {

    }
} 