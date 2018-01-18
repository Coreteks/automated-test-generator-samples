<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\ControllerMiddlewareOptions;
use Mockery as m;

class ControllerMiddlewareOptionsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_options = [];
/**
* @var \Illuminate\Routing\ControllerMiddlewareOptions
*/
protected $controllerMiddlewareOptions;

public function setUp()
{
    parent::setUp();

    $this->_options = [];
    $this->controllerMiddlewareOptions = new \Illuminate\Routing\ControllerMiddlewareOptions($this->_options);
}

public function testOnly0()
{
    $methods = m::mock('UntypedParameter_methods_');

    // TODO: Your mock expectations here

    $actual = $this->controllerMiddlewareOptions->only($methods);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExcept0()
{
    $methods = m::mock('UntypedParameter_methods_');

    // TODO: Your mock expectations here

    $actual = $this->controllerMiddlewareOptions->except($methods);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
