<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\CompositeExpectation;

class CompositeExpectationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\CompositeExpectation
*/
protected $compositeExpectation;

public function setUp()
{
    parent::setUp();

    $this->compositeExpectation = new \Mockery\CompositeExpectation();
}

public function testAdd0()
{
    $expectation = m::mock('UntypedParameter_expectation_');

    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->add($expectation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturn0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->andReturn($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturns0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->andReturns($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = [];

    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $args = [];

    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOrderNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->getOrderNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMock0()
{
    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->getMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMock0()
{
    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->mock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldReceive0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->shouldReceive($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString1()
{
    // TODO: Your mock expectations here

    $actual = $this->compositeExpectation->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
