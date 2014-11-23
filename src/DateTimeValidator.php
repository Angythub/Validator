<?php

namespace Wreyno\Validator;


/**
 * Class DateTimeValidator
 * @package Wreyno\Validator
 */
class DateTimeValidator {

    /**
     * @param \DateTime $date
     *
     * @return bool
     */
    public static function isMajor(\DateTime $date)
    {
        $dateNow = new \DateTime();
        $dateNow->sub(new \DateInterval('P18Y'));

        if ($date < $dateNow)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @param \DateTime $date
     * @param int $day
     *
     * @return bool
     */
    public static function isDay(\DateTime $date, $day)
    {
        if ($date->format('d') == $day)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @param \DateTime $date
     * @param int $month
     *
     * @return bool
     */
    public static function isMonth(\DateTime $date, $month)
    {

        if ($date->format('m') == $month)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @param \DateTime $date
     * @param int $year
     *
     * @return bool
     */
    public static function isYear(\DateTime $date, $year)
    {
        if ($date->format('Y') == $year)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @param \DateTime $date
     *
     * @return bool
     */
    public static function isToday(\DateTime $date)
    {
        $dateNow = new \DateTime();

        if ($date->format('Y-m-d') == $dateNow->format('Y-m-d'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
} 