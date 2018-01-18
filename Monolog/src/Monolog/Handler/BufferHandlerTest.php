<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\BufferHandler;
use Monolog\Handler\HandlerInterface;

class BufferHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_handler;
/**
* @var mixed
*/
protected $_bufferLimit = null;
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
protected $_flushOnOverflow = null;
/**
* @var \Monolog\Handler\BufferHandler
*/
protected $bufferHandler;

public function setUp()
{
    parent::setUp();

    $this->_handler = m::mock(\Monolog\Handler\HandlerInterface::class);
    $this->_bufferLimit = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_flushOnOverflow = null;
    $this->bufferHandler = new \Monolog\Handler\BufferHandler($this->_handler, $this->_bufferLimit, $this->_level, $this->_bubble, $this->_flushOnOverflow);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == false (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == false (line 65)
    // if ($this->processors) == false (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == false (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == false (line 65)
    // if ($this->processors) == true (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == false (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == true (line 65)
    // if ($this->flushOnOverflow) == false (line 66)
    // if ($this->processors) == false (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == false (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == true (line 65)
    // if ($this->flushOnOverflow) == false (line 66)
    // if ($this->processors) == true (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == false (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == true (line 65)
    // if ($this->flushOnOverflow) == true (line 66)
    // if ($this->processors) == false (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == false (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == true (line 65)
    // if ($this->flushOnOverflow) == true (line 66)
    // if ($this->processors) == true (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == true (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == false (line 65)
    // if ($this->processors) == false (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle7()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == true (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == false (line 65)
    // if ($this->processors) == true (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle8()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == true (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == true (line 65)
    // if ($this->flushOnOverflow) == false (line 66)
    // if ($this->processors) == false (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle9()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == true (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == true (line 65)
    // if ($this->flushOnOverflow) == false (line 66)
    // if ($this->processors) == true (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle10()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == true (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == true (line 65)
    // if ($this->flushOnOverflow) == true (line 66)
    // if ($this->processors) == false (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle11()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 55)
    // if (!$this->initialized) == true (line 59)
    // if ($this->bufferLimit > 0 && $this->bufferSize === $this->bufferLimit) == true (line 65)
    // if ($this->flushOnOverflow) == true (line 66)
    // if ($this->processors) == true (line 74)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle12()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == true (line 55)

    $actual = $this->bufferHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 86)

    $actual = $this->bufferHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == true (line 86)

    $actual = $this->bufferHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    $actual = $this->bufferHandler->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->bufferHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    // TODO: Your mock expectations here

    $actual = $this->bufferHandler->clear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
