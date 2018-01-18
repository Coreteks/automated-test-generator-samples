<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\HigherOrderCollectionProxy;
use Mockery as m;

class HigherOrderCollectionProxyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_collection;
/**
* @var mixed
*/
protected $_method = null;
/**
* @var \Illuminate\Support\HigherOrderCollectionProxy
*/
protected $higherOrderCollectionProxy;

public function setUp()
{
    parent::setUp();

    $this->_collection = m::mock(\Illuminate\Support\Collection::class);
    $this->_method = null;
    $this->higherOrderCollectionProxy = new \Illuminate\Support\HigherOrderCollectionProxy($this->_collection, $this->_method);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->higherOrderCollectionProxy->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->higherOrderCollectionProxy->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
