<?php

namespace tests\Illuminate\Routing\Middleware;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Mockery as m;

class SubstituteBindingsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_router;
/**
* @var \Illuminate\Routing\Middleware\SubstituteBindings
*/
protected $substituteBindings;

public function setUp()
{
    parent::setUp();

    $this->_router = m::mock(\Illuminate\Contracts\Routing\Registrar::class);
    $this->substituteBindings = new \Illuminate\Routing\Middleware\SubstituteBindings($this->_router);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->substituteBindings->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
