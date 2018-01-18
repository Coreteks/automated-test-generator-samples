<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\ErrorLogHandler;

class ErrorLogHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_messageType = null;
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
protected $_expandNewlines = null;
/**
* @var \Monolog\Handler\ErrorLogHandler
*/
protected $errorLogHandler;

public function setUp()
{
    parent::setUp();

    $this->_messageType = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_expandNewlines = null;
    $this->errorLogHandler = new \Monolog\Handler\ErrorLogHandler($this->_messageType, $this->_level, $this->_bubble, $this->_expandNewlines);
}

public function testGetAvailableTypes0()
{
    // TODO: Your mock expectations here

    $actual = $this->errorLogHandler->getAvailableTypes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
