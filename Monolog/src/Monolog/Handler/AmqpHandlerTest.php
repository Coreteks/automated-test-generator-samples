<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\AmqpHandler;

class AmqpHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_exchange = null;
/**
* @var mixed
*/
protected $_exchangeName = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\AmqpHandler
*/
protected $amqpHandler;

public function setUp()
{
    parent::setUp();

    $this->_exchange = null;
    $this->_exchangeName = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->amqpHandler = new \Monolog\Handler\AmqpHandler($this->_exchange, $this->_exchangeName, $this->_level, $this->_bubble);
}

public function testHandleBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->exchange instanceof \AMQPExchange) == false (line 85)

    $actual = $this->amqpHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->exchange instanceof \AMQPExchange) == false (line 85)
    // if (!$this->isHandling($record)) == false (line 92)

    $actual = $this->amqpHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch2()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->exchange instanceof \AMQPExchange) == false (line 85)
    // if (!$this->isHandling($record)) == true (line 92)

    $actual = $this->amqpHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch3()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->exchange instanceof \AMQPExchange) == true (line 85)

    $actual = $this->amqpHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
