<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\HigherOrderTapProxy;
use Mockery as m;

class HigherOrderTapProxyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_target = null;
/**
* @var \Illuminate\Support\HigherOrderTapProxy
*/
protected $higherOrderTapProxy;

public function setUp()
{
    parent::setUp();

    $this->_target = null;
    $this->higherOrderTapProxy = new \Illuminate\Support\HigherOrderTapProxy($this->_target);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->higherOrderTapProxy->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
