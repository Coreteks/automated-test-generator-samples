<?php

namespace tests\Illuminate\Support\Testing\Fakes;

use Illuminate\Support\Testing\Fakes\BusFake;
use Mockery as m;

class BusFakeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Testing\Fakes\BusFake
*/
protected $busFake;

public function setUp()
{
    parent::setUp();

    $this->busFake = new \Illuminate\Support\Testing\Fakes\BusFake();
}

public function testAssertDispatched0()
{
    $command = m::mock('UntypedParameter_command_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_numeric($callback)) == false (line 26)

    $actual = $this->busFake->assertDispatched($command, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertDispatched1()
{
    $command = m::mock('UntypedParameter_command_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_numeric($callback)) == true (line 26)

    $actual = $this->busFake->assertDispatched($command, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNotDispatched0()
{
    $command = m::mock('UntypedParameter_command_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->busFake->assertNotDispatched($command, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatched0()
{
    $command = m::mock('UntypedParameter_command_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasDispatched($command)) == false (line 75)

    $actual = $this->busFake->dispatched($command, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatched1()
{
    $command = m::mock('UntypedParameter_command_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasDispatched($command)) == true (line 75)

    $actual = $this->busFake->dispatched($command, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasDispatched0()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    $actual = $this->busFake->hasDispatched($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch0()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    $actual = $this->busFake->dispatch($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatchNow0()
{
    $command = m::mock('UntypedParameter_command_');
    $handler = m::mock('UntypedParameter_handler_');

    // TODO: Your mock expectations here

    $actual = $this->busFake->dispatchNow($command, $handler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPipeThrough0()
{
    $pipes = [];

    // TODO: Your mock expectations here

    $actual = $this->busFake->pipeThrough($pipes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
