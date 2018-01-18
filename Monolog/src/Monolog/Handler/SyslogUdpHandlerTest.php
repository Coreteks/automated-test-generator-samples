<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\SyslogUdpHandler;

class SyslogUdpHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_host = null;
/**
* @var mixed
*/
protected $_port = null;
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
protected $_ident = null;
/**
* @var \Monolog\Handler\SyslogUdpHandler
*/
protected $syslogUdpHandler;

public function setUp()
{
    parent::setUp();

    $this->_host = null;
    $this->_port = null;
    $this->_facility = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_ident = null;
    $this->syslogUdpHandler = new \Monolog\Handler\SyslogUdpHandler($this->_host, $this->_port, $this->_facility, $this->_level, $this->_bubble, $this->_ident);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->syslogUdpHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetSocket0()
{
    $socket = m::mock(\Monolog\Handler\SyslogUdp\UdpSocket::class);

    // TODO: Your mock expectations here

    $actual = $this->syslogUdpHandler->setSocket($socket);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
