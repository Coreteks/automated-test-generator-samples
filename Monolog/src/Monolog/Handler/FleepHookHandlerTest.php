<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\FleepHookHandler;

class FleepHookHandlerTest extends \PHPUnit_Framework_TestCase
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
* @var \Monolog\Handler\FleepHookHandler
*/
protected $fleepHookHandler;

public function setUp()
{
    parent::setUp();

    $this->_token = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->fleepHookHandler = new \Monolog\Handler\FleepHookHandler($this->_token, $this->_level, $this->_bubble);
}

public function testWrite0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->fleepHookHandler->write($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
