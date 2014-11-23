<?php

namespace Wreyno\Validator;

/**
 * Class BooleanValidator
 * @package Wreyno\Validator
 */
class BooleanValidator {

    /**
     *
     */
    public function __construct()
    {

    }

    /**
     * @param $bool
     * @throws \Exception
     */
    public static function isTrue($bool)
    {
        if(is_bool($bool))
        {
            if ($bool === true)
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
            throw new \Exception('Not a boolean');
        }
    }

    /**
     * @param $bool
     * @throws \Exception
     */
    public static function isFalse($bool)
    {
        if(is_bool($bool))
        {
            if ($bool === false)
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
            throw new \Exception('Not a boolean');
        }
    }
} 