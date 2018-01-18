<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\WhatFailureGroupHandler;

class WhatFailureGroupHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Handler\WhatFailureGroupHandler
*/
protected $whatFailureGroupHandler;

public function setUp()
{
    parent::setUp();

    $this->whatFailureGroupHandler = new \Monolog\Handler\WhatFailureGroupHandler();
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle7()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle8()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle9()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle10()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle11()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 27)

    $actual = $this->whatFailureGroupHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->whatFailureGroupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandleBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->whatFailureGroupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch2()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->whatFailureGroupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch3()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->whatFailureGroupHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
