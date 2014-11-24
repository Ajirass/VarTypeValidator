<?php
namespace Tests\Ajirass\VarTypeValidator;

use Ajirass\VarTypeValidator\IntegerValidator;

class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIntegerEqual()
    {
        $integer = $integerEqual = mt_rand ( 0, 200 );
        $resultat = IntegerValidator::equal($integer, $integerEqual);

        $this->assertTrue($resultat);
    }

    public function testIntegerNotEqual()
    {
        $integer = mt_rand ( 0, 200 );
        $integerNotEqual = mt_rand ( 201, 400 );
        $resultat = IntegerValidator::equal($integer, $integerNotEqual);

        $this->assertFalse($resultat);
    }

    public function testIntegerGreaterThan()
    {
        $integer = mt_rand ( 201, 400 );
        $integerGreater = mt_rand ( 0, 200 );
        $resultat = IntegerValidator::greaterThan($integer, $integerGreater);

        $this->assertTrue($resultat);
    }

    public function testIntegerNotGreaterThan()
    {
        $integer = mt_rand ( 0, 200 );
        $integerNotGreater = mt_rand ( 201, 400 );
        $resultat = IntegerValidator::greaterThan($integer, $integerNotGreater);

        $this->assertFalse($resultat);
    }

    public function testIntegerLessThan()
    {
        $integer = mt_rand ( 0, 200 );
        $integerLess = mt_rand ( 201, 400 );
        $resultat = IntegerValidator::lessThan($integer, $integerLess);

        $this->assertTrue($resultat);
    }

    public function testIntegerNotLessThan()
    {
        $integer = mt_rand ( 201, 400 );
        $integerNotLess = mt_rand ( 0, 200 );
        $resultat = IntegerValidator::lessThan($integer, $integerNotLess);

        $this->assertFalse($resultat);
    }

    public function testIntegerBetween()
    {
        $integer = mt_rand ( 201, 400 );
        $min = mt_rand ( 0, 200 );
        $max = mt_rand( 401, 600 );
        $resultat = IntegerValidator::between($integer, $min, $max);

        $this->assertTrue($resultat);
    }

    public function testIntegerNotBetween()
    {
        $integer = mt_rand ( 0, 200 );
        $min = mt_rand ( 200, 400 );
        $max = mt_rand( 401, 600 );
        $resultat = IntegerValidator::between($integer, $min, $max);

        $this->assertFalse($resultat);
    }

    public function testIntegerPositiveWithZero()
    {
        $integer = mt_rand(0, 200);
        $resultat = IntegerValidator::positive($integer, true);

        $this->assertTrue($resultat);
    }

    public function testIntegerNotPositiveWithZero()
    {
        $integer = mt_rand(-200, -1);
        $resultat = IntegerValidator::positive($integer, true);

        $this->assertFalse($resultat);
    }

    public function testIntegerPositiveWithoutZero()
    {
        $integer = mt_rand(1, 200);
        $resultat = IntegerValidator::positive($integer);

        $this->assertTrue($resultat);
    }

    public function testIntegerNotPositiveWithoutZero()
    {
        $integer = mt_rand(-200, 0);
        $resultat = IntegerValidator::positive($integer);

        $this->assertFalse($resultat);
    }

    public function testIntegerNegativeWithZero()
    {
        $integer = mt_rand(-200, 0);
        $resultat = IntegerValidator::negative($integer, true);

        $this->assertTrue($resultat);
    }

    public function testIntegerNotNegativeWithZero()
    {
        $integer = mt_rand(1, 200);
        $resultat = IntegerValidator::negative($integer, true);

        $this->assertFalse($resultat);
    }

    public function testIntegerNegativeWithoutZero()
    {
        $integer = mt_rand(-200, -1);
        $resultat = IntegerValidator::negative($integer);

        $this->assertTrue($resultat);
    }

    public function testIntegerNotNegativeWithoutZero()
    {
        $integer = mt_rand(0, 200);
        $resultat = IntegerValidator::negative($integer);

        $this->assertFalse($resultat);
    }

}
