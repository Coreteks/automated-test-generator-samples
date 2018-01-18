<?php

namespace tests\Illuminate\Http\Resources\Json;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Mockery as m;

class ResourceCollectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_resource = null;
/**
* @var \Illuminate\Http\Resources\Json\ResourceCollection
*/
protected $resourceCollection;

public function setUp()
{
    parent::setUp();

    $this->_resource = null;
    $this->resourceCollection = new \Illuminate\Http\Resources\Json\ResourceCollection($this->_resource);
}

public function testToArray0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->resourceCollection->toArray($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->resourceCollection->toResponse($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
