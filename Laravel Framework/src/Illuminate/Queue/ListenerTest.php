<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\Listener;
use Mockery as m;

class ListenerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_commandPath = null;
/**
* @var \Illuminate\Queue\Listener
*/
protected $listener;

public function setUp()
{
    parent::setUp();

    $this->_commandPath = null;
    $this->listener = new \Illuminate\Queue\Listener($this->_commandPath);
}

public function testListen0()
{
    $connection = m::mock('UntypedParameter_connection_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = m::mock(\Illuminate\Queue\ListenerOptions::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (true) == false (line 114)

    $actual = $this->listener->listen($connection, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListen1()
{
    $connection = m::mock('UntypedParameter_connection_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = m::mock(\Illuminate\Queue\ListenerOptions::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (true) == true (line 114)
    // while (true) == false (line 114)

    $actual = $this->listener->listen($connection, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeProcess0()
{
    $connection = m::mock('UntypedParameter_connection_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = m::mock(\Illuminate\Queue\ListenerOptions::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options->environment)) == false (line 134)

    $actual = $this->listener->makeProcess($connection, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeProcess1()
{
    $connection = m::mock('UntypedParameter_connection_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = m::mock(\Illuminate\Queue\ListenerOptions::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options->environment)) == true (line 134)

    $actual = $this->listener->makeProcess($connection, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunProcess0()
{
    $process = m::mock(\Symfony\Component\Process\Process::class);
    $memory = m::mock('UntypedParameter_memory_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->memoryExceeded($memory)) == false (line 198)

    $actual = $this->listener->runProcess($process, $memory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunProcess1()
{
    $process = m::mock(\Symfony\Component\Process\Process::class);
    $memory = m::mock('UntypedParameter_memory_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->memoryExceeded($memory)) == true (line 198)

    $actual = $this->listener->runProcess($process, $memory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMemoryExceeded0()
{
    $memoryLimit = m::mock('UntypedParameter_memoryLimit_');

    // TODO: Your mock expectations here

    $actual = $this->listener->memoryExceeded($memoryLimit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStop0()
{
    // TODO: Your mock expectations here

    $actual = $this->listener->stop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetOutputHandler0()
{
    $outputHandler = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->listener->setOutputHandler($outputHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
