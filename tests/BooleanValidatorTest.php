<?php

namespace Tests\Wreyno\Validator;


use Wreyno\Validator\BooleanValidator;

/**
 * Class BooleanValidatorTest
 * @package Tests\Wreyno\Validator
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase {

    /**
     * Test if the boolean is true
     *
     * @throws \Exception
     */
    public function testArrayValidatorIsTrue()
    {
        $bool = true;
        $result = BooleanValidator::isTrue($bool);

        $this->assertTrue($result);
    }

    /**
     * Test if the boolean is not true
     *
     * @throws \Exception
     */
    public function testArrayValidatorIsTrueFalse()
    {
        $bool = false;
        $result = BooleanValidator::isTrue($bool);

        $this->assertFalse($result);
    }

    /**
     * Test if the boolean is false
     *
     * @throws \Exception
     */
    public function testArrayValidatorIsFalse()
    {
        $bool = false;
        $result = BooleanValidator::isFalse($bool);

        $this->assertTrue($result);
    }

    /**
     * Test if the boolean is not false
     *
     * @throws \Exception
     */
    public function testArrayValidatorIsFalseTrue()
    {
        $bool = true;
        $result = BooleanValidator::isFalse($bool);

        $this->assertFalse($result);
    }
} 