<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RouteParameterBinder;
use Mockery as m;

class RouteParameterBinderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_route = null;
/**
* @var \Illuminate\Routing\RouteParameterBinder
*/
protected $routeParameterBinder;

public function setUp()
{
    parent::setUp();

    $this->_route = null;
    $this->routeParameterBinder = new \Illuminate\Routing\RouteParameterBinder($this->_route);
}

public function testParameters0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->route->compiled->getHostRegex())) == false (line 43)

    $actual = $this->routeParameterBinder->parameters($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParameters1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->route->compiled->getHostRegex())) == true (line 43)

    $actual = $this->routeParameterBinder->parameters($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
