<?php

namespace Tests\Wreyno\Validator;

use Wreyno\Validator\IntegerValidator;

/**
 * Class IntegerValidatorTest
 * @package Tests\Wreyno\Validator
 */
class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if both integer parameter are equal to each other
     *
     * @throws \Exception
     */
    public function testIntegerValidatorEqual()
    {
        $number = mt_rand(0, 10);
        $result = IntegerValidator::equal($number, $number);

        $this->assertTrue($result);
    }

    /**
     * Test if first integer parameter is higher than the second one
     *
     * @throws \Exception
     */
    public function testIntegerValidatorHigher()
    {
        $highest = mt_rand(50, 100);
        $lowest = mt_rand(0, 49);
        $result = IntegerValidator::higher($highest,$lowest);

        $this->assertTrue($result);
    }

    /**
     * Test if first integer parameter is lower than the second one
     *
     * @throws \Exception
     */
    public function testIntegerValidatorLower()
    {
        $lowest = mt_rand(0, 49);
        $highest = mt_rand(50, 100);
        $result = IntegerValidator::lower($lowest,$highest);

        $this->assertTrue($result);
    }

    /**
     * Test if first integer is between the second and the third one
     *
     * @throws \Exception
     */
    public function testIntegerValidatorBetween()
    {
        $integer = mt_rand(33, 66);
        $min = mt_rand(0, 32);
        $max = mt_rand(67, 100);
        $result = IntegerValidator::between($integer, $min, $max);

        $this->assertTrue($result);
    }

    /**
     * Test if the integer in parameter is negative
     *
     * @throws \Exception
     */
    public function testIntegerValidatorNegative()
    {
        $integer = mt_rand(-100, -1);
        $result = IntegerValidator::negative($integer, true);

        $this->assertTrue($result);
    }

    /**
     * Test if the integer in parameter is positive
     *
     * @throws \Exception
     */
    public function testIntegerValidatorPositive()
    {
        $integer = mt_rand(1, 100);
        $result = IntegerValidator::positive($integer, true);

        $this->assertTrue($result);
    }

} 