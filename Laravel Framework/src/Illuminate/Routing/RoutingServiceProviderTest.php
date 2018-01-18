<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RoutingServiceProvider;
use Mockery as m;

class RoutingServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\RoutingServiceProvider
*/
protected $routingServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->routingServiceProvider = new \Illuminate\Routing\RoutingServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->routingServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
