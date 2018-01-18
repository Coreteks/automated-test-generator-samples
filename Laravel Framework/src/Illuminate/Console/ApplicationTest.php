<?php

namespace tests\Illuminate\Console;

use Illuminate\Console\Application;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Mockery as m;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_laravel;
/**
* @var \Mockery\MockInterface
*/
protected $_events;
/**
* @var mixed
*/
protected $_version = null;
/**
* @var \Illuminate\Console\Application
*/
protected $application;

public function setUp()
{
    parent::setUp();

    $this->_laravel = m::mock(\Illuminate\Contracts\Container\Container::class);
    $this->_events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);
    $this->_version = null;
    $this->application = new \Illuminate\Console\Application($this->_laravel, $this->_events, $this->_version);
}

public function testRun0()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->application->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPhpBinary0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->phpBinary();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArtisanBinary0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->artisanBinary();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatCommandString0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->application->formatCommandString($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStarting0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->application->starting($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForgetBootstrappers0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->forgetBootstrappers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall0()
{
    $command = m::mock('UntypedParameter_command_');
    $parameters = [];
    $outputBuffer = m::mock('UntypedParameter_outputBuffer_');

    // TODO: Your mock expectations here

    $actual = $this->application->call($command, $parameters, $outputBuffer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOutput0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->output();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $command = m::mock(\Symfony\Component\Console\Command\Command::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($command instanceof \Illuminate\Console\Command) == false (line 202)

    $actual = $this->application->add($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd1()
{
    $command = m::mock(\Symfony\Component\Console\Command\Command::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($command instanceof \Illuminate\Console\Command) == true (line 202)

    $actual = $this->application->add($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve0()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    $actual = $this->application->resolve($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolveCommands0()
{
    $commands = m::mock('UntypedParameter_commands_');

    // TODO: Your mock expectations here

    $actual = $this->application->resolveCommands($commands);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolveCommands1()
{
    $commands = m::mock('UntypedParameter_commands_');

    // TODO: Your mock expectations here

    $actual = $this->application->resolveCommands($commands);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLaravel0()
{
    // TODO: Your mock expectations here

    $actual = $this->application->getLaravel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
