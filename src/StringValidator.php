<?php
namespace Ajirass\VarTypeValidator;


class StringValidator
{
    public static function equal($string, $length)
    {
        $result = (strlen($string) === $length) ? true : false;

        return $result;
    }

    public static function greaterThan($string, $length)
    {
        $result = (strlen($string) > $length) ? true : false;

        return $result;
    }

    public static function lessThan($string, $length)
    {
        $result = (strlen($string) < $length) ? true : false;

        return $result;
    }

    public static function between($string, $min, $max)
    {
        $stringLength = strlen($string);
        $result       = (($stringLength > $min) && ($stringLength < $max)) ? true : false;

        return $result;
    }

    public static function noWhiteSpaceStartEnd($string)
    {
        $result = (true == preg_match('/^ /', $string)) || (true == preg_match('/ $/', $string)) ? false : true;

        return $result;
    }

    public static function noWhiteSpace($string)
    {
        $result = true == preg_match('/ /', $string) ? false : true;

        return $result;
    }

}


