<?php
namespace Ajirass\VarTypeValidator;

/**
 * Class IntegerValidator
 * @package Ajirass\VarTypeValidator
 */
class IntegerValidator
{
    /**
     * @param int $integer
     * @param int $equalInteger
     *
     * @return bool
     */
    public static function equal($integer, $equalInteger)
    {
        $result = ($integer === $equalInteger) ? true : false;

        return $result;
    }

    /**
     * @param int $integer
     * @param int $greaterInteger
     *
     * @return bool
     */
    public static function greaterThan($integer, $greaterInteger)
    {
        $result = ($integer > $greaterInteger) ? true : false;

        return $result;
    }

    /**
     * @param int $integer
     * @param int $lessInteger
     *
     * @return bool
     */
    public static function lessThan($integer, $lessInteger)
    {
        $result = ($integer < $lessInteger) ? true : false;

        return $result;
    }

    /**
     * @param int $integer
     * @param int $min
     * @param int $max
     *
     * @return bool
     */
    public static function between($integer, $min, $max)
    {
        $result = (($integer > $min) && ($integer < $max)) ? true : false;

        return $result;
    }

    /**
     * @param int $integer
     * @param bool $includeZero
     *
     * @return bool
     */
    public static function negative($integer, $includeZero = false)
    {

        if(true === $includeZero) {
            $result = ($integer <= 0) ? true : false;
        } else {
            $result = ($integer < 0) ? true : false;
        }

        return $result;
    }

    /**
     * @param int $integer
     * @param bool $includeZero
     *
     * @return bool
     */
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
