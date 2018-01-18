<?php

namespace tests\Symfony\Bridge\Monolog\Handler;

use Mockery as m;
use Symfony\Bridge\Monolog\Handler\ConsoleHandler;
use Symfony\Component\Console\Output\OutputInterface;

class ConsoleHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_output;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var array
*/
protected $_verbosityLevelMap = [];
/**
* @var \Symfony\Bridge\Monolog\Handler\ConsoleHandler
*/
protected $consoleHandler;

public function setUp()
{
    parent::setUp();

    $this->_output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);
    $this->_bubble = null;
    $this->_verbosityLevelMap = [];
    $this->consoleHandler = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler($this->_output, $this->_bubble, $this->_verbosityLevelMap);
}

public function testIsHandling0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->consoleHandler->isHandling($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->consoleHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetOutput0()
{
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->consoleHandler->setOutput($output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->consoleHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnCommand0()
{
    $event = m::mock(\Symfony\Component\Console\Event\ConsoleCommandEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($output instanceof \Symfony\Component\Console\Output\ConsoleOutputInterface) == false (line 114)

    $actual = $this->consoleHandler->onCommand($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnCommand1()
{
    $event = m::mock(\Symfony\Component\Console\Event\ConsoleCommandEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($output instanceof \Symfony\Component\Console\Output\ConsoleOutputInterface) == true (line 114)

    $actual = $this->consoleHandler->onCommand($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnTerminate0()
{
    $event = m::mock(\Symfony\Component\Console\Event\ConsoleTerminateEvent::class);

    // TODO: Your mock expectations here

    $actual = $this->consoleHandler->onTerminate($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSubscribedEvents0()
{
    // TODO: Your mock expectations here

    $actual = $this->consoleHandler->getSubscribedEvents();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
