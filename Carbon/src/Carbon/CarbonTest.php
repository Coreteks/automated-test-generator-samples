<?php

namespace tests\Carbon;

use Carbon\Carbon;
use Mockery as m;

class CarbonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_time = null;
/**
* @var mixed
*/
protected $_tz = null;
/**
* @var \Carbon\Carbon
*/
protected $carbon;

public function setUp()
{
    parent::setUp();

    $this->_time = null;
    $this->_tz = null;
    $this->carbon = new \Carbon\Carbon($this->_time, $this->_tz);
}

public function testUseMonthsOverflow0()
{
    $monthsOverflow = m::mock('UntypedParameter_monthsOverflow_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->useMonthsOverflow($monthsOverflow);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResetMonthsOverflow0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->resetMonthsOverflow();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldOverflowMonths0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->shouldOverflowMonths();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInstance0()
{
    $dt = m::mock(\DateTime::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dt instanceof static) == false (line 303)

    $actual = $this->carbon->instance($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInstance1()
{
    $dt = m::mock(\DateTime::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dt instanceof static) == true (line 303)

    $actual = $this->carbon->instance($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    $time = m::mock('UntypedParameter_time_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->parse($time, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNow0()
{
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->now($tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToday0()
{
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->today($tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTomorrow0()
{
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->tomorrow($tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testYesterday0()
{
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->yesterday($tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMaxValue0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (PHP_INT_SIZE === 4) == false (line 382)

    $actual = $this->carbon->maxValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMaxValue1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (PHP_INT_SIZE === 4) == true (line 382)

    $actual = $this->carbon->maxValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMinValue0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (PHP_INT_SIZE === 4) == false (line 398)

    $actual = $this->carbon->minValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMinValue1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (PHP_INT_SIZE === 4) == true (line 398)

    $actual = $this->carbon->minValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate0()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == false (line 446)
    // if ($year < 0) == false (line 457)
    // if ($year > 9999) == false (line 460)
    // if ($fixYear !== null) == false (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate1()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == false (line 446)
    // if ($year < 0) == false (line 457)
    // if ($year > 9999) == false (line 460)
    // if ($fixYear !== null) == true (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate2()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == false (line 446)
    // if ($year < 0) == false (line 457)
    // if ($year > 9999) == true (line 460)
    // if ($fixYear !== null) == false (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate3()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == false (line 446)
    // if ($year < 0) == false (line 457)
    // if ($year > 9999) == true (line 460)
    // if ($fixYear !== null) == true (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate4()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == false (line 446)
    // if ($year < 0) == true (line 457)
    // if ($fixYear !== null) == false (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate5()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == false (line 446)
    // if ($year < 0) == true (line 457)
    // if ($fixYear !== null) == true (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate6()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == true (line 446)
    // if ($year < 0) == false (line 457)
    // if ($year > 9999) == false (line 460)
    // if ($fixYear !== null) == false (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate7()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == true (line 446)
    // if ($year < 0) == false (line 457)
    // if ($year > 9999) == false (line 460)
    // if ($fixYear !== null) == true (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate8()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == true (line 446)
    // if ($year < 0) == false (line 457)
    // if ($year > 9999) == true (line 460)
    // if ($fixYear !== null) == false (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate9()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == true (line 446)
    // if ($year < 0) == false (line 457)
    // if ($year > 9999) == true (line 460)
    // if ($fixYear !== null) == true (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate10()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == true (line 446)
    // if ($year < 0) == true (line 457)
    // if ($fixYear !== null) == false (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate11()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($hour === null) == true (line 446)
    // if ($year < 0) == true (line 457)
    // if ($fixYear !== null) == true (line 467)

    $actual = $this->carbon->create($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSafe0()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($day !== null && $day > $instance->daysInMonth) == false (line 520)

    $actual = $this->carbon->createSafe($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Carbon\Exceptions\InvalidDateException
 */
public function testCreateSafe1()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($day !== null && $day > $instance->daysInMonth) == true (line 520)
    // throw new \Carbon\Exceptions\InvalidDateException('day', $day) -> exception (line 521)

    $actual = $this->carbon->createSafe($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSafe2()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (${$field} !== null && (!is_int(${$field}) || ${$field} < $range[0] || ${$field} > $range[1])) == false (line 513)
    // if ($day !== null && $day > $instance->daysInMonth) == false (line 520)

    $actual = $this->carbon->createSafe($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Carbon\Exceptions\InvalidDateException
 */
public function testCreateSafe3()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (${$field} !== null && (!is_int(${$field}) || ${$field} < $range[0] || ${$field} > $range[1])) == false (line 513)
    // if ($day !== null && $day > $instance->daysInMonth) == true (line 520)
    // throw new \Carbon\Exceptions\InvalidDateException('day', $day) -> exception (line 521)

    $actual = $this->carbon->createSafe($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Carbon\Exceptions\InvalidDateException
 */
public function testCreateSafe4()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (${$field} !== null && (!is_int(${$field}) || ${$field} < $range[0] || ${$field} > $range[1])) == true (line 513)
    // throw new \Carbon\Exceptions\InvalidDateException($field, ${$field}) -> exception (line 514)

    $actual = $this->carbon->createSafe($year, $month, $day, $hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateFromDate0()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->createFromDate($year, $month, $day, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateFromTime0()
{
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->createFromTime($hour, $minute, $second, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testCreateFromFormat0()
{
    $format = m::mock('UntypedParameter_format_');
    $time = m::mock('UntypedParameter_time_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tz !== null) == false (line 570)
    // if ($dt instanceof \DateTime) == false (line 578)
    // throw new \InvalidArgumentException(implode(PHP_EOL, $lastErrors['errors'])) -> exception (line 582)

    $actual = $this->carbon->createFromFormat($format, $time, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateFromFormat1()
{
    $format = m::mock('UntypedParameter_format_');
    $time = m::mock('UntypedParameter_time_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tz !== null) == false (line 570)
    // if ($dt instanceof \DateTime) == true (line 578)

    $actual = $this->carbon->createFromFormat($format, $time, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testCreateFromFormat2()
{
    $format = m::mock('UntypedParameter_format_');
    $time = m::mock('UntypedParameter_time_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tz !== null) == true (line 570)
    // if ($dt instanceof \DateTime) == false (line 578)
    // throw new \InvalidArgumentException(implode(PHP_EOL, $lastErrors['errors'])) -> exception (line 582)

    $actual = $this->carbon->createFromFormat($format, $time, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateFromFormat3()
{
    $format = m::mock('UntypedParameter_format_');
    $time = m::mock('UntypedParameter_time_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tz !== null) == true (line 570)
    // if ($dt instanceof \DateTime) == true (line 578)

    $actual = $this->carbon->createFromFormat($format, $time, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastErrors0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->getLastErrors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateFromTimestamp0()
{
    $timestamp = m::mock('UntypedParameter_timestamp_');
    $tz = m::mock('UntypedParameter_tz_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->createFromTimestamp($timestamp, $tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateFromTimestampUTC0()
{
    $timestamp = m::mock('UntypedParameter_timestamp_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->createFromTimestampUTC($timestamp);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCopy0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->copy();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == false (line 673)
    // Case $name === 'age' == false (line 676)
    // Case $name === 'quarter' == false (line 679)
    // Case $name === 'offset' == false (line 682)
    // Case $name === 'offsetHours' == false (line 685)
    // Case $name === 'dst' == false (line 688)
    // Case $name === 'local' == false (line 691)
    // Case $name === 'utc' == false (line 694)
    // Case $name === 'timezone' || $name === 'tz' == false (line 697)
    // Case $name === 'timezoneName' || $name === 'tzName' == false (line 700)
    // Default (line 703)
    // throw new \InvalidArgumentException(sprintf("Unknown getter '%s'", $name)) -> exception (line 704)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == false (line 673)
    // Case $name === 'age' == false (line 676)
    // Case $name === 'quarter' == false (line 679)
    // Case $name === 'offset' == false (line 682)
    // Case $name === 'offsetHours' == false (line 685)
    // Case $name === 'dst' == false (line 688)
    // Case $name === 'local' == false (line 691)
    // Case $name === 'utc' == false (line 694)
    // Case $name === 'timezone' || $name === 'tz' == false (line 697)
    // Case $name === 'timezoneName' || $name === 'tzName' == true (line 700)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == false (line 673)
    // Case $name === 'age' == false (line 676)
    // Case $name === 'quarter' == false (line 679)
    // Case $name === 'offset' == false (line 682)
    // Case $name === 'offsetHours' == false (line 685)
    // Case $name === 'dst' == false (line 688)
    // Case $name === 'local' == false (line 691)
    // Case $name === 'utc' == false (line 694)
    // Case $name === 'timezone' || $name === 'tz' == true (line 697)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == false (line 673)
    // Case $name === 'age' == false (line 676)
    // Case $name === 'quarter' == false (line 679)
    // Case $name === 'offset' == false (line 682)
    // Case $name === 'offsetHours' == false (line 685)
    // Case $name === 'dst' == false (line 688)
    // Case $name === 'local' == false (line 691)
    // Case $name === 'utc' == true (line 694)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == false (line 673)
    // Case $name === 'age' == false (line 676)
    // Case $name === 'quarter' == false (line 679)
    // Case $name === 'offset' == false (line 682)
    // Case $name === 'offsetHours' == false (line 685)
    // Case $name === 'dst' == false (line 688)
    // Case $name === 'local' == true (line 691)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get5()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == false (line 673)
    // Case $name === 'age' == false (line 676)
    // Case $name === 'quarter' == false (line 679)
    // Case $name === 'offset' == false (line 682)
    // Case $name === 'offsetHours' == false (line 685)
    // Case $name === 'dst' == true (line 688)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get6()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == false (line 673)
    // Case $name === 'age' == false (line 676)
    // Case $name === 'quarter' == false (line 679)
    // Case $name === 'offset' == false (line 682)
    // Case $name === 'offsetHours' == true (line 685)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get7()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == false (line 673)
    // Case $name === 'age' == false (line 676)
    // Case $name === 'quarter' == false (line 679)
    // Case $name === 'offset' == true (line 682)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get8()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == false (line 673)
    // Case $name === 'age' == false (line 676)
    // Case $name === 'quarter' == true (line 679)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get9()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == false (line 673)
    // Case $name === 'age' == true (line 676)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get10()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == false (line 656)
    // Case $name === 'weekOfMonth' == true (line 673)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get11()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 655)
    // Case array_key_exists($name, $formats = array('year' => 'Y', 'yearIso' => 'o', 'month' => 'n', 'day' => 'j', 'hour' => 'G', 'minute' => 'i', 'second' => 's', 'micro' => 'u', 'dayOfWeek' => 'w', 'dayOfYear' => 'z', 'weekOfYear' => 'W', 'daysInMonth' => 't', 'timestamp' => 'U')) == true (line 656)

    $actual = $this->carbon->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__isset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function test__set0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 736)
    // Case 'year' == false (line 737)
    // Case 'month' == false (line 738)
    // Case 'day' == false (line 739)
    // Case 'hour' == false (line 740)
    // Case 'minute' == false (line 741)
    // Case 'second' == false (line 742)
    // Case 'timestamp' == false (line 748)
    // Case 'timezone' == false (line 752)
    // Case 'tz' == false (line 753)
    // Default (line 757)
    // throw new \InvalidArgumentException(sprintf("Unknown setter '%s'", $name)) -> exception (line 758)

    $actual = $this->carbon->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set1()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 736)
    // Case 'year' == false (line 737)
    // Case 'month' == false (line 738)
    // Case 'day' == false (line 739)
    // Case 'hour' == false (line 740)
    // Case 'minute' == false (line 741)
    // Case 'second' == false (line 742)
    // Case 'timestamp' == false (line 748)
    // Case 'timezone' == false (line 752)
    // Case 'tz' == true (line 753)

    $actual = $this->carbon->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set2()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 736)
    // Case 'year' == false (line 737)
    // Case 'month' == false (line 738)
    // Case 'day' == false (line 739)
    // Case 'hour' == false (line 740)
    // Case 'minute' == false (line 741)
    // Case 'second' == false (line 742)
    // Case 'timestamp' == false (line 748)
    // Case 'timezone' == true (line 752)

    $actual = $this->carbon->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set3()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 736)
    // Case 'year' == false (line 737)
    // Case 'month' == false (line 738)
    // Case 'day' == false (line 739)
    // Case 'hour' == false (line 740)
    // Case 'minute' == false (line 741)
    // Case 'second' == false (line 742)
    // Case 'timestamp' == true (line 748)

    $actual = $this->carbon->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set4()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 736)
    // Case 'year' == false (line 737)
    // Case 'month' == false (line 738)
    // Case 'day' == false (line 739)
    // Case 'hour' == false (line 740)
    // Case 'minute' == false (line 741)
    // Case 'second' == true (line 742)

    $actual = $this->carbon->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set5()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 736)
    // Case 'year' == false (line 737)
    // Case 'month' == false (line 738)
    // Case 'day' == false (line 739)
    // Case 'hour' == false (line 740)
    // Case 'minute' == true (line 741)

    $actual = $this->carbon->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set6()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 736)
    // Case 'year' == false (line 737)
    // Case 'month' == false (line 738)
    // Case 'day' == false (line 739)
    // Case 'hour' == true (line 740)

    $actual = $this->carbon->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set7()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 736)
    // Case 'year' == false (line 737)
    // Case 'month' == false (line 738)
    // Case 'day' == true (line 739)

    $actual = $this->carbon->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set8()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 736)
    // Case 'year' == false (line 737)
    // Case 'month' == true (line 738)

    $actual = $this->carbon->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set9()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 736)
    // Case 'year' == true (line 737)

    $actual = $this->carbon->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testYear0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->year($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMonth0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->month($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDay0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->day($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHour0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->hour($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMinute0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->minute($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSecond0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->second($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDate0()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->setDate($year, $month, $day);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDateTime0()
{
    $year = m::mock('UntypedParameter_year_');
    $month = m::mock('UntypedParameter_month_');
    $day = m::mock('UntypedParameter_day_');
    $hour = m::mock('UntypedParameter_hour_');
    $minute = m::mock('UntypedParameter_minute_');
    $second = m::mock('UntypedParameter_second_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->setDateTime($year, $month, $day, $hour, $minute, $second);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTimeFromTimeString0()
{
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->setTimeFromTimeString($time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimestamp0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->timestamp($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimezone0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->timezone($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTz0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->tz($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTimezone0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->setTimezone($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDays0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->getDays();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetWeekStartsAt0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->getWeekStartsAt();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetWeekStartsAt0()
{
    $day = m::mock('UntypedParameter_day_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->setWeekStartsAt($day);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetWeekEndsAt0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->getWeekEndsAt();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetWeekEndsAt0()
{
    $day = m::mock('UntypedParameter_day_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->setWeekEndsAt($day);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetWeekendDays0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->getWeekendDays();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetWeekendDays0()
{
    $days = m::mock('UntypedParameter_days_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->setWeekendDays($days);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTestNow0()
{
    $testNow = m::mock('UntypedParameter_testNow_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->setTestNow($testNow);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTestNow0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->getTestNow();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasTestNow0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->hasTestNow();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRelativeKeywords0()
{
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/\\d{4}-\\d{1,2}-\\d{1,2}/', $time) !== 1) == false (line 1082)

    $actual = $this->carbon->hasRelativeKeywords($time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRelativeKeywords1()
{
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/\\d{4}-\\d{1,2}-\\d{1,2}/', $time) !== 1) == true (line 1082)

    $actual = $this->carbon->hasRelativeKeywords($time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRelativeKeywords2()
{
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/\\d{4}-\\d{1,2}-\\d{1,2}/', $time) !== 1) == true (line 1082)
    // if (stripos($time, $keyword) !== false) == false (line 1084)

    $actual = $this->carbon->hasRelativeKeywords($time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRelativeKeywords3()
{
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/\\d{4}-\\d{1,2}-\\d{1,2}/', $time) !== 1) == true (line 1082)
    // if (stripos($time, $keyword) !== false) == true (line 1084)

    $actual = $this->carbon->hasRelativeKeywords($time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTranslator0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->getTranslator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTranslator0()
{
    $translator = m::mock(\Symfony\Component\Translation\TranslatorInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->setTranslator($translator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLocale0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->getLocale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLocale0()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($filename = __DIR__ . '/Lang/' . $locale . '.php')) == false (line 1157)

    $actual = $this->carbon->setLocale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLocale1()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($filename = __DIR__ . '/Lang/' . $locale . '.php')) == true (line 1157)
    // if ($translator instanceof \Symfony\Component\Translation\Translator) == false (line 1161)

    $actual = $this->carbon->setLocale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLocale2()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($filename = __DIR__ . '/Lang/' . $locale . '.php')) == true (line 1157)
    // if ($translator instanceof \Symfony\Component\Translation\Translator) == true (line 1161)

    $actual = $this->carbon->setLocale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUtf80()
{
    $utf8 = m::mock('UntypedParameter_utf8_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->setUtf8($utf8);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatLocalized0()
{
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') == false (line 1198)

    $actual = $this->carbon->formatLocalized($format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatLocalized1()
{
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') == true (line 1198)

    $actual = $this->carbon->formatLocalized($format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResetToStringFormat0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->resetToStringFormat();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetToStringFormat0()
{
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->setToStringFormat($format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToDateString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toDateString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToFormattedDateString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toFormattedDateString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToTimeString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toTimeString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToDateTimeString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toDateTimeString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToDayDateTimeString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toDayDateTimeString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToAtomString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toAtomString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToCookieString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toCookieString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToIso8601String0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toIso8601String();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToRfc822String0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toRfc822String();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToRfc850String0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toRfc850String();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToRfc1036String0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toRfc1036String();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToRfc1123String0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toRfc1123String();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToRfc2822String0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toRfc2822String();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToRfc3339String0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toRfc3339String();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToRssString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toRssString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToW3cString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->toW3cString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEq0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->eq($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEqualTo0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->equalTo($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNe0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->ne($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNotEqualTo0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->notEqualTo($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGt0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->gt($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGreaterThan0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->greaterThan($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGte0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->gte($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGreaterThanOrEqualTo0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->greaterThanOrEqualTo($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLt0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->lt($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLessThan0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->lessThan($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLte0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->lte($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLessThanOrEqualTo0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->lessThanOrEqualTo($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBetween0()
{
    $dt1 = m::mock(\Carbon\Carbon::class);
    $dt2 = m::mock(\Carbon\Carbon::class);
    $equal = m::mock('UntypedParameter_equal_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dt1->gt($dt2)) == false (line 1566)
    // if ($equal) == false (line 1572)

    $actual = $this->carbon->between($dt1, $dt2, $equal);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBetween1()
{
    $dt1 = m::mock(\Carbon\Carbon::class);
    $dt2 = m::mock(\Carbon\Carbon::class);
    $equal = m::mock('UntypedParameter_equal_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dt1->gt($dt2)) == false (line 1566)
    // if ($equal) == true (line 1572)

    $actual = $this->carbon->between($dt1, $dt2, $equal);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBetween2()
{
    $dt1 = m::mock(\Carbon\Carbon::class);
    $dt2 = m::mock(\Carbon\Carbon::class);
    $equal = m::mock('UntypedParameter_equal_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dt1->gt($dt2)) == true (line 1566)
    // if ($equal) == false (line 1572)

    $actual = $this->carbon->between($dt1, $dt2, $equal);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBetween3()
{
    $dt1 = m::mock(\Carbon\Carbon::class);
    $dt2 = m::mock(\Carbon\Carbon::class);
    $equal = m::mock('UntypedParameter_equal_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dt1->gt($dt2)) == true (line 1566)
    // if ($equal) == true (line 1572)

    $actual = $this->carbon->between($dt1, $dt2, $equal);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClosest0()
{
    $dt1 = m::mock(\Carbon\Carbon::class);
    $dt2 = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->closest($dt1, $dt2);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFarthest0()
{
    $dt1 = m::mock(\Carbon\Carbon::class);
    $dt2 = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->farthest($dt1, $dt2);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMin0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->min($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMinimum0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->minimum($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMax0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->max($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMaximum0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->maximum($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsWeekday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isWeekday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsWeekend0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isWeekend();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsYesterday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isYesterday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsToday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isToday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsTomorrow0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isTomorrow();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsNextWeek0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isNextWeek();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsLastWeek0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isLastWeek();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsNextMonth0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isNextMonth();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsLastMonth0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isLastMonth();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsNextYear0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isNextYear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsLastYear0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isLastYear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFuture0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isFuture();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsPast0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isPast();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsLeapYear0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isLeapYear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsLongYear0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isLongYear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsSameAs0()
{
    $format = m::mock('UntypedParameter_format_');
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->isSameAs($format, $dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsCurrentYear0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isCurrentYear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsSameYear0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->isSameYear($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsCurrentMonth0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isCurrentMonth();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsSameMonth0()
{
    $dt = m::mock(\Carbon\Carbon::class);
    $ofSameYear = m::mock('UntypedParameter_ofSameYear_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->isSameMonth($dt, $ofSameYear);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsSameDay0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->isSameDay($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsSunday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isSunday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsMonday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isMonday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsTuesday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isTuesday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsWednesday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isWednesday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsThursday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isThursday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFriday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isFriday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsSaturday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->isSaturday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddYears0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addYears($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddYear0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addYear($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubYear0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subYear($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubYears0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subYears($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddQuarters0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addQuarters($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddQuarter0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addQuarter($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubQuarter0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subQuarter($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubQuarters0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subQuarters($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCenturies0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addCenturies($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCentury0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addCentury($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubCentury0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subCentury($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubCenturies0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subCenturies($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMonths0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::shouldOverflowMonths()) == false (line 2118)

    $actual = $this->carbon->addMonths($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMonths1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::shouldOverflowMonths()) == true (line 2118)

    $actual = $this->carbon->addMonths($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMonth0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addMonth($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubMonth0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subMonth($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubMonths0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subMonths($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMonthsWithOverflow0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addMonthsWithOverflow($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMonthWithOverflow0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addMonthWithOverflow($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubMonthWithOverflow0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subMonthWithOverflow($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubMonthsWithOverflow0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subMonthsWithOverflow($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMonthsNoOverflow0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($day !== $this->day) == false (line 2224)

    $actual = $this->carbon->addMonthsNoOverflow($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMonthsNoOverflow1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($day !== $this->day) == true (line 2224)

    $actual = $this->carbon->addMonthsNoOverflow($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMonthNoOverflow0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addMonthNoOverflow($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubMonthNoOverflow0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subMonthNoOverflow($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubMonthsNoOverflow0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subMonthsNoOverflow($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddDays0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addDays($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddDay0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addDay($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubDay0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subDay($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubDays0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subDays($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWeekdays0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addWeekdays($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWeekday0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addWeekday($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubWeekday0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subWeekday($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubWeekdays0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subWeekdays($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWeeks0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addWeeks($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWeek0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addWeek($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubWeek0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subWeek($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubWeeks0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subWeeks($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHours0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addHours($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHour0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addHour($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubHour0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subHour($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubHours0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subHours($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMinutes0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addMinutes($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMinute0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addMinute($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubMinute0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subMinute($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubMinutes0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subMinutes($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSeconds0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addSeconds($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSecond0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->addSecond($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubSecond0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subSecond($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubSeconds0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->subSeconds($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInYears0()
{
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInYears($dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInMonths0()
{
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInMonths($dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInWeeks0()
{
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInWeeks($dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInDays0()
{
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInDays($dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInDaysFiltered0()
{
    $callback = m::mock(\Closure::class);
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInDaysFiltered($callback, $dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInHoursFiltered0()
{
    $callback = m::mock(\Closure::class);
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInHoursFiltered($callback, $dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffFiltered0()
{
    $ci = m::mock(\Carbon\CarbonInterval::class);
    $callback = m::mock(\Closure::class);
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($end < $start) == false (line 2671)

    $actual = $this->carbon->diffFiltered($ci, $callback, $dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffFiltered1()
{
    $ci = m::mock(\Carbon\CarbonInterval::class);
    $callback = m::mock(\Closure::class);
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($end < $start) == true (line 2671)

    $actual = $this->carbon->diffFiltered($ci, $callback, $dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInWeekdays0()
{
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInWeekdays($dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInWeekendDays0()
{
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInWeekendDays($dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInHours0()
{
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInHours($dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInMinutes0()
{
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInMinutes($dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffInSeconds0()
{
    $dt = m::mock(\Carbon\Carbon::class);
    $abs = m::mock('UntypedParameter_abs_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->diffInSeconds($dt, $abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSecondsSinceMidnight0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->secondsSinceMidnight();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSecondsUntilEndOfDay0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->secondsUntilEndOfDay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans0()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans1()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans2()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans3()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans4()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans5()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans6()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans7()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans8()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans9()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans10()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans11()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans12()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans13()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans14()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans15()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans16()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans17()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans18()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans19()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans20()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans21()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans22()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans23()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans24()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans25()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans26()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans27()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans28()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans29()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans30()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans31()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans32()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans33()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans34()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans35()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans36()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans37()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans38()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans39()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans40()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans41()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == false (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans42()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans43()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans44()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans45()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans46()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans47()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == false (line 2840)
    // Default (line 2845)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans48()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans49()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans50()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans51()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans52()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans53()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == false (line 2835)
    // Case $diffInterval->i > 0 == true (line 2840)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans54()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans55()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans56()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans57()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans58()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans59()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == false (line 2825)
    // Case $diffInterval->h > 0 == true (line 2835)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans60()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans61()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans62()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans63()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans64()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans65()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == false (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans66()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans67()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans68()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans69()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans70()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans71()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == false (line 2820)
    // Case $diffInterval->d > 0 == true (line 2825)
    // if ($count >= static::DAYS_PER_WEEK) == true (line 2829)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans72()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans73()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans74()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans75()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans76()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans77()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == false (line 2815)
    // Case $diffInterval->m > 0 == true (line 2820)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans78()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans79()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans80()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == false (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans81()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == false (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans82()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == false (line 2857)
    // if ($tryKeyExists !== static::translator()->transChoice($tryKeyExists, $count)) == true (line 2867)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffForHumans83()
{
    $other = m::mock(\Carbon\Carbon::class);
    $absolute = m::mock('UntypedParameter_absolute_');
    $short = m::mock('UntypedParameter_short_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isNow) == true (line 2808)
    // switch (true) (line 2814)
    // Case $diffInterval->y > 0 == true (line 2815)
    // if ($count === 0) == true (line 2851)
    // if ($absolute) == true (line 2857)

    $actual = $this->carbon->diffForHumans($other, $absolute, $short);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartOfDay0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->startOfDay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndOfDay0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->endOfDay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartOfMonth0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->startOfMonth();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndOfMonth0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->endOfMonth();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartOfQuarter0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->startOfQuarter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndOfQuarter0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->endOfQuarter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartOfYear0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->startOfYear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndOfYear0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->endOfYear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartOfDecade0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->startOfDecade();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndOfDecade0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->endOfDecade();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartOfCentury0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->startOfCentury();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndOfCentury0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->endOfCentury();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartOfWeek0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->dayOfWeek !== static::$weekStartsAt) == false (line 3015)

    $actual = $this->carbon->startOfWeek();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartOfWeek1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->dayOfWeek !== static::$weekStartsAt) == true (line 3015)
    // while ($this->dayOfWeek !== static::$weekStartsAt) == false (line 3015)

    $actual = $this->carbon->startOfWeek();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndOfWeek0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->dayOfWeek !== static::$weekEndsAt) == false (line 3029)

    $actual = $this->carbon->endOfWeek();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndOfWeek1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->dayOfWeek !== static::$weekEndsAt) == true (line 3029)
    // while ($this->dayOfWeek !== static::$weekEndsAt) == false (line 3029)

    $actual = $this->carbon->endOfWeek();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNext0()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dayOfWeek === null) == false (line 3048)

    $actual = $this->carbon->next($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNext1()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dayOfWeek === null) == true (line 3048)

    $actual = $this->carbon->next($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNextWeekday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->nextWeekday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreviousWeekday0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->previousWeekday();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNextWeekendDay0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->nextWeekendDay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreviousWeekendDay0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->previousWeekendDay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrevious0()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dayOfWeek === null) == false (line 3126)

    $actual = $this->carbon->previous($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrevious1()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dayOfWeek === null) == true (line 3126)

    $actual = $this->carbon->previous($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOfMonth0()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dayOfWeek === null) == false (line 3147)

    $actual = $this->carbon->firstOfMonth($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOfMonth1()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dayOfWeek === null) == true (line 3147)

    $actual = $this->carbon->firstOfMonth($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastOfMonth0()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dayOfWeek === null) == false (line 3168)

    $actual = $this->carbon->lastOfMonth($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastOfMonth1()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dayOfWeek === null) == true (line 3168)

    $actual = $this->carbon->lastOfMonth($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNthOfMonth0()
{
    $nth = m::mock('UntypedParameter_nth_');
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->nthOfMonth($nth, $dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOfQuarter0()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->firstOfQuarter($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastOfQuarter0()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->lastOfQuarter($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNthOfQuarter0()
{
    $nth = m::mock('UntypedParameter_nth_');
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->nthOfQuarter($nth, $dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOfYear0()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->firstOfYear($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastOfYear0()
{
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->lastOfYear($dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNthOfYear0()
{
    $nth = m::mock('UntypedParameter_nth_');
    $dayOfWeek = m::mock('UntypedParameter_dayOfWeek_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->nthOfYear($nth, $dayOfWeek);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAverage0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->average($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsBirthday0()
{
    $dt = m::mock(\Carbon\Carbon::class);

    // TODO: Your mock expectations here

    $actual = $this->carbon->isBirthday($dt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModify0()
{
    $modify = m::mock('UntypedParameter_modify_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->local) == false (line 3329)

    $actual = $this->carbon->modify($modify);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModify1()
{
    $modify = m::mock('UntypedParameter_modify_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->local) == true (line 3329)

    $actual = $this->carbon->modify($modify);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbon->serialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromSerialized0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$instance instanceof static) == false (line 3364)

    $actual = $this->carbon->fromSerialized($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testFromSerialized1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$instance instanceof static) == true (line 3364)
    // throw new \InvalidArgumentException('Invalid serialized value.') -> exception (line 3365)

    $actual = $this->carbon->fromSerialized($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
