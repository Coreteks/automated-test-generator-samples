<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\ViewErrorBag;
use Mockery as m;

class ViewErrorBagTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\ViewErrorBag
*/
protected $viewErrorBag;

public function setUp()
{
    parent::setUp();

    $this->viewErrorBag = new \Illuminate\Support\ViewErrorBag();
}

public function testHasBag0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->viewErrorBag->hasBag($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBag0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->viewErrorBag->getBag($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBags0()
{
    // TODO: Your mock expectations here

    $actual = $this->viewErrorBag->getBags();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $key = m::mock('UntypedParameter_key_');
    $bag = m::mock(\Illuminate\Contracts\Support\MessageBag::class);

    // TODO: Your mock expectations here

    $actual = $this->viewErrorBag->put($key, $bag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAny0()
{
    // TODO: Your mock expectations here

    $actual = $this->viewErrorBag->any();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->viewErrorBag->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->viewErrorBag->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->viewErrorBag->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->viewErrorBag->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->viewErrorBag->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
