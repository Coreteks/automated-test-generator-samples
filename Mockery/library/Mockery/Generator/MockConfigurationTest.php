<?php

namespace tests\Mockery\Generator;

use Mockery as m;
use Mockery\Generator\MockConfiguration;

class MockConfigurationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_targets = [];
/**
* @var array
*/
protected $_blackListedMethods = [];
/**
* @var array
*/
protected $_whiteListedMethods = [];
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_instanceMock = null;
/**
* @var array
*/
protected $_parameterOverrides = [];
/**
* @var mixed
*/
protected $_mockOriginalDestructor = null;
/**
* @var \Mockery\Generator\MockConfiguration
*/
protected $mockConfiguration;

public function setUp()
{
    parent::setUp();

    $this->_targets = [];
    $this->_blackListedMethods = [];
    $this->_whiteListedMethods = [];
    $this->_name = null;
    $this->_instanceMock = null;
    $this->_parameterOverrides = [];
    $this->_mockOriginalDestructor = null;
    $this->mockConfiguration = new \Mockery\Generator\MockConfiguration($this->_targets, $this->_blackListedMethods, $this->_whiteListedMethods, $this->_name, $this->_instanceMock, $this->_parameterOverrides, $this->_mockOriginalDestructor);
}

public function testGetHash0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->getHash();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == false (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == false (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == false (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == true (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == true (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == false (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == true (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == true (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->getWhiteListedMethods())) == true (line 155)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isFinal()) == false (line 147)
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == false (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == false (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isFinal()) == false (line 147)
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == false (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == true (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isFinal()) == false (line 147)
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == true (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == false (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isFinal()) == false (line 147)
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == true (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == true (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isFinal()) == false (line 147)
    // if (count($this->getWhiteListedMethods())) == true (line 155)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isFinal()) == true (line 147)
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == false (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == false (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isFinal()) == true (line 147)
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == false (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == true (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isFinal()) == true (line 147)
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == true (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == false (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isFinal()) == true (line 147)
    // if (count($this->getWhiteListedMethods())) == false (line 155)
    // if (count($this->getBlackListedMethods())) == true (line 167)
    // if ($this->getTargetClass() && $this->getTargetClass()->implementsInterface("Serializable") && $this->getTargetClass()->hasInternalAncestor()) == true (line 180)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodsToMock14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isFinal()) == true (line 147)
    // if (count($this->getWhiteListedMethods())) == true (line 155)

    $actual = $this->mockConfiguration->getMethodsToMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequiresCallTypeHintRemoval0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->requiresCallTypeHintRemoval();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequiresCallTypeHintRemoval1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ("__call" === $method->getName()) == false (line 198)

    $actual = $this->mockConfiguration->requiresCallTypeHintRemoval();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequiresCallTypeHintRemoval2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ("__call" === $method->getName()) == true (line 198)

    $actual = $this->mockConfiguration->requiresCallTypeHintRemoval();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequiresCallStaticTypeHintRemoval0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->requiresCallStaticTypeHintRemoval();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequiresCallStaticTypeHintRemoval1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ("__callStatic" === $method->getName()) == false (line 214)

    $actual = $this->mockConfiguration->requiresCallStaticTypeHintRemoval();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequiresCallStaticTypeHintRemoval2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ("__callStatic" === $method->getName()) == true (line 214)

    $actual = $this->mockConfiguration->requiresCallStaticTypeHintRemoval();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename0()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == false (line 227)
    // if ($this->targetInterfaceNames) == false (line 231)
    // if ($this->targetTraitNames) == false (line 235)
    // if ($this->targetObject) == false (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename1()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == false (line 227)
    // if ($this->targetInterfaceNames) == false (line 231)
    // if ($this->targetTraitNames) == false (line 235)
    // if ($this->targetObject) == true (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename2()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == false (line 227)
    // if ($this->targetInterfaceNames) == false (line 231)
    // if ($this->targetTraitNames) == true (line 235)
    // if ($this->targetObject) == false (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename3()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == false (line 227)
    // if ($this->targetInterfaceNames) == false (line 231)
    // if ($this->targetTraitNames) == true (line 235)
    // if ($this->targetObject) == true (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename4()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == false (line 227)
    // if ($this->targetInterfaceNames) == true (line 231)
    // if ($this->targetTraitNames) == false (line 235)
    // if ($this->targetObject) == false (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename5()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == false (line 227)
    // if ($this->targetInterfaceNames) == true (line 231)
    // if ($this->targetTraitNames) == false (line 235)
    // if ($this->targetObject) == true (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename6()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == false (line 227)
    // if ($this->targetInterfaceNames) == true (line 231)
    // if ($this->targetTraitNames) == true (line 235)
    // if ($this->targetObject) == false (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename7()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == false (line 227)
    // if ($this->targetInterfaceNames) == true (line 231)
    // if ($this->targetTraitNames) == true (line 235)
    // if ($this->targetObject) == true (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename8()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == true (line 227)
    // if ($this->targetInterfaceNames) == false (line 231)
    // if ($this->targetTraitNames) == false (line 235)
    // if ($this->targetObject) == false (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename9()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == true (line 227)
    // if ($this->targetInterfaceNames) == false (line 231)
    // if ($this->targetTraitNames) == false (line 235)
    // if ($this->targetObject) == true (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename10()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == true (line 227)
    // if ($this->targetInterfaceNames) == false (line 231)
    // if ($this->targetTraitNames) == true (line 235)
    // if ($this->targetObject) == false (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename11()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == true (line 227)
    // if ($this->targetInterfaceNames) == false (line 231)
    // if ($this->targetTraitNames) == true (line 235)
    // if ($this->targetObject) == true (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename12()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == true (line 227)
    // if ($this->targetInterfaceNames) == true (line 231)
    // if ($this->targetTraitNames) == false (line 235)
    // if ($this->targetObject) == false (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename13()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == true (line 227)
    // if ($this->targetInterfaceNames) == true (line 231)
    // if ($this->targetTraitNames) == false (line 235)
    // if ($this->targetObject) == true (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename14()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == true (line 227)
    // if ($this->targetInterfaceNames) == true (line 231)
    // if ($this->targetTraitNames) == true (line 235)
    // if ($this->targetObject) == false (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename15()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClassName) == true (line 227)
    // if ($this->targetInterfaceNames) == true (line 231)
    // if ($this->targetTraitNames) == true (line 235)
    // if ($this->targetObject) == true (line 239)

    $actual = $this->mockConfiguration->rename($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetClassName0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->getTargetClassName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetClass0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClass) == false (line 309)
    // if (!$this->targetClassName) == false (line 313)
    // if (class_exists($this->targetClassName)) == false (line 317)

    $actual = $this->mockConfiguration->getTargetClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetClass1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClass) == false (line 309)
    // if (!$this->targetClassName) == false (line 313)
    // if (class_exists($this->targetClassName)) == true (line 317)
    // if ($this->getTargetObject() == false && $dtc->isFinal()) == false (line 320)

    $actual = $this->mockConfiguration->getTargetClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Mockery\Exception
 */
public function testGetTargetClass2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClass) == false (line 309)
    // if (!$this->targetClassName) == false (line 313)
    // if (class_exists($this->targetClassName)) == true (line 317)
    // if ($this->getTargetObject() == false && $dtc->isFinal()) == true (line 320)
    // throw new \Mockery\Exception('The class ' . $this->targetClassName . ' is marked final and its methods' . ' cannot be replaced. Classes marked final can be passed in' . ' to \\Mockery::mock() as instantiated objects to create a' . ' partial mock, but only if the mock is not subject to type' . ' hinting checks.') -> exception (line 321)

    $actual = $this->mockConfiguration->getTargetClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetClass3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClass) == false (line 309)
    // if (!$this->targetClassName) == true (line 313)

    $actual = $this->mockConfiguration->getTargetClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetClass4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->targetClass) == true (line 309)

    $actual = $this->mockConfiguration->getTargetClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetTraits0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetTraits)) == false (line 340)

    $actual = $this->mockConfiguration->getTargetTraits();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetTraits1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetTraits)) == false (line 340)

    $actual = $this->mockConfiguration->getTargetTraits();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetTraits2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetTraits)) == true (line 340)

    $actual = $this->mockConfiguration->getTargetTraits();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == false (line 378)
    // if (preg_match("/^\\\\?Traversable\$/i", $interface)) == false (line 381)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == false (line 378)
    // if (preg_match("/^\\\\?Traversable\$/i", $interface)) == false (line 381)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == false (line 378)
    // if (preg_match("/^\\\\?Traversable\$/i", $interface)) == false (line 381)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == false (line 378)
    // if (preg_match("/^\\\\?Traversable\$/i", $interface)) == false (line 381)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == false (line 378)
    // if (preg_match("/^\\\\?Traversable\$/i", $interface)) == true (line 381)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == false (line 378)
    // if (preg_match("/^\\\\?Traversable\$/i", $interface)) == true (line 381)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == false (line 378)
    // if (preg_match("/^\\\\?Traversable\$/i", $interface)) == true (line 381)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == false (line 378)
    // if (preg_match("/^\\\\?Traversable\$/i", $interface)) == true (line 381)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == true (line 378)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == true (line 378)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == true (line 378)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == false (line 375)
    // if (preg_match("/^\\\\?Iterator\$/i", $interface)) == true (line 378)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == true (line 375)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == true (line 375)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == true (line 375)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == false (line 371)
    // if (preg_match("/^\\\\?IteratorAggregate\$/i", $interface)) == true (line 375)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == true (line 371)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == true (line 371)
    // if ($traversableFound && !$iteratorShiftedToFront) == false (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == true (line 371)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == false (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == false (line 359)
    // if (!$traversableFound && preg_match("/^\\?Iterator(|Aggregate)\$/i", $interface)) == true (line 371)
    // if ($traversableFound && !$iteratorShiftedToFront) == true (line 386)
    // if (!preg_match("/^\\\\?Traversable\$/i", $targetInterface)) == true (line 393)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == false (line 354)
    // if (!interface_exists($targetInterface)) == true (line 359)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetInterfaces26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->targetInterfaces)) == true (line 354)

    $actual = $this->mockConfiguration->getTargetInterfaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargetObject0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->getTargetObject();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateName0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getTargetObject()) == false (line 418)
    // if ($this->getTargetClass()) == false (line 422)
    // if ($this->getTargetInterfaces()) == false (line 426)

    $actual = $this->mockConfiguration->generateName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateName1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getTargetObject()) == false (line 418)
    // if ($this->getTargetClass()) == false (line 422)
    // if ($this->getTargetInterfaces()) == true (line 426)

    $actual = $this->mockConfiguration->generateName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateName2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getTargetObject()) == false (line 418)
    // if ($this->getTargetClass()) == true (line 422)
    // if ($this->getTargetInterfaces()) == false (line 426)

    $actual = $this->mockConfiguration->generateName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateName3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getTargetObject()) == false (line 418)
    // if ($this->getTargetClass()) == true (line 422)
    // if ($this->getTargetInterfaces()) == true (line 426)

    $actual = $this->mockConfiguration->generateName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateName4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getTargetObject()) == true (line 418)
    // if ($this->getTargetClass()) == false (line 422)
    // if ($this->getTargetInterfaces()) == false (line 426)

    $actual = $this->mockConfiguration->generateName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateName5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getTargetObject()) == true (line 418)
    // if ($this->getTargetClass()) == false (line 422)
    // if ($this->getTargetInterfaces()) == true (line 426)

    $actual = $this->mockConfiguration->generateName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateName6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getTargetObject()) == true (line 418)
    // if ($this->getTargetClass()) == true (line 422)
    // if ($this->getTargetInterfaces()) == false (line 426)

    $actual = $this->mockConfiguration->generateName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateName7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getTargetObject()) == true (line 418)
    // if ($this->getTargetClass()) == true (line 422)
    // if ($this->getTargetInterfaces()) == true (line 426)

    $actual = $this->mockConfiguration->generateName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortName0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->getShortName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespaceName0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($parts)) == false (line 447)

    $actual = $this->mockConfiguration->getNamespaceName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespaceName1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($parts)) == true (line 447)

    $actual = $this->mockConfiguration->getNamespaceName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBlackListedMethods0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->getBlackListedMethods();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetWhiteListedMethods0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->getWhiteListedMethods();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsInstanceMock0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->isInstanceMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParameterOverrides0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->getParameterOverrides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsMockOriginalDestructor0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfiguration->isMockOriginalDestructor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
