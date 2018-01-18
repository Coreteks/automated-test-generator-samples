<?php

namespace tests\Faker\Provider;

use Faker\Provider\DateTime;
use Mockery as m;

class DateTimeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\DateTime
*/
protected $dateTime;

public function setUp()
{
    parent::setUp();

    $this->dateTime = new \Faker\Provider\DateTime();
}

public function testUnixTime0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->unixTime($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDateTime0()
{
    $max = m::mock('UntypedParameter_max_');
    $timezone = m::mock('UntypedParameter_timezone_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->dateTime($max, $timezone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDateTimeAD0()
{
    $max = m::mock('UntypedParameter_max_');
    $timezone = m::mock('UntypedParameter_timezone_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->dateTimeAD($max, $timezone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIso86010()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->iso8601($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate0()
{
    $format = m::mock('UntypedParameter_format_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->date($format, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTime0()
{
    $format = m::mock('UntypedParameter_format_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->time($format, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDateTimeBetween0()
{
    $startDate = m::mock('UntypedParameter_startDate_');
    $endDate = m::mock('UntypedParameter_endDate_');
    $timezone = m::mock('UntypedParameter_timezone_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($startTimestamp > $endTimestamp) == false (line 129)

    $actual = $this->dateTime->dateTimeBetween($startDate, $endDate, $timezone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testDateTimeBetween1()
{
    $startDate = m::mock('UntypedParameter_startDate_');
    $endDate = m::mock('UntypedParameter_endDate_');
    $timezone = m::mock('UntypedParameter_timezone_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($startTimestamp > $endTimestamp) == true (line 129)
    // throw new \InvalidArgumentException('Start date must be anterior to end date.') -> exception (line 130)

    $actual = $this->dateTime->dateTimeBetween($startDate, $endDate, $timezone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDateTimeInInterval0()
{
    $date = m::mock('UntypedParameter_date_');
    $interval = m::mock('UntypedParameter_interval_');
    $timezone = m::mock('UntypedParameter_timezone_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->dateTimeInInterval($date, $interval, $timezone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDateTimeThisCentury0()
{
    $max = m::mock('UntypedParameter_max_');
    $timezone = m::mock('UntypedParameter_timezone_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->dateTimeThisCentury($max, $timezone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDateTimeThisDecade0()
{
    $max = m::mock('UntypedParameter_max_');
    $timezone = m::mock('UntypedParameter_timezone_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->dateTimeThisDecade($max, $timezone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDateTimeThisYear0()
{
    $max = m::mock('UntypedParameter_max_');
    $timezone = m::mock('UntypedParameter_timezone_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->dateTimeThisYear($max, $timezone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDateTimeThisMonth0()
{
    $max = m::mock('UntypedParameter_max_');
    $timezone = m::mock('UntypedParameter_timezone_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->dateTimeThisMonth($max, $timezone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAmPm0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->amPm($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDayOfMonth0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->dayOfMonth($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDayOfWeek0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->dayOfWeek($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMonth0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->month($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMonthName0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->monthName($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testYear0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->year($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCentury0()
{
    // TODO: Your mock expectations here

    $actual = $this->dateTime->century();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimezone0()
{
    // TODO: Your mock expectations here

    $actual = $this->dateTime->timezone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultTimezone0()
{
    $timezone = m::mock('UntypedParameter_timezone_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->setDefaultTimezone($timezone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultTimezone0()
{
    // TODO: Your mock expectations here

    $actual = $this->dateTime->getDefaultTimezone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
