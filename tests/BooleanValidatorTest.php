<?php
namespace Tests\Ajirass\VarTypeValidator;

use Ajirass\VarTypeValidator\BooleanValidator;

class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testBooleanIsTrue()
    {
        $boolean = true;
        $result = BooleanValidator::isTrue($boolean);

        $this->assertTrue($result);
    }

    public function testBooleanIsNotTrue()
    {
        $boolean = false;
        $result = BooleanValidator::isTrue($boolean);

        $this->assertFalse($result);
    }

    public function testBooleanIsFalse()
    {
        $boolean = false;
        $result = BooleanValidator::isFalse($boolean);

        $this->assertTrue($result);
    }

    public function testBooleanIsNotFalse()
    {
        $boolean = true;
        $result = BooleanValidator::isFalse($boolean);

        $this->assertFalse($result);
    }
}
