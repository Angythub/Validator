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
        $higher = mt_rand(50, 100);
        $lowest = mt_rand(0, 49);
        $higher = IntegerValidator::higher($higher,$lowest);

        $this->assertEquals($higher, true);
    }

} 