<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\PendingResourceRegistration;
use Illuminate\Routing\ResourceRegistrar;
use Mockery as m;

class PendingResourceRegistrationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_registrar;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_controller = null;
/**
* @var array
*/
protected $_options = [];
/**
* @var \Illuminate\Routing\PendingResourceRegistration
*/
protected $pendingResourceRegistration;

public function setUp()
{
    parent::setUp();

    $this->_registrar = m::mock(\Illuminate\Routing\ResourceRegistrar::class);
    $this->_name = null;
    $this->_controller = null;
    $this->_options = [];
    $this->pendingResourceRegistration = new \Illuminate\Routing\PendingResourceRegistration($this->_registrar, $this->_name, $this->_controller, $this->_options);
}

public function testOnly0()
{
    $methods = m::mock('UntypedParameter_methods_');

    // TODO: Your mock expectations here

    $actual = $this->pendingResourceRegistration->only($methods);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExcept0()
{
    $methods = m::mock('UntypedParameter_methods_');

    // TODO: Your mock expectations here

    $actual = $this->pendingResourceRegistration->except($methods);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNames0()
{
    $names = m::mock('UntypedParameter_names_');

    // TODO: Your mock expectations here

    $actual = $this->pendingResourceRegistration->names($names);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testName0()
{
    $method = m::mock('UntypedParameter_method_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->pendingResourceRegistration->name($method, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParameters0()
{
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->pendingResourceRegistration->parameters($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParameter0()
{
    $previous = m::mock('UntypedParameter_previous_');
    $new = m::mock('UntypedParameter_new_');

    // TODO: Your mock expectations here

    $actual = $this->pendingResourceRegistration->parameter($previous, $new);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddleware0()
{
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    $actual = $this->pendingResourceRegistration->middleware($middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    $actual = $this->pendingResourceRegistration->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
