<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RouteBinding;
use Mockery as m;

class RouteBindingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\RouteBinding
*/
protected $routeBinding;

public function setUp()
{
    parent::setUp();

    $this->routeBinding = new \Illuminate\Routing\RouteBinding();
}

public function testForCallback0()
{
    $container = m::mock('UntypedParameter_container_');
    $binder = m::mock('UntypedParameter_binder_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($binder)) == false (line 20)

    $actual = $this->routeBinding->forCallback($container, $binder);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForCallback1()
{
    $container = m::mock('UntypedParameter_container_');
    $binder = m::mock('UntypedParameter_binder_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($binder)) == true (line 20)

    $actual = $this->routeBinding->forCallback($container, $binder);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForModel0()
{
    $container = m::mock('UntypedParameter_container_');
    $class = m::mock('UntypedParameter_class_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->routeBinding->forModel($container, $class, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
