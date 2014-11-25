<?php
namespace Ajirass\VarTypeValidator;


/**
 * Class StringValidator
 * @package Ajirass\VarTypeValidator
 */
class StringValidator
{
    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     */
    public static function equal($string, $length)
    {
        $result = (strlen($string) === $length) ? true : false;

        return $result;
    }


    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     */
    public static function greaterThan($string, $length)
    {
        $result = (strlen($string) > $length) ? true : false;

        return $result;
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     */
    public static function lessThan($string, $length)
    {
        $result = (strlen($string) < $length) ? true : false;

        return $result;
    }

    /**
     * @param string $string
     * @param int $min
     * @param int $max
     *
     * @return bool
     */
    public static function between($string, $min, $max)
    {
        $stringLength = strlen($string);
        $result       = (($stringLength > $min) && ($stringLength < $max)) ? true : false;

        return $result;
    }

    /**
     * @param string $string
     *
     * @return bool
     */
    public static function noWhiteSpaceStartEnd($string)
    {
        $result = (true == preg_match('/^ /', $string)) || (true == preg_match('/ $/', $string)) ? false : true;

        return $result;
    }

    /**
     * @param string $string
     *
     * @return bool
     */
    public static function noWhiteSpace($string)
    {
        $result = (true == preg_match('/ /', $string)) ? false : true;

        return $result;
    }

}
