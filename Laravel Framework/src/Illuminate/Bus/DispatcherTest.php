<?php

namespace tests\Illuminate\Bus;

use Closure;
use Illuminate\Bus\Dispatcher;
use Illuminate\Contracts\Container\Container;
use Mockery as m;

class DispatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Mockery\MockInterface
*/
protected $_queueResolver;
/**
* @var \Illuminate\Bus\Dispatcher
*/
protected $dispatcher;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Contracts\Container\Container::class);
    $this->_queueResolver = m::mock(\Closure::class);
    $this->dispatcher = new \Illuminate\Bus\Dispatcher($this->_container, $this->_queueResolver);
}

public function testDispatch0()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->queueResolver && $this->commandShouldBeQueued($command)) == false (line 72)

    $actual = $this->dispatcher->dispatch($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch1()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->queueResolver && $this->commandShouldBeQueued($command)) == true (line 72)

    $actual = $this->dispatcher->dispatch($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatchNow0()
{
    $command = m::mock('UntypedParameter_command_');
    $handler = m::mock('UntypedParameter_handler_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler || ($handler = $this->getCommandHandler($command))) == false (line 88)

    $actual = $this->dispatcher->dispatchNow($command, $handler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatchNow1()
{
    $command = m::mock('UntypedParameter_command_');
    $handler = m::mock('UntypedParameter_handler_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler || ($handler = $this->getCommandHandler($command))) == true (line 88)

    $actual = $this->dispatcher->dispatchNow($command, $handler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasCommandHandler0()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->hasCommandHandler($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCommandHandler0()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasCommandHandler($command)) == false (line 120)

    $actual = $this->dispatcher->getCommandHandler($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCommandHandler1()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasCommandHandler($command)) == true (line 120)

    $actual = $this->dispatcher->getCommandHandler($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatchToQueue0()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$queue instanceof \Illuminate\Contracts\Queue\Queue) == false (line 152)
    // if (method_exists($command, 'queue')) == false (line 156)

    $actual = $this->dispatcher->dispatchToQueue($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatchToQueue1()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$queue instanceof \Illuminate\Contracts\Queue\Queue) == false (line 152)
    // if (method_exists($command, 'queue')) == true (line 156)

    $actual = $this->dispatcher->dispatchToQueue($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testDispatchToQueue2()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$queue instanceof \Illuminate\Contracts\Queue\Queue) == true (line 152)
    // throw new \RuntimeException('Queue resolver did not return a Queue implementation.') -> exception (line 153)

    $actual = $this->dispatcher->dispatchToQueue($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPipeThrough0()
{
    $pipes = [];

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->pipeThrough($pipes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMap0()
{
    $map = [];

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->map($map);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
