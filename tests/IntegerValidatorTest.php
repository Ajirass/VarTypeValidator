<?php
namespace Tests\Ajirass\VarTypeValidator;

use Ajirass\VarTypeValidator\IntegerValidator;

class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIntegerEqual()
    {
        $integer = $integerEqual = mt_rand ( 0, 200 );
        $result = IntegerValidator::equal($integer, $integerEqual);

        $this->assertTrue($result);
    }

    public function testIntegerNotEqual()
    {
        $integer = mt_rand ( 0, 200 );
        $integerNotEqual = mt_rand ( 201, 400 );
        $result = IntegerValidator::equal($integer, $integerNotEqual);

        $this->assertFalse($result);
    }

    public function testIntegerGreaterThan()
    {
        $integer = mt_rand ( 201, 400 );
        $integerGreater = mt_rand ( 0, 200 );
        $result = IntegerValidator::greaterThan($integer, $integerGreater);

        $this->assertTrue($result);
    }

    public function testIntegerNotGreaterThan()
    {
        $integer = mt_rand ( 0, 200 );
        $integerNotGreater = mt_rand ( 201, 400 );
        $result = IntegerValidator::greaterThan($integer, $integerNotGreater);

        $this->assertFalse($result);
    }

    public function testIntegerLessThan()
    {
        $integer = mt_rand ( 0, 200 );
        $integerLess = mt_rand ( 201, 400 );
        $result = IntegerValidator::lessThan($integer, $integerLess);

        $this->assertTrue($result);
    }

    public function testIntegerNotLessThan()
    {
        $integer = mt_rand ( 201, 400 );
        $integerNotLess = mt_rand ( 0, 200 );
        $result = IntegerValidator::lessThan($integer, $integerNotLess);

        $this->assertFalse($result);
    }

    public function testIntegerBetween()
    {
        $integer = mt_rand ( 201, 400 );
        $min = mt_rand ( 0, 200 );
        $max = mt_rand( 401, 600 );
        $result = IntegerValidator::between($integer, $min, $max);

        $this->assertTrue($result);
    }

    public function testIntegerNotBetween()
    {
        $integer = mt_rand ( 0, 200 );
        $min = mt_rand ( 200, 400 );
        $max = mt_rand( 401, 600 );
        $result = IntegerValidator::between($integer, $min, $max);

        $this->assertFalse($result);
    }

    public function testIntegerPositiveWithZero()
    {
        $integer = mt_rand(0, 200);
        $result = IntegerValidator::positive($integer, true);

        $this->assertTrue($result);
    }

    public function testIntegerNotPositiveWithZero()
    {
        $integer = mt_rand(-200, -1);
        $result = IntegerValidator::positive($integer, true);

        $this->assertFalse($result);
    }

    public function testIntegerPositiveWithoutZero()
    {
        $integer = mt_rand(1, 200);
        $result = IntegerValidator::positive($integer);

        $this->assertTrue($result);
    }

    public function testIntegerNotPositiveWithoutZero()
    {
        $integer = mt_rand(-200, 0);
        $result = IntegerValidator::positive($integer);

        $this->assertFalse($result);
    }

    public function testIntegerNegativeWithZero()
    {
        $integer = mt_rand(-200, 0);
        $result = IntegerValidator::negative($integer, true);

        $this->assertTrue($result);
    }

    public function testIntegerNotNegativeWithZero()
    {
        $integer = mt_rand(1, 200);
        $result = IntegerValidator::negative($integer, true);

        $this->assertFalse($result);
    }

    public function testIntegerNegativeWithoutZero()
    {
        $integer = mt_rand(-200, -1);
        $result = IntegerValidator::negative($integer);

        $this->assertTrue($result);
    }

    public function testIntegerNotNegativeWithoutZero()
    {
        $integer = mt_rand(0, 200);
        $result = IntegerValidator::negative($integer);

        $this->assertFalse($result);
    }

}

