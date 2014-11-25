<?php
namespace Ajirass\VarTypeValidator;


/**
 * Class BooleanValidator
 * @package Ajirass\VarTypeValidator
 */
class BooleanValidator
{
    /**
     * @param bool $boolean
     *
     * @return bool
     */
    public static function isTrue($boolean)
    {
        $result = true === $boolean ? true : false;

        return $result;
    }

    /**
     * @param bool $boolean
     *
     * @return bool
     */
    public static function isFalse($boolean)
    {
        $result = false === $boolean ? true : false;

        return $result;
    }
}
