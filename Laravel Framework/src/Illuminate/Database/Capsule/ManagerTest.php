<?php

namespace tests\Illuminate\Database\Capsule;

use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager;
use Mockery as m;

class ManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Database\Capsule\Manager
*/
protected $manager;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Container\Container::class);
    $this->manager = new \Illuminate\Database\Capsule\Manager($this->_container);
}

public function testConnection0()
{
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->manager->connection($connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTable0()
{
    $table = m::mock('UntypedParameter_table_');
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->manager->table($table, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSchema0()
{
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->manager->schema($connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->manager->getConnection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConnection0()
{
    $config = [];
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->manager->addConnection($config, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootEloquent0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dispatcher = $this->getEventDispatcher()) == false (line 139)

    $actual = $this->manager->bootEloquent();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootEloquent1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($dispatcher = $this->getEventDispatcher()) == true (line 139)

    $actual = $this->manager->bootEloquent();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFetchMode0()
{
    $fetchMode = m::mock('UntypedParameter_fetchMode_');

    // TODO: Your mock expectations here

    $actual = $this->manager->setFetchMode($fetchMode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDatabaseManager0()
{
    // TODO: Your mock expectations here

    $actual = $this->manager->getDatabaseManager();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEventDispatcher0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->bound('events')) == false (line 174)

    $actual = $this->manager->getEventDispatcher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEventDispatcher1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->bound('events')) == true (line 174)

    $actual = $this->manager->getEventDispatcher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEventDispatcher0()
{
    $dispatcher = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);

    // TODO: Your mock expectations here

    $actual = $this->manager->setEventDispatcher($dispatcher);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->manager->__callStatic($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
