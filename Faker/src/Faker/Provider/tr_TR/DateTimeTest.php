<?php

namespace tests\Faker\Provider\tr_TR;

use Faker\Provider\tr_TR\DateTime;
use Mockery as m;

class DateTimeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\tr_TR\DateTime
*/
protected $dateTime;

public function setUp()
{
    parent::setUp();

    $this->dateTime = new \Faker\Provider\tr_TR\DateTime();
}

public function testAmPm0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->amPm($max);
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

public function testMonthName0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->monthName($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
