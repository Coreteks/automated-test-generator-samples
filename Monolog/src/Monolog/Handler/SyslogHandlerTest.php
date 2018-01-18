<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\SyslogHandler;

class SyslogHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_ident = null;
/**
* @var mixed
*/
protected $_facility = null;
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
protected $_logopts = null;
/**
* @var \Monolog\Handler\SyslogHandler
*/
protected $syslogHandler;

public function setUp()
{
    parent::setUp();

    $this->_ident = null;
    $this->_facility = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_logopts = null;
    $this->syslogHandler = new \Monolog\Handler\SyslogHandler($this->_ident, $this->_facility, $this->_level, $this->_bubble, $this->_logopts);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->syslogHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
