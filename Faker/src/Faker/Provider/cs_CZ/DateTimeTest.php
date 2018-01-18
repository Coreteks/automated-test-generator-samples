<?php

namespace tests\Faker\Provider\cs_CZ;

use Faker\Provider\cs_CZ\DateTime;
use Mockery as m;

class DateTimeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\cs_CZ\DateTime
*/
protected $dateTime;

public function setUp()
{
    parent::setUp();

    $this->dateTime = new \Faker\Provider\cs_CZ\DateTime();
}

public function testMonthName0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->monthName($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMonthNameGenitive0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->monthNameGenitive($max);
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

public function testDayOfMonth0()
{
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->dateTime->dayOfMonth($max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormattedDate0()
{
    // TODO: Your mock expectations here

    $actual = $this->dateTime->formattedDate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
