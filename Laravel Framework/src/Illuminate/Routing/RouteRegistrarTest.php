<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Routing\Router;
use Mockery as m;

class RouteRegistrarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_router;
/**
* @var \Illuminate\Routing\RouteRegistrar
*/
protected $routeRegistrar;

public function setUp()
{
    parent::setUp();

    $this->_router = m::mock(\Illuminate\Routing\Router::class);
    $this->routeRegistrar = new \Illuminate\Routing\RouteRegistrar($this->_router);
}

public function testAttribute0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($key, $this->allowedAttributes)) == false (line 75)

    $actual = $this->routeRegistrar->attribute($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testAttribute1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($key, $this->allowedAttributes)) == true (line 75)
    // throw new \InvalidArgumentException("Attribute [{$key}] does not exist.") -> exception (line 76)

    $actual = $this->routeRegistrar->attribute($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResource0()
{
    $name = m::mock('UntypedParameter_name_');
    $controller = m::mock('UntypedParameter_controller_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->routeRegistrar->resource($name, $controller, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroup0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->routeRegistrar->group($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $methods = m::mock('UntypedParameter_methods_');
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->routeRegistrar->match($methods, $uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($method, $this->passthru)) == false (line 166)
    // if (in_array($method, $this->allowedAttributes)) == false (line 170)
    // throw new \BadMethodCallException("Method [{$method}] does not exist.") -> exception (line 178)

    $actual = $this->routeRegistrar->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($method, $this->passthru)) == false (line 166)
    // if (in_array($method, $this->allowedAttributes)) == true (line 170)
    // if ($method == 'middleware') == false (line 171)

    $actual = $this->routeRegistrar->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call2()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($method, $this->passthru)) == false (line 166)
    // if (in_array($method, $this->allowedAttributes)) == true (line 170)
    // if ($method == 'middleware') == true (line 171)

    $actual = $this->routeRegistrar->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call3()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($method, $this->passthru)) == true (line 166)

    $actual = $this->routeRegistrar->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
