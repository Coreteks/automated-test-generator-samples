<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RouteAction;
use Mockery as m;

class RouteActionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\RouteAction
*/
protected $routeAction;

public function setUp()
{
    parent::setUp();

    $this->routeAction = new \Illuminate\Routing\RouteAction();
}

public function testParse0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($action)) == false (line 24)
    // if (is_callable($action)) == false (line 31)
    // if (!isset($action['uses'])) == false (line 38)
    // if (is_string($action['uses']) && !\Illuminate\Support\Str::contains($action['uses'], '@')) == false (line 42)

    $actual = $this->routeAction->parse($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($action)) == false (line 24)
    // if (is_callable($action)) == false (line 31)
    // if (!isset($action['uses'])) == false (line 38)
    // if (is_string($action['uses']) && !\Illuminate\Support\Str::contains($action['uses'], '@')) == true (line 42)

    $actual = $this->routeAction->parse($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($action)) == false (line 24)
    // if (is_callable($action)) == false (line 31)
    // if (!isset($action['uses'])) == true (line 38)
    // if (is_string($action['uses']) && !\Illuminate\Support\Str::contains($action['uses'], '@')) == false (line 42)

    $actual = $this->routeAction->parse($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($action)) == false (line 24)
    // if (is_callable($action)) == false (line 31)
    // if (!isset($action['uses'])) == true (line 38)
    // if (is_string($action['uses']) && !\Illuminate\Support\Str::contains($action['uses'], '@')) == true (line 42)

    $actual = $this->routeAction->parse($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse4()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($action)) == false (line 24)
    // if (is_callable($action)) == true (line 31)

    $actual = $this->routeAction->parse($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse5()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($action)) == true (line 24)

    $actual = $this->routeAction->parse($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
