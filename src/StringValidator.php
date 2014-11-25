<?php

namespace Wreyno\Validator;

/**
 * Class StringValidator
 * @package Wreyno\Validator
 */
class StringValidator
{

    /**
     * @param string $string
     * @param int    $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('Not a string or not an integer');

        return (mb_strlen($string) == $length) ? true : false;
    }

    /**
     * @param string $string
     * @param int    $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function higher($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('Not a string or not an integer');

        return (mb_strlen($string) > $length) ? true : false;
    }

    /**
     * @param string $string
     * @param int    $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lower($string, $length)
    {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('Not a string or not an integer');

        return (mb_strlen($string) < $length) ? true : false;
    }

    /**
     * @param string $string
     * @param int    $min
     * @param int    $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function between($string, $min, $max)
    {
        if(!is_string($string) || !is_int($min) || !is_int($max))
            throw new \Exception('Not a string or not an integer');

        return ((mb_strlen($string) > $min) && (mb_strlen($string) < $max)) ? true : false;
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function startAndEndWhiteSpace($string)
    {
        if(!is_string($string))
            throw new \Exception('Not a string');

        return ((substr($string, 0, 1) == " ") || (substr($string, mb_strlen($string)-1, 1) == " ")) ? true : false;
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpace($string)
    {
        if(!is_string($string))
            throw new \Exception('Not a string');

        return (strpos($string, ' ') === false) ? true : false;
    }
}
