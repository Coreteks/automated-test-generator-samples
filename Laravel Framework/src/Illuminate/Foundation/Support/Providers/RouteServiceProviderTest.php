<?php

namespace tests\Illuminate\Foundation\Support\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Mockery as m;

class RouteServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Support\Providers\RouteServiceProvider
*/
protected $routeServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->routeServiceProvider = new \Illuminate\Foundation\Support\Providers\RouteServiceProvider();
}

public function testBoot0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->routesAreCached()) == false (line 30)

    $actual = $this->routeServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->routesAreCached()) == true (line 30)

    $actual = $this->routeServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->routeServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->routeServiceProvider->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
