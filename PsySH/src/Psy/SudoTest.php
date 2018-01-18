<?php

namespace tests\Psy;

use Mockery as m;
use Psy\Sudo;

class SudoTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Sudo
*/
protected $sudo;

public function setUp()
{
    parent::setUp();

    $this->sudo = new \Psy\Sudo();
}

public function testFetchProperty0()
{
    $object = m::mock('UntypedParameter_object_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    $actual = $this->sudo->fetchProperty($object, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssignProperty0()
{
    $object = m::mock('UntypedParameter_object_');
    $property = m::mock('UntypedParameter_property_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->sudo->assignProperty($object, $property, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCallMethod0()
{
    $object = m::mock('UntypedParameter_object_');
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->sudo->callMethod($object, $method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetchStaticProperty0()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    $actual = $this->sudo->fetchStaticProperty($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssignStaticProperty0()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->sudo->assignStaticProperty($class, $property, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCallStatic0()
{
    $class = m::mock('UntypedParameter_class_');
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->sudo->callStatic($class, $method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetchClassConst0()
{
    $class = m::mock('UntypedParameter_class_');
    $const = m::mock('UntypedParameter_const_');

    // TODO: Your mock expectations here

    $actual = $this->sudo->fetchClassConst($class, $const);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
