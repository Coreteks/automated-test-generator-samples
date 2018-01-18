<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\StreamHandler;

class StreamHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_stream = null;
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
protected $_filePermission = null;
/**
* @var mixed
*/
protected $_useLocking = null;
/**
* @var \Monolog\Handler\StreamHandler
*/
protected $streamHandler;

public function setUp()
{
    parent::setUp();

    $this->_stream = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_filePermission = null;
    $this->_useLocking = null;
    $this->streamHandler = new \Monolog\Handler\StreamHandler($this->_stream, $this->_level, $this->_bubble, $this->_filePermission, $this->_useLocking);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->url && is_resource($this->stream)) == false (line 64)

    $actual = $this->streamHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->url && is_resource($this->stream)) == true (line 64)

    $actual = $this->streamHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetStream0()
{
    // TODO: Your mock expectations here

    $actual = $this->streamHandler->getStream();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUrl0()
{
    // TODO: Your mock expectations here

    $actual = $this->streamHandler->getUrl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
