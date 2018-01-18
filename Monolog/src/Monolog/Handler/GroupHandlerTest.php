<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\GroupHandler;

class GroupHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_handlers = [];
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\GroupHandler
*/
protected $groupHandler;

public function setUp()
{
    parent::setUp();

    $this->_handlers = [];
    $this->_bubble = null;
    $this->groupHandler = new \Monolog\Handler\GroupHandler($this->_handlers, $this->_bubble);
}

public function testIsHandling0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->groupHandler->isHandling($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsHandling1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling($record)) == false (line 49)

    $actual = $this->groupHandler->isHandling($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsHandling2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling($record)) == true (line 49)

    $actual = $this->groupHandler->isHandling($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 62)

    $actual = $this->groupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 62)

    $actual = $this->groupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 62)

    $actual = $this->groupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 62)

    $actual = $this->groupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 78)

    $actual = $this->groupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 78)

    $actual = $this->groupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch2()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 78)

    $actual = $this->groupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch3()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 78)

    $actual = $this->groupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch4()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 78)

    $actual = $this->groupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch5()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 78)

    $actual = $this->groupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch6()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 78)

    $actual = $this->groupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch7()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 78)

    $actual = $this->groupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFormatter0()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->groupHandler->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFormatter1()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->groupHandler->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
