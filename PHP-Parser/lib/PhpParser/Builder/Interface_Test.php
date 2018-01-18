<?php

namespace tests\PhpParser\Builder;

use Mockery as m;
use PhpParser\Builder\Interface_;

class Interface_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \PhpParser\Builder\Interface_
*/
protected $interface_;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->interface_ = new \PhpParser\Builder\Interface_($this->_name);
}

public function testExtend0()
{
    $interfaces = m::mock('UntypedParameter_interfaces_');

    // TODO: Your mock expectations here

    $actual = $this->interface_->extend($interfaces);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend1()
{
    $interfaces = m::mock('UntypedParameter_interfaces_');

    // TODO: Your mock expectations here

    $actual = $this->interface_->extend($interfaces);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testAddStmt0()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassConst) == false (line 51)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == false (line 53)
    // throw new \LogicException(sprintf('Unexpected node of type "%s"', $stmt->getType())) -> exception (line 58)

    $actual = $this->interface_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddStmt1()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassConst) == false (line 51)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == true (line 53)

    $actual = $this->interface_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddStmt2()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassConst) == true (line 51)

    $actual = $this->interface_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->interface_->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
