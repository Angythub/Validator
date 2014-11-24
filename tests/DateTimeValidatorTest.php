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
     * Test if the date's day in first parameter match to the day in second parameter
     */
    public function testDateTimeValidatorIsDay()
    {
        $date = new \DateTime();
        $result = DateTimeValidator::isDay($date, $date->format('d'));

        $this->assertTrue($result);
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
     * Test if the date's year in first parameter match to the year in second parameter
     */
    public function testDateTimeValidatorIsYear()
    {
        $date = new \DateTime();
        $result = DateTimeValidator::isYear($date, $date->format('Y'));

        $this->assertTrue($result);
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
} 