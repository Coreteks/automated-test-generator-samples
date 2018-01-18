<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\MiddlewareNameResolver;
use Mockery as m;

class MiddlewareNameResolverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\MiddlewareNameResolver
*/
protected $middlewareNameResolver;

public function setUp()
{
    parent::setUp();

    $this->middlewareNameResolver = new \Illuminate\Routing\MiddlewareNameResolver();
}

public function testResolve0()
{
    $name = m::mock('UntypedParameter_name_');
    $map = m::mock('UntypedParameter_map_');
    $middlewareGroups = m::mock('UntypedParameter_middlewareGroups_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Closure) == false (line 22)
    // if (isset($map[$name]) && $map[$name] instanceof \Closure) == false (line 26)
    // if (isset($middlewareGroups[$name])) == false (line 33)

    $actual = $this->middlewareNameResolver->resolve($name, $map, $middlewareGroups);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve1()
{
    $name = m::mock('UntypedParameter_name_');
    $map = m::mock('UntypedParameter_map_');
    $middlewareGroups = m::mock('UntypedParameter_middlewareGroups_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Closure) == false (line 22)
    // if (isset($map[$name]) && $map[$name] instanceof \Closure) == false (line 26)
    // if (isset($middlewareGroups[$name])) == true (line 33)

    $actual = $this->middlewareNameResolver->resolve($name, $map, $middlewareGroups);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve2()
{
    $name = m::mock('UntypedParameter_name_');
    $map = m::mock('UntypedParameter_map_');
    $middlewareGroups = m::mock('UntypedParameter_middlewareGroups_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Closure) == false (line 22)
    // if (isset($map[$name]) && $map[$name] instanceof \Closure) == true (line 26)

    $actual = $this->middlewareNameResolver->resolve($name, $map, $middlewareGroups);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve3()
{
    $name = m::mock('UntypedParameter_name_');
    $map = m::mock('UntypedParameter_map_');
    $middlewareGroups = m::mock('UntypedParameter_middlewareGroups_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Closure) == true (line 22)

    $actual = $this->middlewareNameResolver->resolve($name, $map, $middlewareGroups);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
