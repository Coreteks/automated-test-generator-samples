<?php

namespace tests\Mockery\Generator;

use Mockery as m;
use Mockery\Generator\Method;
use ReflectionMethod;

class MethodTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_method;
/**
* @var \Mockery\Generator\Method
*/
protected $method;

public function setUp()
{
    parent::setUp();

    $this->_method = m::mock(\ReflectionMethod::class);
    $this->method = new \Mockery\Generator\Method($this->_method);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->method->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParameters0()
{
    // TODO: Your mock expectations here

    $actual = $this->method->getParameters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReturnType0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->method->hasReturnType()) == false (line 46)

    $actual = $this->method->getReturnType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReturnType1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->method->hasReturnType()) == true (line 46)
    // if ('self' === $returnType) == false (line 49)
    // if (version_compare(PHP_VERSION, '7.1.0-dev') >= 0 && $this->method->getReturnType()->allowsNull()) == false (line 53)

    $actual = $this->method->getReturnType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReturnType2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->method->hasReturnType()) == true (line 46)
    // if ('self' === $returnType) == false (line 49)
    // if (version_compare(PHP_VERSION, '7.1.0-dev') >= 0 && $this->method->getReturnType()->allowsNull()) == true (line 53)

    $actual = $this->method->getReturnType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReturnType3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->method->hasReturnType()) == true (line 46)
    // if ('self' === $returnType) == true (line 49)
    // if (version_compare(PHP_VERSION, '7.1.0-dev') >= 0 && $this->method->getReturnType()->allowsNull()) == false (line 53)

    $actual = $this->method->getReturnType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReturnType4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') >= 0 && $this->method->hasReturnType()) == true (line 46)
    // if ('self' === $returnType) == true (line 49)
    // if (version_compare(PHP_VERSION, '7.1.0-dev') >= 0 && $this->method->getReturnType()->allowsNull()) == true (line 53)

    $actual = $this->method->getReturnType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
