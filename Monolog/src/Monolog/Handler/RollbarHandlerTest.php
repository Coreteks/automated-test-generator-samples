<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\RollbarHandler;
use RollbarNotifier;

class RollbarHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_rollbarNotifier;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\RollbarHandler
*/
protected $rollbarHandler;

public function setUp()
{
    parent::setUp();

    $this->_rollbarNotifier = m::mock(\RollbarNotifier::class);
    $this->_level = null;
    $this->_bubble = null;
    $this->rollbarHandler = new \Monolog\Handler\RollbarHandler($this->_rollbarNotifier, $this->_level, $this->_bubble);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasRecords) == false (line 119)

    $actual = $this->rollbarHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasRecords) == true (line 119)

    $actual = $this->rollbarHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->rollbarHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
