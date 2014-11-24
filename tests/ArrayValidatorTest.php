<?php

namespace Tests\Wreyno\Validator;

use Wreyno\Validator\ArrayValidator;

/**
 * Class ArrayValidatorTest
 * @package Tests\Wreyno\Validator
 */
class ArrayValidatorTest extends \PHPUnit_Framework_TestCase {

    /**
     * Test if an array is empty
     *
     * @throws \Exception
     */
    public function testArrayValidatorIsEmpty()
    {
        $array = [];
        $result = ArrayValidator::isEmpty($array);

        $this->assertTrue($result);
    }

    /**
     * Test if the number of element in an array is higher or lower than the $integer parameter
     *
     * @throws \Exception
     */
    public function testArrayValidatorCompare()
    {
        $array = ['first'];
        $sign = 0;
        $integer = 1;

        $result = ArrayValidator::compare($array, $sign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test if number of element is located between a number and an other
     *
     * @throws \Exception
     */
    public function testArrayValidatorNumberElementsBetween()
    {
        $array = ['first', 'second', 'third'];
        $min = mt_rand(1,2);
        $max = mt_rand(4,5);

        $result = ArrayValidator::numberElementsBetween($array,$min, $max);

        $this->assertTrue($result);
    }

    /**
     * Test if the key parameter exist within the array
     *
     * @throws \Exception
     */
    public function testArrayValidatorKeyExists()
    {
        $array = ['first' => '1', 'second' => '2', 'third' => '3'];
        $key = 'first';

        $result = ArrayValidator::keyExists($array, $key);

        $this->assertTrue($result);
    }

    /**
     * Test if the value parameter exist within the array
     *
     * @throws \Exception
     */
    public function testArrayValidatorValueExists()
    {
        $array = ["first" => "1", "second" => "2", "third" => "3"];
        $value = "1";

        $result = ArrayValidator::valueExists($array, $value);

        $this->assertTrue($result);
    }
} 