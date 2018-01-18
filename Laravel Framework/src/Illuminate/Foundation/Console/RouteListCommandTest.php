<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\RouteListCommand;
use Illuminate\Routing\Router;
use Mockery as m;

class RouteListCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_router;
/**
* @var \Illuminate\Foundation\Console\RouteListCommand
*/
protected $routeListCommand;

public function setUp()
{
    parent::setUp();

    $this->_router = m::mock(\Illuminate\Routing\Router::class);
    $this->routeListCommand = new \Illuminate\Foundation\Console\RouteListCommand($this->_router);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->routes) == 0) == false (line 71)

    $actual = $this->routeListCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->routes) == 0) == true (line 71)

    $actual = $this->routeListCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
