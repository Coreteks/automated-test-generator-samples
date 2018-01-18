<?php

namespace tests\Illuminate\Http\Resources\Json;

use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Mockery as m;

class PaginatedResourceResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\Resources\Json\PaginatedResourceResponse
*/
protected $paginatedResourceResponse;

public function setUp()
{
    parent::setUp();

    $this->paginatedResourceResponse = new \Illuminate\Http\Resources\Json\PaginatedResourceResponse();
}

public function testToResponse0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->paginatedResourceResponse->toResponse($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
