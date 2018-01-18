<?php

namespace tests\Illuminate\Http\Resources\Json;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Mockery as m;

class AnonymousResourceCollectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_resource = null;
/**
* @var mixed
*/
protected $_collects = null;
/**
* @var \Illuminate\Http\Resources\Json\AnonymousResourceCollection
*/
protected $anonymousResourceCollection;

public function setUp()
{
    parent::setUp();

    $this->_resource = null;
    $this->_collects = null;
    $this->anonymousResourceCollection = new \Illuminate\Http\Resources\Json\AnonymousResourceCollection($this->_resource, $this->_collects);
}
}
