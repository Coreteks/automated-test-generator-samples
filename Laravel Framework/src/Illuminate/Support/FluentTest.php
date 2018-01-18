<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\Fluent;
use Mockery as m;

class FluentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_attributes = null;
/**
* @var \Illuminate\Support\Fluent
*/
protected $fluent;

public function setUp()
{
    parent::setUp();

    $this->_attributes = null;
    $this->fluent = new \Illuminate\Support\Fluent($this->_attributes);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->attributes)) == false (line 41)

    $actual = $this->fluent->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->attributes)) == true (line 41)

    $actual = $this->fluent->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAttributes0()
{
    // TODO: Your mock expectations here

    $actual = $this->fluent->getAttributes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->fluent->toArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->fluent->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToJson0()
{
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->fluent->toJson($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->fluent->offsetExists($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->fluent->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $offset = m::mock('UntypedParameter_offset_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->fluent->offsetSet($offset, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->fluent->offsetUnset($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->fluent->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->fluent->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->fluent->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->fluent->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->fluent->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
