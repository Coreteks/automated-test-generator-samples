<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Class_;

class Class_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var array
*/
protected $_subNodes = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Class_
*/
protected $class_;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_subNodes = [];
    $this->_attributes = [];
    $this->class_ = new \PhpParser\Node\Stmt\Class_($this->_name, $this->_subNodes, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->class_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsAbstract0()
{
    // TODO: Your mock expectations here

    $actual = $this->class_->isAbstract();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFinal0()
{
    // TODO: Your mock expectations here

    $actual = $this->class_->isFinal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsAnonymous0()
{
    // TODO: Your mock expectations here

    $actual = $this->class_->isAnonymous();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerifyModifier0()
{
    $a = m::mock('UntypedParameter_a_');
    $b = m::mock('UntypedParameter_b_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($a & self::VISIBILITY_MODIFIER_MASK && $b & self::VISIBILITY_MODIFIER_MASK) == false (line 81)
    // if ($a & self::MODIFIER_ABSTRACT && $b & self::MODIFIER_ABSTRACT) == false (line 85)
    // if ($a & self::MODIFIER_STATIC && $b & self::MODIFIER_STATIC) == false (line 89)
    // if ($a & self::MODIFIER_FINAL && $b & self::MODIFIER_FINAL) == false (line 93)
    // if ($a & 48 && $b & 48) == false (line 97)

    $actual = $this->class_->verifyModifier($a, $b);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PhpParser\Error
 */
public function testVerifyModifier1()
{
    $a = m::mock('UntypedParameter_a_');
    $b = m::mock('UntypedParameter_b_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($a & self::VISIBILITY_MODIFIER_MASK && $b & self::VISIBILITY_MODIFIER_MASK) == false (line 81)
    // if ($a & self::MODIFIER_ABSTRACT && $b & self::MODIFIER_ABSTRACT) == false (line 85)
    // if ($a & self::MODIFIER_STATIC && $b & self::MODIFIER_STATIC) == false (line 89)
    // if ($a & self::MODIFIER_FINAL && $b & self::MODIFIER_FINAL) == false (line 93)
    // if ($a & 48 && $b & 48) == true (line 97)
    // throw new \PhpParser\Error('Cannot use the final modifier on an abstract class member') -> exception (line 98)

    $actual = $this->class_->verifyModifier($a, $b);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PhpParser\Error
 */
public function testVerifyModifier2()
{
    $a = m::mock('UntypedParameter_a_');
    $b = m::mock('UntypedParameter_b_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($a & self::VISIBILITY_MODIFIER_MASK && $b & self::VISIBILITY_MODIFIER_MASK) == false (line 81)
    // if ($a & self::MODIFIER_ABSTRACT && $b & self::MODIFIER_ABSTRACT) == false (line 85)
    // if ($a & self::MODIFIER_STATIC && $b & self::MODIFIER_STATIC) == false (line 89)
    // if ($a & self::MODIFIER_FINAL && $b & self::MODIFIER_FINAL) == true (line 93)
    // throw new \PhpParser\Error('Multiple final modifiers are not allowed') -> exception (line 94)

    $actual = $this->class_->verifyModifier($a, $b);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PhpParser\Error
 */
public function testVerifyModifier3()
{
    $a = m::mock('UntypedParameter_a_');
    $b = m::mock('UntypedParameter_b_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($a & self::VISIBILITY_MODIFIER_MASK && $b & self::VISIBILITY_MODIFIER_MASK) == false (line 81)
    // if ($a & self::MODIFIER_ABSTRACT && $b & self::MODIFIER_ABSTRACT) == false (line 85)
    // if ($a & self::MODIFIER_STATIC && $b & self::MODIFIER_STATIC) == true (line 89)
    // throw new \PhpParser\Error('Multiple static modifiers are not allowed') -> exception (line 90)

    $actual = $this->class_->verifyModifier($a, $b);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PhpParser\Error
 */
public function testVerifyModifier4()
{
    $a = m::mock('UntypedParameter_a_');
    $b = m::mock('UntypedParameter_b_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($a & self::VISIBILITY_MODIFIER_MASK && $b & self::VISIBILITY_MODIFIER_MASK) == false (line 81)
    // if ($a & self::MODIFIER_ABSTRACT && $b & self::MODIFIER_ABSTRACT) == true (line 85)
    // throw new \PhpParser\Error('Multiple abstract modifiers are not allowed') -> exception (line 86)

    $actual = $this->class_->verifyModifier($a, $b);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PhpParser\Error
 */
public function testVerifyModifier5()
{
    $a = m::mock('UntypedParameter_a_');
    $b = m::mock('UntypedParameter_b_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($a & self::VISIBILITY_MODIFIER_MASK && $b & self::VISIBILITY_MODIFIER_MASK) == true (line 81)
    // throw new \PhpParser\Error('Multiple access type modifiers are not allowed') -> exception (line 82)

    $actual = $this->class_->verifyModifier($a, $b);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->class_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
