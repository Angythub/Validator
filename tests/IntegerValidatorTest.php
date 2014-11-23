<?php

namespace Tests\Wreyno\Validator;

use Wreyno\Validator\IntegerValidator;

class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{

    public function testIntegerValidatorEqualityTrue()
    {
        $a = mt_rand(1, 10);
        $b = mt_rand(1, 10);
        $equal = IntegerValidator::equal($a, $b);

        $this->assertTrue($equal);
    }

    public function testIntegerValidatorEqualityFalse()
    {
        $a = mt_rand(1, 10);
        $b = mt_rand(1, 10);
        $equal = IntegerValidator::equal($a, $b);

        $this->assertFalse($equal);
    }
} 