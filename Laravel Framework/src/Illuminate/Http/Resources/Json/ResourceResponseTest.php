<?php

namespace tests\Illuminate\Http\Resources\Json;

use Illuminate\Http\Resources\Json\ResourceResponse;
use Mockery as m;

class ResourceResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_resource = null;
/**
* @var \Illuminate\Http\Resources\Json\ResourceResponse
*/
protected $resourceResponse;

public function setUp()
{
    parent::setUp();

    $this->_resource = null;
    $this->resourceResponse = new \Illuminate\Http\Resources\Json\ResourceResponse($this->_resource);
}

public function testToResponse0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->resourceResponse->toResponse($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
