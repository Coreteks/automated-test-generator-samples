<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RouteCompiler;
use Mockery as m;

class RouteCompilerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_route = null;
/**
* @var \Illuminate\Routing\RouteCompiler
*/
protected $routeCompiler;

public function setUp()
{
    parent::setUp();

    $this->_route = null;
    $this->routeCompiler = new \Illuminate\Routing\RouteCompiler($this->_route);
}

public function testCompile0()
{
    // TODO: Your mock expectations here

    $actual = $this->routeCompiler->compile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
