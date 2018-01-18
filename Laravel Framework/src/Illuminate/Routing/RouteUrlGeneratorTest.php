<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RouteUrlGenerator;
use Mockery as m;

class RouteUrlGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_url = null;
/**
* @var mixed
*/
protected $_request = null;
/**
* @var \Illuminate\Routing\RouteUrlGenerator
*/
protected $routeUrlGenerator;

public function setUp()
{
    parent::setUp();

    $this->_url = null;
    $this->_request = null;
    $this->routeUrlGenerator = new \Illuminate\Routing\RouteUrlGenerator($this->_url, $this->_request);
}

public function testTo0()
{
    $route = m::mock('UntypedParameter_route_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $absolute = m::mock('UntypedParameter_absolute_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/\\{.*?\\}/', $uri)) == false (line 89)
    // if (!$absolute) == false (line 98)

    $actual = $this->routeUrlGenerator->to($route, $parameters, $absolute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo1()
{
    $route = m::mock('UntypedParameter_route_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $absolute = m::mock('UntypedParameter_absolute_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/\\{.*?\\}/', $uri)) == false (line 89)
    // if (!$absolute) == true (line 98)

    $actual = $this->routeUrlGenerator->to($route, $parameters, $absolute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testTo2()
{
    $route = m::mock('UntypedParameter_route_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $absolute = m::mock('UntypedParameter_absolute_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/\\{.*?\\}/', $uri)) == true (line 89)
    // throw \Illuminate\Routing\Exceptions\UrlGenerationException::forMissingParameters($route) -> exception (line 90)

    $actual = $this->routeUrlGenerator->to($route, $parameters, $absolute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDefaults0()
{
    $defaults = [];

    // TODO: Your mock expectations here

    $actual = $this->routeUrlGenerator->defaults($defaults);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
