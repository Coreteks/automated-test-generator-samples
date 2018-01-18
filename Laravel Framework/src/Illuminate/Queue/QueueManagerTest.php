<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\QueueManager;
use Mockery as m;

class QueueManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_app = null;
/**
* @var \Illuminate\Queue\QueueManager
*/
protected $queueManager;

public function setUp()
{
    parent::setUp();

    $this->_app = null;
    $this->queueManager = new \Illuminate\Queue\QueueManager($this->_app);
}

public function testBefore0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->queueManager->before($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfter0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->queueManager->after($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExceptionOccurred0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->queueManager->exceptionOccurred($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLooping0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->queueManager->looping($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailing0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->queueManager->failing($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStopping0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->queueManager->stopping($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnected0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->queueManager->connected($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->connections[$name])) == false (line 137)

    $actual = $this->queueManager->connection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnection1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->connections[$name])) == true (line 137)

    $actual = $this->queueManager->connection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend0()
{
    $driver = m::mock('UntypedParameter_driver_');
    $resolver = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->queueManager->extend($driver, $resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConnector0()
{
    $driver = m::mock('UntypedParameter_driver_');
    $resolver = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->queueManager->addConnector($driver, $resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->queueManager->getDefaultDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultDriver0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->queueManager->setDefaultDriver($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->queueManager->getName($connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsDownForMaintenance0()
{
    // TODO: Your mock expectations here

    $actual = $this->queueManager->isDownForMaintenance();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->queueManager->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
