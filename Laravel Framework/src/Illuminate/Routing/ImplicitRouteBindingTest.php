<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\ImplicitRouteBinding;
use Mockery as m;

class ImplicitRouteBindingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\ImplicitRouteBinding
*/
protected $implicitRouteBinding;

public function setUp()
{
    parent::setUp();

    $this->implicitRouteBinding = new \Illuminate\Routing\ImplicitRouteBinding();
}

public function testResolveForRoute0()
{
    $container = m::mock('UntypedParameter_container_');
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    $actual = $this->implicitRouteBinding->resolveForRoute($container, $route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolveForRoute1()
{
    $container = m::mock('UntypedParameter_container_');
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($parameterName = static::getParameterName($parameter->name, $parameters))) == false (line 23)
    // if ($parameterValue instanceof \Illuminate\Contracts\Routing\UrlRoutable) == false (line 29)
    // if (!($model = $instance->resolveRouteBinding($parameterValue))) == false (line 35)

    $actual = $this->implicitRouteBinding->resolveForRoute($container, $route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testResolveForRoute2()
{
    $container = m::mock('UntypedParameter_container_');
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($parameterName = static::getParameterName($parameter->name, $parameters))) == false (line 23)
    // if ($parameterValue instanceof \Illuminate\Contracts\Routing\UrlRoutable) == false (line 29)
    // if (!($model = $instance->resolveRouteBinding($parameterValue))) == true (line 35)
    // throw (new \Illuminate\Database\Eloquent\ModelNotFoundException())->setModel(get_class($instance)) -> exception (line 36)

    $actual = $this->implicitRouteBinding->resolveForRoute($container, $route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolveForRoute3()
{
    $container = m::mock('UntypedParameter_container_');
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($parameterName = static::getParameterName($parameter->name, $parameters))) == false (line 23)
    // if ($parameterValue instanceof \Illuminate\Contracts\Routing\UrlRoutable) == true (line 29)

    $actual = $this->implicitRouteBinding->resolveForRoute($container, $route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolveForRoute4()
{
    $container = m::mock('UntypedParameter_container_');
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($parameterName = static::getParameterName($parameter->name, $parameters))) == true (line 23)

    $actual = $this->implicitRouteBinding->resolveForRoute($container, $route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
