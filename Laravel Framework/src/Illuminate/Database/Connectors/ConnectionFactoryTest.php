<?php

namespace tests\Illuminate\Database\Connectors;

use Illuminate\Contracts\Container\Container;
use Illuminate\Database\Connectors\ConnectionFactory;
use Mockery as m;

class ConnectionFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Database\Connectors\ConnectionFactory
*/
protected $connectionFactory;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Contracts\Container\Container::class);
    $this->connectionFactory = new \Illuminate\Database\Connectors\ConnectionFactory($this->_container);
}

public function testMake0()
{
    $config = [];
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['read'])) == false (line 47)

    $actual = $this->connectionFactory->make($config, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake1()
{
    $config = [];
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['read'])) == true (line 47)

    $actual = $this->connectionFactory->make($config, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testCreateConnector0()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($config['driver'])) == false (line 235)
    // if ($this->container->bound($key = "db.connector.{$config['driver']}")) == false (line 239)
    // switch ($config['driver']) (line 243)
    // Case 'mysql' == false (line 244)
    // Case 'pgsql' == false (line 246)
    // Case 'sqlite' == false (line 248)
    // Case 'sqlsrv' == false (line 250)
    // throw new \InvalidArgumentException("Unsupported driver [{$config['driver']}]") -> exception (line 254)

    $actual = $this->connectionFactory->createConnector($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateConnector1()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($config['driver'])) == false (line 235)
    // if ($this->container->bound($key = "db.connector.{$config['driver']}")) == false (line 239)
    // switch ($config['driver']) (line 243)
    // Case 'mysql' == false (line 244)
    // Case 'pgsql' == false (line 246)
    // Case 'sqlite' == false (line 248)
    // Case 'sqlsrv' == true (line 250)

    $actual = $this->connectionFactory->createConnector($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateConnector2()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($config['driver'])) == false (line 235)
    // if ($this->container->bound($key = "db.connector.{$config['driver']}")) == false (line 239)
    // switch ($config['driver']) (line 243)
    // Case 'mysql' == false (line 244)
    // Case 'pgsql' == false (line 246)
    // Case 'sqlite' == true (line 248)

    $actual = $this->connectionFactory->createConnector($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateConnector3()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($config['driver'])) == false (line 235)
    // if ($this->container->bound($key = "db.connector.{$config['driver']}")) == false (line 239)
    // switch ($config['driver']) (line 243)
    // Case 'mysql' == false (line 244)
    // Case 'pgsql' == true (line 246)

    $actual = $this->connectionFactory->createConnector($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateConnector4()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($config['driver'])) == false (line 235)
    // if ($this->container->bound($key = "db.connector.{$config['driver']}")) == false (line 239)
    // switch ($config['driver']) (line 243)
    // Case 'mysql' == true (line 244)

    $actual = $this->connectionFactory->createConnector($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateConnector5()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($config['driver'])) == false (line 235)
    // if ($this->container->bound($key = "db.connector.{$config['driver']}")) == true (line 239)

    $actual = $this->connectionFactory->createConnector($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testCreateConnector6()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($config['driver'])) == true (line 235)
    // throw new \InvalidArgumentException('A driver must be specified.') -> exception (line 236)

    $actual = $this->connectionFactory->createConnector($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
