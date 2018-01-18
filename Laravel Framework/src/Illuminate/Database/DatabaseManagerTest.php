<?php

namespace tests\Illuminate\Database;

use Illuminate\Database\Connectors\ConnectionFactory;
use Illuminate\Database\DatabaseManager;
use Mockery as m;

class DatabaseManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_app = null;
/**
* @var \Mockery\MockInterface
*/
protected $_factory;
/**
* @var \Illuminate\Database\DatabaseManager
*/
protected $databaseManager;

public function setUp()
{
    parent::setUp();

    $this->_app = null;
    $this->_factory = m::mock(\Illuminate\Database\Connectors\ConnectionFactory::class);
    $this->databaseManager = new \Illuminate\Database\DatabaseManager($this->_app, $this->_factory);
}

public function testConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->connections[$name])) == false (line 72)

    $actual = $this->databaseManager->connection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnection1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->connections[$name])) == true (line 72)

    $actual = $this->databaseManager->connection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPurge0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->databaseManager->purge($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisconnect0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->connections[$name = $name ?: $this->getDefaultConnection()])) == false (line 215)

    $actual = $this->databaseManager->disconnect($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisconnect1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->connections[$name = $name ?: $this->getDefaultConnection()])) == true (line 215)

    $actual = $this->databaseManager->disconnect($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->connections[$name])) == false (line 230)

    $actual = $this->databaseManager->reconnect($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->connections[$name])) == true (line 230)

    $actual = $this->databaseManager->reconnect($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultConnection0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseManager->getDefaultConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->databaseManager->setDefaultConnection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupportedDrivers0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseManager->supportedDrivers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAvailableDrivers0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseManager->availableDrivers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend0()
{
    $name = m::mock('UntypedParameter_name_');
    $resolver = m::mock('UntypedParameter_resolver_');

    // TODO: Your mock expectations here

    $actual = $this->databaseManager->extend($name, $resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnections0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseManager->getConnections();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->databaseManager->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
