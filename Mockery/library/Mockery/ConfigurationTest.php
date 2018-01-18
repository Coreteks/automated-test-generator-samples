<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\Configuration;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Configuration
*/
protected $configuration;

public function setUp()
{
    parent::setUp();

    $this->configuration = new \Mockery\Configuration();
}

public function testAllowMockingNonExistentMethods0()
{
    $flag = m::mock('UntypedParameter_flag_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->allowMockingNonExistentMethods($flag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockingNonExistentMethodsAllowed0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->mockingNonExistentMethodsAllowed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllowMockingMethodsUnnecessarily0()
{
    $flag = m::mock('UntypedParameter_flag_');

    // TODO: Your mock expectations here

    $actual = $this->configuration->allowMockingMethodsUnnecessarily($flag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockingMethodsUnnecessarilyAllowed0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->mockingMethodsUnnecessarilyAllowed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetInternalClassMethodParamMap0()
{
    $class = m::mock('UntypedParameter_class_');
    $method = m::mock('UntypedParameter_method_');
    $map = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_internalClassParamMap[strtolower($class)])) == false (line 106)

    $actual = $this->configuration->setInternalClassMethodParamMap($class, $method, $map);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetInternalClassMethodParamMap1()
{
    $class = m::mock('UntypedParameter_class_');
    $method = m::mock('UntypedParameter_method_');
    $map = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_internalClassParamMap[strtolower($class)])) == true (line 106)

    $actual = $this->configuration->setInternalClassMethodParamMap($class, $method, $map);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResetInternalClassMethodParamMaps0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->resetInternalClassMethodParamMaps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInternalClassMethodParamMap0()
{
    $class = m::mock('UntypedParameter_class_');
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_internalClassParamMap[strtolower($class)][strtolower($method)])) == false (line 127)

    $actual = $this->configuration->getInternalClassMethodParamMap($class, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInternalClassMethodParamMap1()
{
    $class = m::mock('UntypedParameter_class_');
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_internalClassParamMap[strtolower($class)][strtolower($method)])) == true (line 127)

    $actual = $this->configuration->getInternalClassMethodParamMap($class, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInternalClassMethodParamMaps0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getInternalClassMethodParamMaps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
