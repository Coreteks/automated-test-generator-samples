<?php

namespace tests\Illuminate\Container;

use Illuminate\Container\BoundMethod;
use Mockery as m;

class BoundMethodTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Container\BoundMethod
*/
protected $boundMethod;

public function setUp()
{
    parent::setUp();

    $this->boundMethod = new \Illuminate\Container\BoundMethod();
}

public function testCall0()
{
    $container = m::mock('UntypedParameter_container_');
    $callback = m::mock('UntypedParameter_callback_');
    $parameters = [];
    $defaultMethod = m::mock('UntypedParameter_defaultMethod_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::isCallableWithAtSign($callback) || $defaultMethod) == false (line 23)

    $actual = $this->boundMethod->call($container, $callback, $parameters, $defaultMethod);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall1()
{
    $container = m::mock('UntypedParameter_container_');
    $callback = m::mock('UntypedParameter_callback_');
    $parameters = [];
    $defaultMethod = m::mock('UntypedParameter_defaultMethod_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::isCallableWithAtSign($callback) || $defaultMethod) == true (line 23)

    $actual = $this->boundMethod->call($container, $callback, $parameters, $defaultMethod);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
