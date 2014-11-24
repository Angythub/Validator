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
        $result = StringValidator::equalLength($string, mb_strlen($string));

        $this->assertTrue($result);
    }

    /**
     * Test if string length is higher than an integer
     *
     * @throws \Exception
     */
    public function testStringValidatorHigher()
    {
        $string = 'first string';
        $result = StringValidator::higherLength($string, mb_strlen($string)-1);

        $this->assertTrue($result);
    }

    /**
     * Test if string length is lower than an integer
     *
     * @throws \Exception
     */
    public function testStringValidatorLower()
    {
        $string = 'first string';
        $result = StringValidator::lowerLength($string, mb_strlen($string)+1);

        $this->assertTrue($result);
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
        $result = StringValidator::betweenLength($string, $min, $max);

        $this->assertTrue($result);
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


} 