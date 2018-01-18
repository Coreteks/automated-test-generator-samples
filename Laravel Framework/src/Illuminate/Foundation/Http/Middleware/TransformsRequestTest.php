<?php

namespace tests\Illuminate\Foundation\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TransformsRequest;
use Mockery as m;

class TransformsRequestTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Http\Middleware\TransformsRequest
*/
protected $transformsRequest;

public function setUp()
{
    parent::setUp();

    $this->transformsRequest = new \Illuminate\Foundation\Http\Middleware\TransformsRequest();
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    $actual = $this->transformsRequest->handle($request, $next, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
