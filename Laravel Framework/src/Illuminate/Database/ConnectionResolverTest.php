<?php

namespace tests\Illuminate\Database;

use Illuminate\Database\ConnectionResolver;
use Mockery as m;

class ConnectionResolverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_connections = [];
/**
* @var \Illuminate\Database\ConnectionResolver
*/
protected $connectionResolver;

public function setUp()
{
    parent::setUp();

    $this->_connections = [];
    $this->connectionResolver = new \Illuminate\Database\ConnectionResolver($this->_connections);
}

public function testConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($name)) == false (line 42)

    $actual = $this->connectionResolver->connection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnection1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($name)) == true (line 42)

    $actual = $this->connectionResolver->connection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConnection0()
{
    $name = m::mock('UntypedParameter_name_');
    $connection = m::mock(\Illuminate\Database\ConnectionInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->connectionResolver->addConnection($name, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->connectionResolver->hasConnection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultConnection0()
{
    // TODO: Your mock expectations here

    $actual = $this->connectionResolver->getDefaultConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->connectionResolver->setDefaultConnection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
