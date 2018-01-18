<?php

namespace tests\PhpParser\Builder;

use Mockery as m;
use PhpParser\Builder\Class_;

class Class_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \PhpParser\Builder\Class_
*/
protected $class_;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->class_ = new \PhpParser\Builder\Class_($this->_name);
}

public function testExtend0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->class_->extend($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImplement0()
{
    $interfaces = m::mock('UntypedParameter_interfaces_');

    // TODO: Your mock expectations here

    $actual = $this->class_->implement($interfaces);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImplement1()
{
    $interfaces = m::mock('UntypedParameter_interfaces_');

    // TODO: Your mock expectations here

    $actual = $this->class_->implement($interfaces);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeAbstract0()
{
    // TODO: Your mock expectations here

    $actual = $this->class_->makeAbstract();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeFinal0()
{
    // TODO: Your mock expectations here

    $actual = $this->class_->makeFinal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddStmt0()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($targets[$class])) == false (line 100)

    $actual = $this->class_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testAddStmt1()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($targets[$class])) == true (line 100)
    // throw new \LogicException(sprintf('Unexpected node of type "%s"', $stmt->getType())) -> exception (line 101)

    $actual = $this->class_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->class_->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
