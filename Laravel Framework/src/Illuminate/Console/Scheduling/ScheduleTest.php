<?php

namespace tests\Illuminate\Console\Scheduling;

use Illuminate\Console\Scheduling\Schedule;
use Mockery as m;

class ScheduleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Console\Scheduling\Schedule
*/
protected $schedule;

public function setUp()
{
    parent::setUp();

    $this->schedule = new \Illuminate\Console\Scheduling\Schedule();
}

public function testCall0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->schedule->call($callback, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCommand0()
{
    $command = m::mock('UntypedParameter_command_');
    $parameters = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (class_exists($command)) == false (line 65)

    $actual = $this->schedule->command($command, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCommand1()
{
    $command = m::mock('UntypedParameter_command_');
    $parameters = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (class_exists($command)) == true (line 65)

    $actual = $this->schedule->command($command, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJob0()
{
    $job = m::mock('UntypedParameter_job_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->schedule->job($job, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExec0()
{
    $command = m::mock('UntypedParameter_command_');
    $parameters = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($parameters)) == false (line 103)

    $actual = $this->schedule->exec($command, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExec1()
{
    $command = m::mock('UntypedParameter_command_');
    $parameters = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($parameters)) == true (line 103)

    $actual = $this->schedule->exec($command, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDueEvents0()
{
    $app = m::mock('UntypedParameter_app_');

    // TODO: Your mock expectations here

    $actual = $this->schedule->dueEvents($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvents0()
{
    // TODO: Your mock expectations here

    $actual = $this->schedule->events();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
