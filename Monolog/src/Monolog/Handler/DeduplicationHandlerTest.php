<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\DeduplicationHandler;
use Monolog\Handler\HandlerInterface;

class DeduplicationHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_handler;
/**
* @var mixed
*/
protected $_deduplicationStore = null;
/**
* @var mixed
*/
protected $_deduplicationLevel = null;
/**
* @var mixed
*/
protected $_time = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\DeduplicationHandler
*/
protected $deduplicationHandler;

public function setUp()
{
    parent::setUp();

    $this->_handler = m::mock(\Monolog\Handler\HandlerInterface::class);
    $this->_deduplicationStore = null;
    $this->_deduplicationLevel = null;
    $this->_time = null;
    $this->_bubble = null;
    $this->deduplicationHandler = new \Monolog\Handler\DeduplicationHandler($this->_handler, $this->_deduplicationStore, $this->_deduplicationLevel, $this->_time, $this->_bubble);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($passthru === true || $passthru === null) == false (line 92)
    // if ($this->gc) == false (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($passthru === true || $passthru === null) == false (line 92)
    // if ($this->gc) == true (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($passthru === true || $passthru === null) == true (line 92)
    // if ($this->gc) == false (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($passthru === true || $passthru === null) == true (line 92)
    // if ($this->gc) == true (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == false (line 83)
    // if ($passthru === true || $passthru === null) == false (line 92)
    // if ($this->gc) == false (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == false (line 83)
    // if ($passthru === true || $passthru === null) == false (line 92)
    // if ($this->gc) == true (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == false (line 83)
    // if ($passthru === true || $passthru === null) == true (line 92)
    // if ($this->gc) == false (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == false (line 83)
    // if ($passthru === true || $passthru === null) == true (line 92)
    // if ($this->gc) == true (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == true (line 83)
    // if ($passthru) == false (line 85)
    // if ($passthru === true || $passthru === null) == false (line 92)
    // if ($this->gc) == false (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == true (line 83)
    // if ($passthru) == false (line 85)
    // if ($passthru === true || $passthru === null) == false (line 92)
    // if ($this->gc) == true (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == true (line 83)
    // if ($passthru) == false (line 85)
    // if ($passthru === true || $passthru === null) == true (line 92)
    // if ($this->gc) == false (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == true (line 83)
    // if ($passthru) == false (line 85)
    // if ($passthru === true || $passthru === null) == true (line 92)
    // if ($this->gc) == true (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == true (line 83)
    // if ($passthru) == true (line 85)
    // if ($passthru === true || $passthru === null) == false (line 92)
    // if ($this->gc) == false (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == true (line 83)
    // if ($passthru) == true (line 85)
    // if ($passthru === true || $passthru === null) == false (line 92)
    // if ($this->gc) == true (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == true (line 83)
    // if ($passthru) == true (line 85)
    // if ($passthru === true || $passthru === null) == true (line 92)
    // if ($this->gc) == false (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == false (line 76)
    // if ($record['level'] >= $this->deduplicationLevel) == true (line 83)
    // if ($passthru) == true (line 85)
    // if ($passthru === true || $passthru === null) == true (line 92)
    // if ($this->gc) == true (line 98)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bufferSize === 0) == true (line 76)

    $actual = $this->deduplicationHandler->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
