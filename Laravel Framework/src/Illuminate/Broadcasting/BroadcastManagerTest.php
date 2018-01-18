<?php

namespace tests\Illuminate\Broadcasting;

use Illuminate\Broadcasting\BroadcastManager;
use Mockery as m;

class BroadcastManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_app = null;
/**
* @var \Illuminate\Broadcasting\BroadcastManager
*/
protected $broadcastManager;

public function setUp()
{
    parent::setUp();

    $this->_app = null;
    $this->broadcastManager = new \Illuminate\Broadcasting\BroadcastManager($this->_app);
}

public function testRoutes0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->routesAreCached()) == false (line 61)

    $actual = $this->broadcastManager->routes($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRoutes1()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->routesAreCached()) == true (line 61)

    $actual = $this->broadcastManager->routes($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSocket0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request && !$this->app->bound('request')) == false (line 80)

    $actual = $this->broadcastManager->socket($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSocket1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request && !$this->app->bound('request')) == true (line 80)

    $actual = $this->broadcastManager->socket($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvent0()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    $actual = $this->broadcastManager->event($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue0()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($connection) && isset($event->connection)) == false (line 110)
    // if (method_exists($event, 'broadcastQueue')) == false (line 116)
    // if (isset($event->broadcastQueue)) == false (line 118)
    // if (isset($event->queue)) == false (line 120)

    $actual = $this->broadcastManager->queue($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue1()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($connection) && isset($event->connection)) == false (line 110)
    // if (method_exists($event, 'broadcastQueue')) == false (line 116)
    // if (isset($event->broadcastQueue)) == false (line 118)
    // if (isset($event->queue)) == true (line 120)

    $actual = $this->broadcastManager->queue($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue2()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($connection) && isset($event->connection)) == false (line 110)
    // if (method_exists($event, 'broadcastQueue')) == false (line 116)
    // if (isset($event->broadcastQueue)) == true (line 118)

    $actual = $this->broadcastManager->queue($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue3()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($connection) && isset($event->connection)) == false (line 110)
    // if (method_exists($event, 'broadcastQueue')) == true (line 116)

    $actual = $this->broadcastManager->queue($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue4()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($connection) && isset($event->connection)) == true (line 110)
    // if (method_exists($event, 'broadcastQueue')) == false (line 116)
    // if (isset($event->broadcastQueue)) == false (line 118)
    // if (isset($event->queue)) == false (line 120)

    $actual = $this->broadcastManager->queue($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue5()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($connection) && isset($event->connection)) == true (line 110)
    // if (method_exists($event, 'broadcastQueue')) == false (line 116)
    // if (isset($event->broadcastQueue)) == false (line 118)
    // if (isset($event->queue)) == true (line 120)

    $actual = $this->broadcastManager->queue($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue6()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($connection) && isset($event->connection)) == true (line 110)
    // if (method_exists($event, 'broadcastQueue')) == false (line 116)
    // if (isset($event->broadcastQueue)) == true (line 118)

    $actual = $this->broadcastManager->queue($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue7()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($connection) && isset($event->connection)) == true (line 110)
    // if (method_exists($event, 'broadcastQueue')) == true (line 116)

    $actual = $this->broadcastManager->queue($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnection0()
{
    $driver = m::mock('UntypedParameter_driver_');

    // TODO: Your mock expectations here

    $actual = $this->broadcastManager->connection($driver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDriver0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->broadcastManager->driver($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->broadcastManager->getDefaultDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultDriver0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->broadcastManager->setDefaultDriver($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend0()
{
    $driver = m::mock('UntypedParameter_driver_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->broadcastManager->extend($driver, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->broadcastManager->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
