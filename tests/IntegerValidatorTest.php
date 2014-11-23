<?php

namespace Tests\Wreyno\Validator;

use Wreyno\Validator\IntegerValidator;

class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{

    public function testIntegerValidatorEqual()
    {
        $number = mt_rand(0, 10);
        $equal = IntegerValidator::equal($number, $number);

        $this->assertEquals($equal, true);
    }

    public function testIntegerValidatorHigher()
    {
        $highest = mt_rand(50, 100);
        $lowest = mt_rand(0, 49);
        $higher = IntegerValidator::higher($highest,$lowest);

        $this->assertEquals($higher, true);
    }

    public function testIntegerValidatorLower()
    {
        $lowest = mt_rand(0, 49);
        $highest = mt_rand(50, 100);
        $lower = IntegerValidator::lower($lowest,$highest);

        $this->assertEquals($lower, true);
    }

    public function testIntegerValidatorBetween()
    {
        $integer = mt_rand(33, 66);
        $min = mt_rand(0, 32);
        $max = mt_rand(67, 100);
        $between = IntegerValidator::between($integer, $min, $max);

        $this->assertEquals($between, true);
    }

    public function testIntegerValidatorNegative()
    {
        $integer = mt_rand(-100, -1);
        $negative = IntegerValidator::negative($integer, true);

        $this->assertEquals($negative, true);
    }

    public function testIntegerValidatorPositive()
    {
        $integer = mt_rand(1, 100);
        $positive = IntegerValidator::positive($integer, true);

        $this->assertEquals($positive, true);
    }

} 