<?php
namespace Tests\Ajirass\VarTypeValidator;

use Ajirass\VarTypeValidator\ArrayValidator;

class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testEmptyArray()
    {
        $array = [];
        $result = ArrayValidator::emptyArray($array);

        $this->assertTrue($result);
    }

    public function testNumberElementsEqual()
    {
        $array = range('a', 'z');
        $arrayLength = count($array);
        $result = ArrayValidator::numberElementsCompare($array, $arrayLength, ArrayValidator::EQUAL_OPERATOR);

        $this->assertTrue($result);
    }

    public function testNumberElementsGreaterThan()
    {
        $array = range('a', 'z');
        $arrayLength = count($array) - 5;
        $result = ArrayValidator::numberElementsCompare($array, $arrayLength, ArrayValidator::GREATER_OPERATOR);

        $this->assertTrue($result);
    }

    public function testNumberElementsGreaterEqualThan()
    {
        $array = range('a', 'z');
        $arrayLength = count($array);
        $result = ArrayValidator::numberElementsCompare($array, $arrayLength, ArrayValidator::GREATER_EQUAL_OPERATOR);

        $this->assertTrue($result);
    }

    public function testNumberElementsLessThan()
    {
        $array = range('a', 'z');
        $arrayLength = count($array) + 10;
        $result = ArrayValidator::numberElementsCompare($array, $arrayLength, ArrayValidator::LESS_OPERATOR);

        $this->assertTrue($result);
    }

    public function testNumberElementsLessEqualThan()
    {
        $array = range('a', 'z');
        $arrayLength = count($array);
        $result = ArrayValidator::numberElementsCompare($array, $arrayLength, ArrayValidator::LESS_EQUAL_OPERATOR);

        $this->assertTrue($result);
    }

    public function testNumberElementsBetween()
    {
        $array = range('a', 'z');
        $min = count($array) - 10;
        $max = count($array) + 10;
        $result = ArrayValidator::numberElementsBetween($array, $min, $max);

        $this->assertTrue($result);
    }

    public function testKeyExist()
    {
        $array = [
          'key1' => 'value1',
          'key2' => 'value2',
          'key3' => 'value3',
          'key4' => 'value4',
        ];
        $result = ArrayValidator::keyExist($array, 'key3');

        $this->assertTrue($result);
    }

    public function testKeyNotExist()
    {
        $array = [
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
            'key4' => 'value4',
        ];
        $result = ArrayValidator::keyExist($array, 'key6');

        $this->assertFalse($result);
    }

    public function testValueExist()
    {
        $array = range('a', 'z');
        $key = array_rand($array, 1);
        $result = ArrayValidator::valueExist($array, $array[$key]);

        $this->assertTrue($result);
    }

    public function testValueNotExist()
    {
        $array = range('a', 'd');
        $value = 'g';
        $result = ArrayValidator::valueExist($array, $value);

        $this->assertFalse($result);
    }
}
