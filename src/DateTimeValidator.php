<?php

namespace Wreyno\Validator;

/**
 * Class DateTimeValidator
 * @package Wreyno\Validator
 */
class DateTimeValidator
{

    /**
     * @param \DateTime $date
     *
     * @return bool
     */
    public static function isMajor(\DateTime $date)
    {
        $dateNow = new \DateTime();
        $dateNow->sub(new \DateInterval('P18Y'));

        return ($date < $dateNow) ? true : false;
    }

    /**
     * @param \DateTime $date
     * @param int       $day
     *
     * @return bool
     */
    public static function isDay(\DateTime $date, $day)
    {
        return ($date->format('d') == $day) ? true : false;
    }

    /**
     * @param \DateTime $date
     * @param int       $month
     *
     * @return bool
     */
    public static function isMonth(\DateTime $date, $month)
    {
        return ($date->format('m') == $month) ? true : false;
    }

    /**
     * @param \DateTime $date
     * @param int       $year
     *
     * @return bool
     */
    public static function isYear(\DateTime $date, $year)
    {
        return ($date->format('Y') == $year) ? true : false;
    }

    /**
     * @param \DateTime $date
     *
     * @return bool
     */
    public static function isToday(\DateTime $date)
    {
        $dateNow = new \DateTime();

        return ($date->format('Y-m-d') == $dateNow->format('Y-m-d')) ? true : false;
    }
}
