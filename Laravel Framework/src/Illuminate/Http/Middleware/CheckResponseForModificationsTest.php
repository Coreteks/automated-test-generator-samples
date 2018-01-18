<?php

namespace tests\Illuminate\Http\Middleware;

use Illuminate\Http\Middleware\CheckResponseForModifications;
use Mockery as m;

class CheckResponseForModificationsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\Middleware\CheckResponseForModifications
*/
protected $checkResponseForModifications;

public function setUp()
{
    parent::setUp();

    $this->checkResponseForModifications = new \Illuminate\Http\Middleware\CheckResponseForModifications();
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Symfony\Component\HttpFoundation\Response) == false (line 21)

    $actual = $this->checkResponseForModifications->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Symfony\Component\HttpFoundation\Response) == true (line 21)

    $actual = $this->checkResponseForModifications->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
