<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\HipChatHandler;

class HipChatHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_token = null;
/**
* @var mixed
*/
protected $_room = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_notify = null;
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
protected $_useSSL = null;
/**
* @var mixed
*/
protected $_format = null;
/**
* @var mixed
*/
protected $_host = null;
/**
* @var \Monolog\Handler\HipChatHandler
*/
protected $hipChatHandler;

public function setUp()
{
    parent::setUp();

    $this->_token = null;
    $this->_room = null;
    $this->_name = null;
    $this->_notify = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_useSSL = null;
    $this->_format = null;
    $this->_host = null;
    $this->hipChatHandler = new \Monolog\Handler\HipChatHandler($this->_token, $this->_room, $this->_name, $this->_notify, $this->_level, $this->_bubble, $this->_useSSL, $this->_format, $this->_host);
}

public function testHandleBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($records) == 0) == false (line 199)
    // if (!$handled) == false (line 213)

    $actual = $this->hipChatHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($records) == 0) == false (line 199)
    // if (!$handled) == true (line 213)

    $actual = $this->hipChatHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch2()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($records) == 0) == false (line 199)
    // if ($this->isHandling($batchRecord)) == false (line 207)
    // if (!$handled) == false (line 213)

    $actual = $this->hipChatHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch3()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($records) == 0) == false (line 199)
    // if ($this->isHandling($batchRecord)) == false (line 207)
    // if (!$handled) == true (line 213)

    $actual = $this->hipChatHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch4()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($records) == 0) == false (line 199)
    // if ($this->isHandling($batchRecord)) == true (line 207)
    // if (!$handled) == false (line 213)

    $actual = $this->hipChatHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch5()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($records) == 0) == false (line 199)
    // if ($this->isHandling($batchRecord)) == true (line 207)
    // if (!$handled) == true (line 213)

    $actual = $this->hipChatHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch6()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($records) == 0) == true (line 199)

    $actual = $this->hipChatHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
