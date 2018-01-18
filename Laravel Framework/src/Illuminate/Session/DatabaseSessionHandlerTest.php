<?php

namespace tests\Illuminate\Session;

use Illuminate\Contracts\Container\Container;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Session\DatabaseSessionHandler;
use Mockery as m;

class DatabaseSessionHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_connection;
/**
* @var mixed
*/
protected $_table = null;
/**
* @var mixed
*/
protected $_minutes = null;
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Session\DatabaseSessionHandler
*/
protected $databaseSessionHandler;

public function setUp()
{
    parent::setUp();

    $this->_connection = m::mock(\Illuminate\Database\ConnectionInterface::class);
    $this->_table = null;
    $this->_minutes = null;
    $this->_container = m::mock(\Illuminate\Contracts\Container\Container::class);
    $this->databaseSessionHandler = new \Illuminate\Session\DatabaseSessionHandler($this->_connection, $this->_table, $this->_minutes, $this->_container);
}

public function testOpen0()
{
    $savePath = m::mock('UntypedParameter_savePath_');
    $sessionName = m::mock('UntypedParameter_sessionName_');

    // TODO: Your mock expectations here

    $actual = $this->databaseSessionHandler->open($savePath, $sessionName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseSessionHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->expired($session)) == false (line 93)
    // if (isset($session->payload)) == false (line 99)

    $actual = $this->databaseSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead1()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->expired($session)) == false (line 93)
    // if (isset($session->payload)) == true (line 99)

    $actual = $this->databaseSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead2()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->expired($session)) == true (line 93)

    $actual = $this->databaseSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->exists) == false (line 127)
    // if ($this->exists) == false (line 131)

    $actual = $this->databaseSessionHandler->write($sessionId, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite1()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->exists) == false (line 127)
    // if ($this->exists) == true (line 131)

    $actual = $this->databaseSessionHandler->write($sessionId, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite2()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->exists) == true (line 127)
    // if ($this->exists) == false (line 131)

    $actual = $this->databaseSessionHandler->write($sessionId, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite3()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->exists) == true (line 127)
    // if ($this->exists) == true (line 131)

    $actual = $this->databaseSessionHandler->write($sessionId, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    $actual = $this->databaseSessionHandler->destroy($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc0()
{
    $lifetime = m::mock('UntypedParameter_lifetime_');

    // TODO: Your mock expectations here

    $actual = $this->databaseSessionHandler->gc($lifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetExists0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->databaseSessionHandler->setExists($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
