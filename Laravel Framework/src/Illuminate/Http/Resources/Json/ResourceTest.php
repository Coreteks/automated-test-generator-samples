<?php

namespace tests\Illuminate\Http\Resources\Json;

use Illuminate\Http\Resources\Json\Resource;
use Mockery as m;

class ResourceTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_resource = null;
/**
* @var \Illuminate\Http\Resources\Json\Resource
*/
protected $resource;

public function setUp()
{
    parent::setUp();

    $this->_resource = null;
    $this->resource = new \Illuminate\Http\Resources\Json\Resource($this->_resource);
}

public function testMake0()
{
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->resource->make($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollection0()
{
    $resource = m::mock('UntypedParameter_resource_');

    // TODO: Your mock expectations here

    $actual = $this->resource->collection($resource);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($data)) == false (line 94)
    // if ($data instanceof \Illuminate\Contracts\Support\Arrayable || $data instanceof \Illuminate\Support\Collection) == false (line 96)
    // if ($data instanceof \JsonSerializable) == false (line 98)

    $actual = $this->resource->resolve($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($data)) == false (line 94)
    // if ($data instanceof \Illuminate\Contracts\Support\Arrayable || $data instanceof \Illuminate\Support\Collection) == false (line 96)
    // if ($data instanceof \JsonSerializable) == true (line 98)

    $actual = $this->resource->resolve($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($data)) == false (line 94)
    // if ($data instanceof \Illuminate\Contracts\Support\Arrayable || $data instanceof \Illuminate\Support\Collection) == true (line 96)

    $actual = $this->resource->resolve($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($data)) == true (line 94)

    $actual = $this->resource->resolve($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->resource->toArray($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWith0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->resource->with($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdditional0()
{
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->resource->additional($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithResponse0()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    $actual = $this->resource->withResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrap0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->resource->wrap($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithoutWrapping0()
{
    // TODO: Your mock expectations here

    $actual = $this->resource->withoutWrapping();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResponse0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->resource->response($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->resource->toResponse($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->resource->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
