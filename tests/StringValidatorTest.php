<?php
namespace Tests\Wreyno\Validator;

use Wreyno\Validator\StringValidator;

/**
 * Class StringValidatorTest
 * @package Tests\Wreyno\Validator
 */
class StringValidatorTest extends \PHPUnit_Framework_TestCase {

    /**
     * Test if string length is equal than an integer
     *
     * @throws \Exception
     */
    public function testStringValidatorEqual()
    {
        $string = 'first string';
        $result = StringValidator::equal($string, mb_strlen($string));

        $this->assertTrue($result);
    }

    /**
     * Test if string length is not equal to an integer
     *
     * @throws \Exception
     */
    public function testStringValidatorEqualFalse()
    {
        $string = 'first string';
        $result = StringValidator::equal($string, mb_strlen($string)-1);

        $this->assertFalse($result);
    }

    /**
     * Test if string length is higher than an integer
     *
     * @throws \Exception
     */
    public function testStringValidatorHigher()
    {
        $string = 'first string';
        $result = StringValidator::higher($string, mb_strlen($string)-1);

        $this->assertTrue($result);
    }

    /**
     * Test if string length is not higher than an integer
     *
     * @throws \Exception
     */
    public function testStringValidatorHigherFalse()
    {
        $string = 'first string';
        $result = StringValidator::higher($string, mb_strlen($string)+1);

        $this->assertFalse($result);
    }

    /**
     * Test if string length is lower than an integer
     *
     * @throws \Exception
     */
    public function testStringValidatorLower()
    {
        $string = 'first string';
        $result = StringValidator::lower($string, mb_strlen($string)+1);

        $this->assertTrue($result);
    }

    /**
     * Test if string length is not lower than an integer
     *
     * @throws \Exception
     */
    public function testStringValidatorLowerFalse()
    {
        $string = 'first string';
        $result = StringValidator::lower($string, mb_strlen($string)-1);

        $this->assertFalse($result);
    }

    /**
     * Test if string length is between two integers
     *
     * @throws \Exception
     */
    public function testStringValidatorBetween()
    {
        $string = 'first string';
        $min = mt_rand(0,5);
        $max = mt_rand(50, 100);
        $result = StringValidator::between($string, $min, $max);

        $this->assertTrue($result);
    }

    /**
     * Test if string length is not between two integers
     *
     * @throws \Exception
     */
    public function testStringValidatorBetweenFalse()
    {
        $string = 'first string';
        $min = mt_rand(50, 100);
        $max = mt_rand(0,5);
        $result = StringValidator::between($string, $min, $max);

        $this->assertFalse($result);
    }

    /**
     * Test if a string start or end with whitespaces
     *
     * @throws \Exception
     */
    public function testStringValidatorStartAndEndWhiteSpace()
    {
        $string = 'first string ';
        $result = StringValidator::startAndEndWhiteSpace($string);

        $this->assertTrue($result);
    }

    /**
     * Test if a string do not start or end with whitespaces
     *
     * @throws \Exception
     */
    public function testStringValidatorStartAndEndWhiteSpaceFalse()
    {
        $string = 'first string';
        $result = StringValidator::startAndEndWhiteSpace($string);

        $this->assertFalse($result);
    }

    /**
     * Test if a string contains no whitespaces
     *
     * @throws \Exception
     */
    public function testStringValidatorNoWhiteSpace()
    {
        $string = 'first';
        $result = StringValidator::noWhiteSpace($string);

        $this->assertTrue($result);
    }

    /**
     * Test if a string do not contains no whitespaces
     *
     * @throws \Exception
     */
    public function testStringValidatorNoWhiteSpaceFalse()
    {
        $string = 'first ';
        $result = StringValidator::noWhiteSpace($string);

        $this->assertFalse($result);
    }


} 