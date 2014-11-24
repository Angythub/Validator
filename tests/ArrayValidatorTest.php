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
     * Test if an array not empty
     *
     * @throws \Exception
     */
    public function testArrayValidatorIsEmptyFalse()
    {
        $array = ['Test'];
        $result = ArrayValidator::isEmpty($array);

        $this->assertFalse($result);
    }

    /**
     * Test if the number of element in an array is equal to the $integer parameter
     *
     * @throws \Exception
     */
    public function testArrayValidatorCompareEqual()
    {
        $array = ['first'];
        $sign = 0;
        $integer = 1;

        $result = ArrayValidator::compare($array, $sign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test if the number of element in an array is higher than the $integer parameter
     *
     * @throws \Exception
     */
    public function testArrayValidatorCompareHigher()
    {
        $array = ['first', 'second'];
        $sign = 1;
        $integer = 1;

        $result = ArrayValidator::compare($array, $sign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test if the number of element in an array is higher or equal to the $integer parameter
     *
     * @throws \Exception
     */
    public function testArrayValidatorCompareHigherEqual()
    {
        $array = ['first'];
        $sign = 2;
        $integer = 1;

        $result = ArrayValidator::compare($array, $sign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test if the number of element in an array is lower than the $integer parameter
     *
     * @throws \Exception
     */
    public function testArrayValidatorCompareLower()
    {
        $array = ['first'];
        $sign = 3;
        $integer = 2;

        $result = ArrayValidator::compare($array, $sign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test if the number of element in an array is lower or equal to the $integer parameter
     *
     * @throws \Exception
     */
    public function testArrayValidatorCompareLowerEqual()
    {
        $array = ['first'];
        $sign = 4;
        $integer = 1;

        $result = ArrayValidator::compare($array, $sign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test if number of element is located inside a range of number
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
     * Test if number of element isn't located inside a range of number
     *
     * @throws \Exception
     */
    public function testArrayValidatorNumberElementsBetweenFalse()
    {
        $array = ['first', 'second', 'third'];
        $min = mt_rand(1,2);
        $max = mt_rand(1,2);

        $result = ArrayValidator::numberElementsBetween($array,$min, $max);

        $this->assertFalse($result);
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
     * Test if the key parameter does not exist within the array
     *
     * @throws \Exception
     */
    public function testArrayValidatorKeyExistsFalse()
    {
        $array = ['first' => '1', 'second' => '2', 'third' => '3'];
        $key = 'six';

        $result = ArrayValidator::keyExists($array, $key);

        $this->assertFalse($result);
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

    /**
     * Test if the value parameter does not exist within the array
     *
     * @throws \Exception
     */
    public function testArrayValidatorValueExistsFalse()
    {
        $array = ["first" => "1", "second" => "2", "third" => "3"];
        $value = "4";

        $result = ArrayValidator::valueExists($array, $value);

        $this->assertFalse($result);
    }
} 