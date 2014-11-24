<?php

namespace Tests\Wreyno\Validator;


use Wreyno\Validator\DateTimeValidator;

/**
 * Class DateTimeValidatorTest
 * @package Tests\Wreyno\Validator
 */
class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase{

    /**
     * Test if the date in parameter match to a major person
     */
    public function testDateTimeValidatorIsMajor()
    {
        $birthday = new \DateTime('1993-01-01');
        $result = DateTimeValidator::isMajor($birthday);

        $this->assertTrue($result);
    }

    /**
     * Test if the date in parameter do not match to a major person
     */
    public function testDateTimeValidatorIsMajorFalse()
    {
        $birthday = new \DateTime('2012-01-01');
        $result = DateTimeValidator::isMajor($birthday);

        $this->assertFalse($result);
    }

    /**
     * Test if the date's day in first parameter match to the day in second parameter
     */
    public function testDateTimeValidatorIsDay()
    {
        $date = new \DateTime();
        $result = DateTimeValidator::isDay($date, $date->format('d'));

        $this->assertTrue($result);
    }

    /**
     * Test if the date's day in first parameter do not match to the day in second parameter
     */
    public function testDateTimeValidatorIsDayFalse()
    {
        $date = new \DateTime();
        $result = DateTimeValidator::isDay($date, $date->format('d')-1);

        $this->assertFalse($result);
    }

    /**
     * Test if the date's month in first parameter match to the month in second parameter
     */
    public function testDateTimeValidatorIsMonth()
    {
        $date = new \DateTime();
        $result = DateTimeValidator::isMonth($date, $date->format('m'));

        $this->assertTrue($result);
    }

    /**
     * Test if the date's month in first parameter do not match to the month in second parameter
     */
    public function testDateTimeValidatorIsMonthFalse()
    {
        $date = new \DateTime();
        $result = DateTimeValidator::isMonth($date, $date->format('m')-1);

        $this->assertFalse($result);
    }

    /**
     * Test if the date's year in first parameter match to the year in second parameter
     */
    public function testDateTimeValidatorIsYear()
    {
        $date = new \DateTime();
        $result = DateTimeValidator::isYear($date, $date->format('Y'));

        $this->assertTrue($result);
    }

    /**
     * Test if the date's year in first parameter do not match to the year in second parameter
     */
    public function testDateTimeValidatorIsYearFalse()
    {
        $date = new \DateTime();
        $result = DateTimeValidator::isYear($date, $date->format('Y')-1);

        $this->assertFalse($result);
    }

    /**
     * Test if the date in parameter is today's date
     */
    public function testDateTimeValidatorIsToday()
    {
        $date = new \DateTime();
        $result = DateTimeValidator::isToday($date, $date);

        $this->assertTrue($result);
    }

    /**
     * Test if the date in parameter is not today's date
     */
    public function testDateTimeValidatorIsTodayFalse()
    {
        $date = new \DateTime('1990-10-12');
        $result = DateTimeValidator::isToday($date);

        $this->assertFalse($result);
    }
}