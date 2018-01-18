<?php

namespace tests\Illuminate\Http\Middleware;

use Illuminate\Http\Middleware\FrameGuard;
use Mockery as m;

class FrameGuardTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\Middleware\FrameGuard
*/
protected $frameGuard;

public function setUp()
{
    parent::setUp();

    $this->frameGuard = new \Illuminate\Http\Middleware\FrameGuard();
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->frameGuard->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
