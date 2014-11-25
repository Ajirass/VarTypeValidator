<?php
namespace Ajirass\VarTypeValidator;


/**
 * Class DateTimeValidator
 * @package Ajirass\VarTypeValidator
 */
class DateTimeValidator
{
    /**
     * @param \Datetime $date
     * @param $year
     *
     * @return bool
     */
    public static function isYear(\Datetime $date, $year)
    {
        $result = ($date->format("Y") === $year) ? true : false;

        return $result;
    }

    /**
     * @param \Datetime $date
     * @param $month
     *
     * @return bool
     */
    public static function isNumericMonth(\Datetime $date, $month)
    {
        $result = ($date->format("m") === $month) ? true : false;

        return $result;
    }

    /**
     * @param \Datetime $date
     * @param $day
     *
     * @return bool
     */
    public static function isNumericDay(\Datetime $date, $day)
    {
        $result = ($date->format("d") === $day) ? true : false;

        return $result;
    }

    /**
     * @param \Datetime $date
     * @param \Datetime $dateMin
     * @param \Datetime $dateMax
     *
     * @return bool
     */
    public static function dateBetween(\Datetime $date, \Datetime $dateMin, \Datetime $dateMax)
    {
        $result = ($date > $dateMin) && ($date < $dateMax) ? true : false;

        return $result;
    }

    /**
     * @param \Datetime $date
     * @param \Datetime $dateMax
     *
     * @return bool
     */
    public static function isBefore(\Datetime $date, \Datetime $dateMax)
    {
        return ($date < $dateMax);
    }

    /**
     * @param \Datetime $date
     * @param \Datetime $dateMin
     *
     * @return bool
     */
    public static function isAfter(\Datetime $date, \Datetime $dateMin)
    {
        return ($date > $dateMin);
    }
}
