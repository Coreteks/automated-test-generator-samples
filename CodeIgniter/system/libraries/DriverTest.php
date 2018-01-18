<?php

namespace tests;

use CI_Driver;
use Mockery as m;

class CI_DriverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Driver
*/
protected $cI_Driver;

public function setUp()
{
    parent::setUp();

    $this->cI_Driver = new \CI_Driver();
}

public function testDecorate0()
{
    $parent = m::mock('UntypedParameter_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$_reflections[$class_name])) == false (line 256)

    $actual = $this->cI_Driver->decorate($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecorate1()
{
    $parent = m::mock('UntypedParameter_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$_reflections[$class_name])) == true (line 256)

    $actual = $this->cI_Driver->decorate($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecorate2()
{
    $parent = m::mock('UntypedParameter_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$_reflections[$class_name])) == true (line 256)
    // if ($prop->isPublic()) == false (line 270)

    $actual = $this->cI_Driver->decorate($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecorate3()
{
    $parent = m::mock('UntypedParameter_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$_reflections[$class_name])) == true (line 256)
    // if ($prop->isPublic()) == true (line 270)

    $actual = $this->cI_Driver->decorate($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecorate4()
{
    $parent = m::mock('UntypedParameter_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$_reflections[$class_name])) == true (line 256)
    // if ($method->isPublic()) == false (line 262)

    $actual = $this->cI_Driver->decorate($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecorate5()
{
    $parent = m::mock('UntypedParameter_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$_reflections[$class_name])) == true (line 256)
    // if ($method->isPublic()) == false (line 262)
    // if ($prop->isPublic()) == false (line 270)

    $actual = $this->cI_Driver->decorate($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecorate6()
{
    $parent = m::mock('UntypedParameter_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$_reflections[$class_name])) == true (line 256)
    // if ($method->isPublic()) == false (line 262)
    // if ($prop->isPublic()) == true (line 270)

    $actual = $this->cI_Driver->decorate($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecorate7()
{
    $parent = m::mock('UntypedParameter_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$_reflections[$class_name])) == true (line 256)
    // if ($method->isPublic()) == true (line 262)

    $actual = $this->cI_Driver->decorate($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecorate8()
{
    $parent = m::mock('UntypedParameter_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$_reflections[$class_name])) == true (line 256)
    // if ($method->isPublic()) == true (line 262)
    // if ($prop->isPublic()) == false (line 270)

    $actual = $this->cI_Driver->decorate($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecorate9()
{
    $parent = m::mock('UntypedParameter_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(self::$_reflections[$class_name])) == true (line 256)
    // if ($method->isPublic()) == true (line 262)
    // if ($prop->isPublic()) == true (line 270)

    $actual = $this->cI_Driver->decorate($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($method, $this->_methods)) == false (line 297)
    // throw new \BadMethodCallException('No such method: ' . $method . '()') -> exception (line 302)

    $actual = $this->cI_Driver->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($method, $this->_methods)) == true (line 297)

    $actual = $this->cI_Driver->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $var = m::mock('UntypedParameter_var_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($var, $this->_properties)) == false (line 317)

    $actual = $this->cI_Driver->__get($var);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $var = m::mock('UntypedParameter_var_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($var, $this->_properties)) == true (line 317)

    $actual = $this->cI_Driver->__get($var);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $var = m::mock('UntypedParameter_var_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($var, $this->_properties)) == false (line 336)

    $actual = $this->cI_Driver->__set($var, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set1()
{
    $var = m::mock('UntypedParameter_var_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($var, $this->_properties)) == true (line 336)

    $actual = $this->cI_Driver->__set($var, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
