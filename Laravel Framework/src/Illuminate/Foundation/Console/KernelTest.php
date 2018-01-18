<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Console\Kernel;
use Mockery as m;

class KernelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_app;
/**
* @var \Mockery\MockInterface
*/
protected $_events;
/**
* @var \Illuminate\Foundation\Console\Kernel
*/
protected $kernel;

public function setUp()
{
    parent::setUp();

    $this->_app = m::mock(\Illuminate\Contracts\Foundation\Application::class);
    $this->_events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);
    $this->kernel = new \Illuminate\Foundation\Console\Kernel($this->_app, $this->_events);
}

/**
 * @expectedException \Exception
 */
public function testHandle0()
{
    $input = m::mock('UntypedParameter_input_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $input = m::mock('UntypedParameter_input_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $input = m::mock('UntypedParameter_input_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle3()
{
    $input = m::mock('UntypedParameter_input_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    $input = m::mock('UntypedParameter_input_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle5()
{
    $input = m::mock('UntypedParameter_input_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle6()
{
    $input = m::mock('UntypedParameter_input_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTerminate0()
{
    $input = m::mock('UntypedParameter_input_');
    $status = m::mock('UntypedParameter_status_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->terminate($input, $status);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCommand0()
{
    $signature = m::mock('UntypedParameter_signature_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->kernel->command($signature, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterCommand0()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->registerCommand($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall0()
{
    $command = m::mock('UntypedParameter_command_');
    $parameters = [];
    $outputBuffer = m::mock('UntypedParameter_outputBuffer_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->call($command, $parameters, $outputBuffer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue0()
{
    $command = m::mock('UntypedParameter_command_');
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->kernel->queue($command, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll0()
{
    // TODO: Your mock expectations here

    $actual = $this->kernel->all();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOutput0()
{
    // TODO: Your mock expectations here

    $actual = $this->kernel->output();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->app->hasBeenBootstrapped()) == false (line 295)
    // if (!$this->commandsLoaded) == false (line 301)

    $actual = $this->kernel->bootstrap();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->app->hasBeenBootstrapped()) == false (line 295)
    // if (!$this->commandsLoaded) == true (line 301)

    $actual = $this->kernel->bootstrap();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->app->hasBeenBootstrapped()) == true (line 295)
    // if (!$this->commandsLoaded) == false (line 301)

    $actual = $this->kernel->bootstrap();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->app->hasBeenBootstrapped()) == true (line 295)
    // if (!$this->commandsLoaded) == true (line 301)

    $actual = $this->kernel->bootstrap();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetArtisan0()
{
    $artisan = m::mock('UntypedParameter_artisan_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->setArtisan($artisan);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
