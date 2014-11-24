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
     * Test if both integer parameter are not equal to each other
     *
     * @throws \Exception
     */
    public function testIntegerValidatorEqualFalse()
    {
        $number = mt_rand(0, 10);
        $result = IntegerValidator::equal($number, $number+11);

        $this->assertFalse($result);
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
     * Test if first integer parameter is not higher than the second one
     *
     * @throws \Exception
     */
    public function testIntegerValidatorHigherFalse()
    {
        $highest = mt_rand(0, 49);
        $lowest = mt_rand(50, 100);
        $result = IntegerValidator::higher($highest,$lowest);

        $this->assertFalse($result);
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
     * Test if first integer parameter is not lower than the second one
     *
     * @throws \Exception
     */
    public function testIntegerValidatorLowerFalse()
    {
        $lowest = mt_rand(50, 100);
        $highest = mt_rand(0, 49);
        $result = IntegerValidator::lower($lowest,$highest);

        $this->assertFalse($result);
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
     * Test if first integer is not between the second and the third one
     *
     * @throws \Exception
     */
    public function testIntegerValidatorBetweenFalse()
    {
        $integer = mt_rand(33, 66);
        $min = mt_rand(67, 100);
        $max = mt_rand(0, 32);
        $result = IntegerValidator::between($integer, $min, $max);

        $this->assertFalse($result);
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
     * Test if the integer in parameter is not negative
     *
     * @throws \Exception
     */
    public function testIntegerValidatorNegativeFalse()
    {
        $integer = mt_rand(1, 100);
        $result = IntegerValidator::negative($integer, true);

        $this->assertFalse($result);
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

    /**
     * Test if the integer in parameter is not positive
     *
     * @throws \Exception
     */
    public function testIntegerValidatorPositiveFalse()
    {
        $integer = mt_rand(-100, -1);
        $result = IntegerValidator::positive($integer, true);

        $this->assertFalse($result);
    }

} 