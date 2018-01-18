<?php

namespace tests\Illuminate\Console\Scheduling;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Console\Scheduling\ScheduleFinishCommand;
use Mockery as m;

class ScheduleFinishCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_schedule;
/**
* @var \Illuminate\Console\Scheduling\ScheduleFinishCommand
*/
protected $scheduleFinishCommand;

public function setUp()
{
    parent::setUp();

    $this->_schedule = m::mock(\Illuminate\Console\Scheduling\Schedule::class);
    $this->scheduleFinishCommand = new \Illuminate\Console\Scheduling\ScheduleFinishCommand($this->_schedule);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->scheduleFinishCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
