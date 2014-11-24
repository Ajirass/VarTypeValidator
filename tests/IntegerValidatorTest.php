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
} 