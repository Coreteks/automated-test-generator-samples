<?php

namespace tests\Mockery\Generator;

use Mockery as m;
use Mockery\Generator\DefinedTargetClass;
use ReflectionClass;

class DefinedTargetClassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_rfc;
/**
* @var \Mockery\Generator\DefinedTargetClass
*/
protected $definedTargetClass;

public function setUp()
{
    parent::setUp();

    $this->_rfc = m::mock(\ReflectionClass::class);
    $this->definedTargetClass = new \Mockery\Generator\DefinedTargetClass($this->_rfc);
}

public function testFactory0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->factory($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsAbstract0()
{
    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->isAbstract();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFinal0()
{
    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->isFinal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethods0()
{
    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->getMethods();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInterfaces0()
{
    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->getInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespaceName0()
{
    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->getNamespaceName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInNamespace0()
{
    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->inNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortName0()
{
    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->getShortName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImplementsInterface0()
{
    $interface = m::mock('UntypedParameter_interface_');

    // TODO: Your mock expectations here

    $actual = $this->definedTargetClass->implementsInterface($interface);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasInternalAncestor0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->rfc->isInternal()) == false (line 94)
    // while ($parent = $child->getParentClass()) == false (line 99)

    $actual = $this->definedTargetClass->hasInternalAncestor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasInternalAncestor1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->rfc->isInternal()) == false (line 94)
    // while ($parent = $child->getParentClass()) == true (line 99)
    // if ($parent->isInternal()) == false (line 100)
    // while ($parent = $child->getParentClass()) == false (line 99)

    $actual = $this->definedTargetClass->hasInternalAncestor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasInternalAncestor2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->rfc->isInternal()) == false (line 94)
    // while ($parent = $child->getParentClass()) == true (line 99)
    // if ($parent->isInternal()) == true (line 100)

    $actual = $this->definedTargetClass->hasInternalAncestor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasInternalAncestor3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->rfc->isInternal()) == true (line 94)

    $actual = $this->definedTargetClass->hasInternalAncestor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
