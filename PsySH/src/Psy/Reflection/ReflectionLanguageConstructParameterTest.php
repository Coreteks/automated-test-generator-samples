<?php

namespace tests\Psy\Reflection;

use Mockery as m;
use Psy\Reflection\ReflectionLanguageConstructParameter;

class ReflectionLanguageConstructParameterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_function = null;
/**
* @var mixed
*/
protected $_parameter = null;
/**
* @var array
*/
protected $_opts = [];
/**
* @var \Psy\Reflection\ReflectionLanguageConstructParameter
*/
protected $reflectionLanguageConstructParameter;

public function setUp()
{
    parent::setUp();

    $this->_function = null;
    $this->_parameter = null;
    $this->_opts = [];
    $this->reflectionLanguageConstructParameter = new \Psy\Reflection\ReflectionLanguageConstructParameter($this->_function, $this->_parameter, $this->_opts);
}

public function testGetClass0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstructParameter->getClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstructParameter->isArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultValue0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isDefaultValueAvailable()) == false (line 57)

    $actual = $this->reflectionLanguageConstructParameter->getDefaultValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultValue1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isDefaultValueAvailable()) == true (line 57)

    $actual = $this->reflectionLanguageConstructParameter->getDefaultValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstructParameter->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsOptional0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstructParameter->isOptional();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsDefaultValueAvailable0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstructParameter->isDefaultValueAvailable();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsPassedByReference0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstructParameter->isPassedByReference();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
