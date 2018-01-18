<?php

namespace tests\Illuminate\Queue\Console;

use Illuminate\Queue\Console\WorkCommand;
use Illuminate\Queue\Worker;
use Mockery as m;

class WorkCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_worker;
/**
* @var \Illuminate\Queue\Console\WorkCommand
*/
protected $workCommand;

public function setUp()
{
    parent::setUp();

    $this->_worker = m::mock(\Illuminate\Queue\Worker::class);
    $this->workCommand = new \Illuminate\Queue\Console\WorkCommand($this->_worker);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->downForMaintenance() && $this->option('once')) == false (line 67)

    $actual = $this->workCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->downForMaintenance() && $this->option('once')) == true (line 67)

    $actual = $this->workCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
