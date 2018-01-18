<?php

namespace tests\Illuminate\Database\Eloquent;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factory;
use Mockery as m;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_faker;
/**
* @var \Illuminate\Database\Eloquent\Factory
*/
protected $factory;

public function setUp()
{
    parent::setUp();

    $this->_faker = m::mock(\Faker\Generator::class);
    $this->factory = new \Illuminate\Database\Eloquent\Factory($this->_faker);
}

public function testConstruct0()
{
    $faker = m::mock(\Faker\Generator::class);
    $pathToFactories = m::mock('UntypedParameter_pathToFactories_');

    // TODO: Your mock expectations here

    $actual = $this->factory->construct($faker, $pathToFactories);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDefineAs0()
{
    $class = m::mock('UntypedParameter_class_');
    $name = m::mock('UntypedParameter_name_');
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    $actual = $this->factory->defineAs($class, $name, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDefine0()
{
    $class = m::mock('UntypedParameter_class_');
    $attributes = m::mock('UntypedParameter_attributes_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->factory->define($class, $attributes, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testState0()
{
    $class = m::mock('UntypedParameter_class_');
    $state = m::mock('UntypedParameter_state_');
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    $actual = $this->factory->state($class, $state, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate0()
{
    $class = m::mock('UntypedParameter_class_');
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->factory->create($class, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateAs0()
{
    $class = m::mock('UntypedParameter_class_');
    $name = m::mock('UntypedParameter_name_');
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->factory->createAs($class, $name, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake0()
{
    $class = m::mock('UntypedParameter_class_');
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->factory->make($class, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeAs0()
{
    $class = m::mock('UntypedParameter_class_');
    $name = m::mock('UntypedParameter_name_');
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->factory->makeAs($class, $name, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRawOf0()
{
    $class = m::mock('UntypedParameter_class_');
    $name = m::mock('UntypedParameter_name_');
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->factory->rawOf($class, $name, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRaw0()
{
    $class = m::mock('UntypedParameter_class_');
    $attributes = [];
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->factory->raw($class, $attributes, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOf0()
{
    $class = m::mock('UntypedParameter_class_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->factory->of($class, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_dir($path)) == false (line 200)

    $actual = $this->factory->load($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_dir($path)) == true (line 200)

    $actual = $this->factory->load($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_dir($path)) == true (line 200)

    $actual = $this->factory->load($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->factory->offsetExists($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->factory->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $offset = m::mock('UntypedParameter_offset_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->factory->offsetSet($offset, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->factory->offsetUnset($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
