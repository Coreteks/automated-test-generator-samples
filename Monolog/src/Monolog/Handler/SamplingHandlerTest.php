<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\SamplingHandler;

class SamplingHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_handler = null;
/**
* @var mixed
*/
protected $_factor = null;
/**
* @var \Monolog\Handler\SamplingHandler
*/
protected $samplingHandler;

public function setUp()
{
    parent::setUp();

    $this->_handler = null;
    $this->_factor = null;
    $this->samplingHandler = new \Monolog\Handler\SamplingHandler($this->_handler, $this->_factor);
}

public function testIsHandling0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->samplingHandler->isHandling($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isHandling($record) && mt_rand(1, $this->factor) === 1) == false (line 64)

    $actual = $this->samplingHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isHandling($record) && mt_rand(1, $this->factor) === 1) == true (line 64)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 66)
    // if ($this->processors) == false (line 73)

    $actual = $this->samplingHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isHandling($record) && mt_rand(1, $this->factor) === 1) == true (line 64)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 66)
    // if ($this->processors) == true (line 73)

    $actual = $this->samplingHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isHandling($record) && mt_rand(1, $this->factor) === 1) == true (line 64)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 66)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 68)
    // if ($this->processors) == false (line 73)

    $actual = $this->samplingHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isHandling($record) && mt_rand(1, $this->factor) === 1) == true (line 64)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 66)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 68)
    // if ($this->processors) == true (line 73)

    $actual = $this->samplingHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testHandle5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isHandling($record) && mt_rand(1, $this->factor) === 1) == true (line 64)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 66)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 68)
    // throw new \RuntimeException("The factory callable should return a HandlerInterface") -> exception (line 69)

    $actual = $this->samplingHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
