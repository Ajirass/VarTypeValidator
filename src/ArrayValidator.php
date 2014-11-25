<?php
namespace Ajirass\VarTypeValidator;

/**
 * Class ArrayValidator
 * @package Ajirass\VarTypeValidator
 */
class ArrayValidator
{
    const EQUAL_OPERATOR         = '===';
    const GREATER_OPERATOR       = '>';
    const GREATER_EQUAL_OPERATOR = '>=';
    const LESS_OPERATOR          = '<';
    const LESS_EQUAL_OPERATOR    = '<=';

    /**
     * @param array $array
     *
     * @return bool
     */
    public static function emptyArray(array $array)
    {
        return empty($array);
    }

    /**
     * @param array $array
     * @param int $length
     * @param string $operator
     *
     * @return bool
     */
    public static function numberElementsCompare(array $array, $length, $operator = self::EQUAL_OPERATOR)
    {
        $arrayLength = count($array);
        switch($operator) {
            case self::GREATER_OPERATOR:
                $result = $arrayLength > $length ? true : false;
                break;
            case self::GREATER_EQUAL_OPERATOR:
                $result = $arrayLength >= $length ? true : false;
                break;
            case self::LESS_OPERATOR:
                $result = $arrayLength < $length ? true : false;
                break;
            case self::LESS_EQUAL_OPERATOR:
                $result = $arrayLength <= $length ? true : false;
                break;
            default:
                $result = $arrayLength === $length ? true : false;
        }

        return $result;
    }

    /**
     * @param array $array
     * @param $min
     * @param $max
     *
     * @return bool
     */
    public static function numberElementsBetween(array $array, $min, $max)
    {
        $arrayLength = count($array);
        $result      = ($arrayLength > $min) && ($arrayLength < $max) ? true : false;

        return $result;
    }

    /**
     * @param array $array
     * @param $key
     *
     * @return bool
     */
    public static function keyExist(array $array, $key)
    {
        return array_key_exists($key, $array);
    }

    /**
     * @param array $array
     * @param $value
     *
     * @return bool
     */
    public static function valueExist(array $array, $value)
    {
        return in_array($value, $array);
    }
}
