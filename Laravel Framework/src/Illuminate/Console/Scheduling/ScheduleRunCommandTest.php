<?php

namespace tests\Illuminate\Console\Scheduling;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Console\Scheduling\ScheduleRunCommand;
use Mockery as m;

class ScheduleRunCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_schedule;
/**
* @var \Illuminate\Console\Scheduling\ScheduleRunCommand
*/
protected $scheduleRunCommand;

public function setUp()
{
    parent::setUp();

    $this->_schedule = m::mock(\Illuminate\Console\Scheduling\Schedule::class);
    $this->scheduleRunCommand = new \Illuminate\Console\Scheduling\ScheduleRunCommand($this->_schedule);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$eventsRan) == false (line 64)

    $actual = $this->scheduleRunCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$eventsRan) == true (line 64)

    $actual = $this->scheduleRunCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->filtersPass($this->laravel)) == false (line 53)
    // if (!$eventsRan) == false (line 64)

    $actual = $this->scheduleRunCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->filtersPass($this->laravel)) == false (line 53)
    // if (!$eventsRan) == true (line 64)

    $actual = $this->scheduleRunCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->filtersPass($this->laravel)) == true (line 53)
    // if (!$eventsRan) == false (line 64)

    $actual = $this->scheduleRunCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->filtersPass($this->laravel)) == true (line 53)
    // if (!$eventsRan) == true (line 64)

    $actual = $this->scheduleRunCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
