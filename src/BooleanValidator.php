<?php

namespace Wreyno\Validator;

/**
 * Class BooleanValidator
 * @package Wreyno\Validator
 */
class BooleanValidator
{
    /**
     * @param bool $bool
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isTrue($bool)
    {
        if(!is_bool($bool))
            throw new \Exception('Not a boolean');

        if ($bool === true)
            return true;
        else
            return false;
    }

    /**
     * @param bool $bool
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($bool)
    {
        if(!is_bool($bool))
            throw new \Exception('Not a boolean');

        if ($bool === false)
            return true;
        else
            return false;
    }
} 