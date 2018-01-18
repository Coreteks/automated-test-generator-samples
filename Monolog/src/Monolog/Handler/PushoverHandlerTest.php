<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\PushoverHandler;

class PushoverHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_token = null;
/**
* @var mixed
*/
protected $_users = null;
/**
* @var mixed
*/
protected $_title = null;
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
protected $_highPriorityLevel = null;
/**
* @var mixed
*/
protected $_emergencyLevel = null;
/**
* @var mixed
*/
protected $_retry = null;
/**
* @var mixed
*/
protected $_expire = null;
/**
* @var \Monolog\Handler\PushoverHandler
*/
protected $pushoverHandler;

public function setUp()
{
    parent::setUp();

    $this->_token = null;
    $this->_users = null;
    $this->_title = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_useSSL = null;
    $this->_highPriorityLevel = null;
    $this->_emergencyLevel = null;
    $this->_retry = null;
    $this->_expire = null;
    $this->pushoverHandler = new \Monolog\Handler\PushoverHandler($this->_token, $this->_users, $this->_title, $this->_level, $this->_bubble, $this->_useSSL, $this->_highPriorityLevel, $this->_emergencyLevel, $this->_retry, $this->_expire);
}

public function testSetHighPriorityLevel0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->pushoverHandler->setHighPriorityLevel($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEmergencyLevel0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->pushoverHandler->setEmergencyLevel($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseFormattedMessage0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->pushoverHandler->useFormattedMessage($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
