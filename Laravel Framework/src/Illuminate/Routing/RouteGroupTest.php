<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RouteGroup;
use Mockery as m;

class RouteGroupTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\RouteGroup
*/
protected $routeGroup;

public function setUp()
{
    parent::setUp();

    $this->routeGroup = new \Illuminate\Routing\RouteGroup();
}

public function testMerge0()
{
    $new = m::mock('UntypedParameter_new_');
    $old = m::mock('UntypedParameter_old_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($new['domain'])) == false (line 18)

    $actual = $this->routeGroup->merge($new, $old);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMerge1()
{
    $new = m::mock('UntypedParameter_new_');
    $old = m::mock('UntypedParameter_old_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($new['domain'])) == true (line 18)

    $actual = $this->routeGroup->merge($new, $old);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
