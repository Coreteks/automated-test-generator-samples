<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\ProcessHandler;

class ProcessHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_command = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var mixed
*/
protected $_cwd = null;
/**
* @var \Monolog\Handler\ProcessHandler
*/
protected $processHandler;

public function setUp()
{
    parent::setUp();

    $this->_command = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_cwd = null;
    $this->processHandler = new \Monolog\Handler\ProcessHandler($this->_command, $this->_level, $this->_bubble, $this->_cwd);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($this->process)) == false (line 194)

    $actual = $this->processHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($this->process)) == true (line 194)

    $actual = $this->processHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($this->process)) == true (line 194)

    $actual = $this->processHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
