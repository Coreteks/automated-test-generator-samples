<?php

namespace tests\Illuminate\Routing;

use Illuminate\Container\Container;
use Illuminate\Routing\ControllerDispatcher;
use Mockery as m;

class ControllerDispatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Routing\ControllerDispatcher
*/
protected $controllerDispatcher;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Container\Container::class);
    $this->controllerDispatcher = new \Illuminate\Routing\ControllerDispatcher($this->_container);
}

public function testDispatch0()
{
    $route = m::mock(\Illuminate\Routing\Route::class);
    $controller = m::mock('UntypedParameter_controller_');
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($controller, 'callAction')) == false (line 44)

    $actual = $this->controllerDispatcher->dispatch($route, $controller, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch1()
{
    $route = m::mock(\Illuminate\Routing\Route::class);
    $controller = m::mock('UntypedParameter_controller_');
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($controller, 'callAction')) == true (line 44)

    $actual = $this->controllerDispatcher->dispatch($route, $controller, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMiddleware0()
{
    $controller = m::mock('UntypedParameter_controller_');
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!method_exists($controller, 'getMiddleware')) == false (line 60)

    $actual = $this->controllerDispatcher->getMiddleware($controller, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMiddleware1()
{
    $controller = m::mock('UntypedParameter_controller_');
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!method_exists($controller, 'getMiddleware')) == true (line 60)

    $actual = $this->controllerDispatcher->getMiddleware($controller, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
