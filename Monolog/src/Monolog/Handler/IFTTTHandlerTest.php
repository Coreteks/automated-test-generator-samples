<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\IFTTTHandler;

class IFTTTHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_eventName = null;
/**
* @var mixed
*/
protected $_secretKey = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\IFTTTHandler
*/
protected $iFTTTHandler;

public function setUp()
{
    parent::setUp();

    $this->_eventName = null;
    $this->_secretKey = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->iFTTTHandler = new \Monolog\Handler\IFTTTHandler($this->_eventName, $this->_secretKey, $this->_level, $this->_bubble);
}

public function testWrite0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->iFTTTHandler->write($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
