<?php

namespace Wreyno\Validator;

class IntegerValidator {

    public function __construct()
    {

    }

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
    }

    public static function higher($integer)
    {
        if(is_int($integer))
        {

        }
    }

    public static function lower($integer)
    {
        if(is_int($integer))
        {

        }
    }

    public static function between($integer, $a, $b)
    {
        if(is_int($integer))
        {

        }
    }

    public static function negative($integer, $zero)
    {
        if(is_int($integer))
        {

        }
    }

    public static function positive($integer, $zero)
    {
        if(is_int($integer))
        {

        }
    }








//equal($integer, x)
//higher($integer, x)
//lower($integer, x)
//between($integer, x, x)
//negative($integer, true) (true pour le 0)
//positive ($integer, true)
} 