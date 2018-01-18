<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\LogglyHandler;

class LogglyHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_token = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\LogglyHandler
*/
protected $logglyHandler;

public function setUp()
{
    parent::setUp();

    $this->_token = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->logglyHandler = new \Monolog\Handler\LogglyHandler($this->_token, $this->_level, $this->_bubble);
}

public function testSetTag0()
{
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    $actual = $this->logglyHandler->setTag($tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddTag0()
{
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($tag)) == false (line 54)

    $actual = $this->logglyHandler->addTag($tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddTag1()
{
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($tag)) == true (line 54)

    $actual = $this->logglyHandler->addTag($tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($records) == false (line 73)

    $actual = $this->logglyHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($records) == true (line 73)

    $actual = $this->logglyHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
