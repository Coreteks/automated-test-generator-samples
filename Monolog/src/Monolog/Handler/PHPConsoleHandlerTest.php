<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\PHPConsoleHandler;
use PhpConsole\Connector;

class PHPConsoleHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_options = [];
/**
* @var \Mockery\MockInterface
*/
protected $_connector;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\PHPConsoleHandler
*/
protected $pHPConsoleHandler;

public function setUp()
{
    parent::setUp();

    $this->_options = [];
    $this->_connector = m::mock(\PhpConsole\Connector::class);
    $this->_level = null;
    $this->_bubble = null;
    $this->pHPConsoleHandler = new \Monolog\Handler\PHPConsoleHandler($this->_options, $this->_connector, $this->_level, $this->_bubble);
}

public function testGetConnector0()
{
    // TODO: Your mock expectations here

    $actual = $this->pHPConsoleHandler->getConnector();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOptions0()
{
    // TODO: Your mock expectations here

    $actual = $this->pHPConsoleHandler->getOptions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['enabled'] && $this->connector->isActiveClient()) == false (line 162)

    $actual = $this->pHPConsoleHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['enabled'] && $this->connector->isActiveClient()) == true (line 162)

    $actual = $this->pHPConsoleHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
