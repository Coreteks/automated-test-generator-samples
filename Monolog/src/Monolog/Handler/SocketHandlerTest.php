<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\SocketHandler;

class SocketHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_connectionString = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\SocketHandler
*/
protected $socketHandler;

public function setUp()
{
    parent::setUp();

    $this->_connectionString = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->socketHandler = new \Monolog\Handler\SocketHandler($this->_connectionString, $this->_level, $this->_bubble);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isPersistent()) == false (line 70)

    $actual = $this->socketHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isPersistent()) == true (line 70)

    $actual = $this->socketHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCloseSocket0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($this->resource)) == false (line 80)

    $actual = $this->socketHandler->closeSocket();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCloseSocket1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_resource($this->resource)) == true (line 80)

    $actual = $this->socketHandler->closeSocket();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPersistent0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    $actual = $this->socketHandler->setPersistent($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConnectionTimeout0()
{
    $seconds = m::mock('UntypedParameter_seconds_');

    // TODO: Your mock expectations here

    $actual = $this->socketHandler->setConnectionTimeout($seconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTimeout0()
{
    $seconds = m::mock('UntypedParameter_seconds_');

    // TODO: Your mock expectations here

    $actual = $this->socketHandler->setTimeout($seconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetWritingTimeout0()
{
    $seconds = m::mock('UntypedParameter_seconds_');

    // TODO: Your mock expectations here

    $actual = $this->socketHandler->setWritingTimeout($seconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnectionString0()
{
    // TODO: Your mock expectations here

    $actual = $this->socketHandler->getConnectionString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsPersistent0()
{
    // TODO: Your mock expectations here

    $actual = $this->socketHandler->isPersistent();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnectionTimeout0()
{
    // TODO: Your mock expectations here

    $actual = $this->socketHandler->getConnectionTimeout();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimeout0()
{
    // TODO: Your mock expectations here

    $actual = $this->socketHandler->getTimeout();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetWritingTimeout0()
{
    // TODO: Your mock expectations here

    $actual = $this->socketHandler->getWritingTimeout();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsConnected0()
{
    // TODO: Your mock expectations here

    $actual = $this->socketHandler->isConnected();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
