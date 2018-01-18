<?php

namespace tests\Mockery\Generator;

use Mockery as m;
use Mockery\Generator\UndefinedTargetClass;

class UndefinedTargetClassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Mockery\Generator\UndefinedTargetClass
*/
protected $undefinedTargetClass;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->undefinedTargetClass = new \Mockery\Generator\UndefinedTargetClass($this->_name);
}

public function testFactory0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->factory($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsAbstract0()
{
    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->isAbstract();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFinal0()
{
    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->isFinal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethods0()
{
    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->getMethods();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInterfaces0()
{
    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->getInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespaceName0()
{
    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->getNamespaceName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInNamespace0()
{
    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->inNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortName0()
{
    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->getShortName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImplementsInterface0()
{
    $interface = m::mock('UntypedParameter_interface_');

    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->implementsInterface($interface);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasInternalAncestor0()
{
    // TODO: Your mock expectations here

    $actual = $this->undefinedTargetClass->hasInternalAncestor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
