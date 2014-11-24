<?php
namespace Ajirass\VarTypeValidator;

class IntegerValidator
{
    public static function equal($integer, $equalInteger)
    {
        $result = ($integer === $equalInteger) ? true : false;

        return $result;
    }

    public static function greaterThan($integer, $greaterInteger)
    {
        $result = ($integer > $greaterInteger) ? true : false;

        return $result;
    }

    public static function lessThan($integer, $lessInteger)
    {
        $result = ($integer < $lessInteger) ? true : false;

        return $result;
    }

    public static function between($integer, $min, $max)
    {
        $result = (($integer > $min) && ($integer < $max)) ? true : false;

        return $result;
    }

    public static function negative($integer, $includeZero = false)
    {

        if(true === $includeZero) {
            $result = ($integer <= 0) ? true : false;
        } else {
            $result = ($integer < 0) ? true : false;
        }

        return $result;
    }

    public static function positive($integer, $includeZero = false)
    {
        if(true === $includeZero) {
            $result = ($integer >= 0) ? true : false;
        } else {
            $result = ($integer > 0) ? true : false;
        }

        return $result;
    }
} 