<?php
namespace Tests\Ajirass\VarTypeValidator;

use Ajirass\VarTypeValidator\StringValidator;

class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testStringEqual()
    {
        $string = $this->generateRandomString();
        $stringLength = strlen($string);
        $result = StringValidator::equal($string, $stringLength);

        $this->assertTrue($result);
    }

    public function testStringNotEqual()
    {
        $string = $this->generateRandomString(10);
        $length = mt_rand(11, 100);
        $result = StringValidator::equal($string, $length);

        $this->assertFalse($result);
    }

    public function testStringGreaterThan()
    {
        $string = $this->generateRandomString(20);
        $length = mt_rand(1, 19);
        $result = StringValidator::greaterThan($string, $length);

        $this->assertTrue($result);
    }

    public function testStringNotGreaterThan()
    {
        $string = $this->generateRandomString(10);
        $length = mt_rand(11, 50);
        $result = StringValidator::greaterThan($string, $length);

        $this->assertFalse($result);
    }

    public function testStringLessThan()
    {
        $string = $this->generateRandomString(10);
        $length = mt_rand(11, 50);
        $result = StringValidator::lessThan($string, $length);

        $this->assertTrue($result);
    }

    public function testStringNotLessThan()
    {
        $string = $this->generateRandomString(20);
        $length = mt_rand(1, 20);
        $result = StringValidator::lessThan($string, $length);

        $this->assertFalse($result);
    }

    public function testStringBetween()
    {
        $string = $this->generateRandomString(20);
        $min = mt_rand(1, 19);
        $max = mt_rand(21, 40);
        $result = StringValidator::between($string, $min, $max);

        $this->assertTrue($result);
    }

    public function testStringNotBetween()
    {
        $string = $this->generateRandomString(10);
        $min = mt_rand(11, 19);
        $max = mt_rand(20, 40);
        $result = StringValidator::between($string, $min, $max);

        $this->assertFalse($result);
    }

    public function testStringNoWhiteSpace()
    {
        $string = $this->generateRandomString();
        $result = StringValidator::noWhiteSpace($string);

        $this->assertTrue($result);
    }

    public function testStringNotNoWhiteSpace()
    {
        $string = $this->generateRandomString().' '.$this->generateRandomString();
        $result = StringValidator::noWhiteSpace($string);

        $this->assertFalse($result);
    }

    public function testStringNoWhiteSpaceStartEnd()
    {
        $string = $this->generateRandomString();
        $result = StringValidator::noWhiteSpaceStartEnd($string);

        $this->assertTrue($result);
    }

    public function testStringNotNoWhiteSpaceStartEnd()
    {
        $string = ' '.$this->generateRandomString().' ';
        $result = StringValidator::noWhiteSpaceStartEnd($string);

        $this->assertFalse($result);
    }



    private function generateRandomString($length = null)
    {
        $length = (null === $length) ? (mt_rand(10, 50)) : $length;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
} 