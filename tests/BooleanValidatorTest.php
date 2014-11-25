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

    public function testBooleanNotIsTrue()
    {
        $boolean = false;
        $result = BooleanValidator::isTrue($boolean);

        $this->assertFalse($result);
    }
}
