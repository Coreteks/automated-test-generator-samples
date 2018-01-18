<?php

namespace tests;

use Mockery as m;
use SimplePie_Registry;

class SimplePie_RegistryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \SimplePie_Registry
*/
protected $simplePie_Registry;

public function setUp()
{
    parent::setUp();

    $this->simplePie_Registry = new \SimplePie_Registry();
}

public function testRegister0()
{
    $type = m::mock('UntypedParameter_type_');
    $class = m::mock('UntypedParameter_class_');
    $legacy = m::mock('UntypedParameter_legacy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_subclass_of($class, $this->default[$type])) == false (line 116)
    // if ($legacy) == false (line 123)

    $actual = $this->simplePie_Registry->register($type, $class, $legacy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $type = m::mock('UntypedParameter_type_');
    $class = m::mock('UntypedParameter_class_');
    $legacy = m::mock('UntypedParameter_legacy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_subclass_of($class, $this->default[$type])) == false (line 116)
    // if ($legacy) == true (line 123)

    $actual = $this->simplePie_Registry->register($type, $class, $legacy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister2()
{
    $type = m::mock('UntypedParameter_type_');
    $class = m::mock('UntypedParameter_class_');
    $legacy = m::mock('UntypedParameter_legacy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_subclass_of($class, $this->default[$type])) == true (line 116)

    $actual = $this->simplePie_Registry->register($type, $class, $legacy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_class0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->classes[$type])) == false (line 141)
    // if (!empty($this->default[$type])) == false (line 145)

    $actual = $this->simplePie_Registry->get_class($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_class1()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->classes[$type])) == false (line 141)
    // if (!empty($this->default[$type])) == true (line 145)

    $actual = $this->simplePie_Registry->get_class($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_class2()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->classes[$type])) == true (line 141)

    $actual = $this->simplePie_Registry->get_class($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate0()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == false (line 164)
    // if (!\method_exists($class, '__construct')) == false (line 177)
    // if (\method_exists($instance, 'set_registry')) == false (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate1()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == false (line 164)
    // if (!\method_exists($class, '__construct')) == false (line 177)
    // if (\method_exists($instance, 'set_registry')) == true (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate2()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == false (line 164)
    // if (!\method_exists($class, '__construct')) == true (line 177)
    // if (\method_exists($instance, 'set_registry')) == false (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate3()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == false (line 164)
    // if (!\method_exists($class, '__construct')) == true (line 177)
    // if (\method_exists($instance, 'set_registry')) == true (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate4()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 164)
    // switch ($type) (line 166)
    // Case 'locator' == false (line 168)
    // if (!\method_exists($class, '__construct')) == false (line 177)
    // if (\method_exists($instance, 'set_registry')) == false (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate5()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 164)
    // switch ($type) (line 166)
    // Case 'locator' == false (line 168)
    // if (!\method_exists($class, '__construct')) == false (line 177)
    // if (\method_exists($instance, 'set_registry')) == true (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate6()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 164)
    // switch ($type) (line 166)
    // Case 'locator' == false (line 168)
    // if (!\method_exists($class, '__construct')) == true (line 177)
    // if (\method_exists($instance, 'set_registry')) == false (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate7()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 164)
    // switch ($type) (line 166)
    // Case 'locator' == false (line 168)
    // if (!\method_exists($class, '__construct')) == true (line 177)
    // if (\method_exists($instance, 'set_registry')) == true (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate8()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 164)
    // switch ($type) (line 166)
    // Case 'locator' == true (line 168)
    // if (!\method_exists($class, '__construct')) == false (line 177)
    // if (\method_exists($instance, 'set_registry')) == false (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate9()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 164)
    // switch ($type) (line 166)
    // Case 'locator' == true (line 168)
    // if (!\method_exists($class, '__construct')) == false (line 177)
    // if (\method_exists($instance, 'set_registry')) == true (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate10()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 164)
    // switch ($type) (line 166)
    // Case 'locator' == true (line 168)
    // if (!\method_exists($class, '__construct')) == true (line 177)
    // if (\method_exists($instance, 'set_registry')) == false (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate11()
{
    $type = m::mock('UntypedParameter_type_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 164)
    // switch ($type) (line 166)
    // Case 'locator' == true (line 168)
    // if (!\method_exists($class, '__construct')) == true (line 177)
    // if (\method_exists($instance, 'set_registry')) == true (line 187)

    $actual = $this->simplePie_Registry->create($type, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall0()
{
    $type = m::mock('UntypedParameter_type_');
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == false (line 206)

    $actual = $this->simplePie_Registry->call($type, $method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall1()
{
    $type = m::mock('UntypedParameter_type_');
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 206)
    // switch ($type) (line 208)
    // Case 'Cache' == false (line 210)

    $actual = $this->simplePie_Registry->call($type, $method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall2()
{
    $type = m::mock('UntypedParameter_type_');
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 206)
    // switch ($type) (line 208)
    // Case 'Cache' == true (line 210)
    // if ($method === 'get_handler') == false (line 213)

    $actual = $this->simplePie_Registry->call($type, $method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall3()
{
    $type = m::mock('UntypedParameter_type_');
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($class, $this->legacy)) == true (line 206)
    // switch ($type) (line 208)
    // Case 'Cache' == true (line 210)
    // if ($method === 'get_handler') == true (line 213)

    $actual = $this->simplePie_Registry->call($type, $method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
