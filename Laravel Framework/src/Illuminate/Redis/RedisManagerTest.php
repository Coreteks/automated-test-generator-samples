<?php

namespace tests\Illuminate\Redis;

use Illuminate\Redis\RedisManager;
use Mockery as m;

class RedisManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_driver = null;
/**
* @var array
*/
protected $_config = [];
/**
* @var \Illuminate\Redis\RedisManager
*/
protected $redisManager;

public function setUp()
{
    parent::setUp();

    $this->_driver = null;
    $this->_config = [];
    $this->redisManager = new \Illuminate\Redis\RedisManager($this->_driver, $this->_config);
}

public function testConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->connections[$name])) == false (line 57)

    $actual = $this->redisManager->connection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnection1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->connections[$name])) == true (line 57)

    $actual = $this->redisManager->connection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testResolve0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->config[$name])) == false (line 78)
    // if (isset($this->config['clusters'][$name])) == false (line 82)
    // throw new \InvalidArgumentException("Redis connection [{$name}] not configured.") -> exception (line 86)

    $actual = $this->redisManager->resolve($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->config[$name])) == false (line 78)
    // if (isset($this->config['clusters'][$name])) == true (line 82)

    $actual = $this->redisManager->resolve($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->config[$name])) == true (line 78)

    $actual = $this->redisManager->resolve($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnections0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisManager->connections();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->redisManager->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
