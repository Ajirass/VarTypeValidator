<?php
namespace Tests\Ajirass\VarTypeValidator;

use Ajirass\VarTypeValidator\DateTimeValidator;

class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIsYear()
    {
        $date = new \DateTime();
        $dateYear = new \DateTime();
        $year = $dateYear->format("Y");
        $result = DateTimeValidator::isYear($date, $year);

        $this->assertTrue($result);
    }

    public function testIsNotYear()
    {
        $date = new \DateTime();
        $dateYear = new \DateTime("+1 year");
        $year = $dateYear->format("Y");
        $result = DateTimeValidator::isYear($date, $year);

        $this->assertFalse($result);
    }

    public function testIsNumericMonth()
    {
        $date = new \DateTime();
        $dateMonth = new \DateTime();
        $month = $dateMonth->format("m");
        $result = DateTimeValidator::isNumericMonth($date, $month);

        $this->assertTrue($result);
    }

    public function testIsNotNumericMonth()
    {
        $date = new \DateTime();
        $dateMonth = new \DateTime("+1 month");
        $month = $dateMonth->format("m");
        $result = DateTimeValidator::isNumericMonth($date, $month);

        $this->assertFalse($result);
    }

    public function testIsNumericDay()
    {
        $date = new \DateTime();
        $dateDay = new \DateTime();
        $day = $dateDay->format("d");
        $result = DateTimeValidator::isNumericDay($date, $day);

        $this->assertTrue($result);
    }

    public function testIsNotNumericDay()
    {
        $date = new \DateTime();
        $dateDay = new \DateTime("+1 day");
        $day = $dateDay->format("d");
        $result = DateTimeValidator::isNumericMonth($date, $day);

        $this->assertFalse($result);
    }

    public function testDateBetween()
    {
        $date = new \DateTime();
        $dateMin = new \DateTime("-2 day");
        $dateMax = new \DateTime('+2 day');
        $result = DateTimeValidator::dateBetween($date, $dateMin, $dateMax);

        $this->assertTrue($result);
    }

    public function testDateNotBetween()
    {
        $date = new \DateTime();
        $dateMin = new \DateTime("+2 day");
        $dateMax = new \DateTime('+2 day');
        $result = DateTimeValidator::dateBetween($date, $dateMin, $dateMax);

        $this->assertFalse($result);
    }

    public function testIsBefore()
    {
        $date = new \DateTime();
        $dateMax = new \DateTime('+2 day');
        $result = DateTimeValidator::isBefore($date, $dateMax);

        $this->assertTrue($result);
    }

    public function testIsNotBefore()
    {
        $date = new \DateTime();
        $dateMax = new \DateTime('-2 day');
        $result = DateTimeValidator::isBefore($date, $dateMax);

        $this->assertFalse($result);
    }

    public function testIsAfter()
    {
        $date = new \DateTime();
        $dateMin = new \DateTime('-2 day');
        $result = DateTimeValidator::isAfter($date, $dateMin);

        $this->assertTrue($result);
    }

    public function testIsNotAfter()
    {
        $date = new \DateTime();
        $dateMin = new \DateTime('+2 day');
        $result = DateTimeValidator::isAfter($date, $dateMin);

        $this->assertFalse($result);
    }
}
