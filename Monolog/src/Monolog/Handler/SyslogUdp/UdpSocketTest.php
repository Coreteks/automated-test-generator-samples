<?php

namespace tests\Monolog\Handler\SyslogUdp;

use Mockery as m;
use Monolog\Handler\SyslogUdp\UdpSocket;

class UdpSocketTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_ip = null;
/**
* @var mixed
*/
protected $_port = null;
/**
* @var \Monolog\Handler\SyslogUdp\UdpSocket
*/
protected $udpSocket;

public function setUp()
{
    parent::setUp();

    $this->_ip = null;
    $this->_port = null;
    $this->udpSocket = new \Monolog\Handler\SyslogUdp\UdpSocket($this->_ip, $this->_port);
}

public function testWrite0()
{
    $line = m::mock('UntypedParameter_line_');
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    $actual = $this->udpSocket->write($line, $header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($this->socket)) == false (line 38)

    $actual = $this->udpSocket->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($this->socket)) == true (line 38)

    $actual = $this->udpSocket->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
