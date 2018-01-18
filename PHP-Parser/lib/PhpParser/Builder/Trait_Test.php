<?php

namespace tests\PhpParser\Builder;

use Mockery as m;
use PhpParser\Builder\Trait_;

class Trait_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \PhpParser\Builder\Trait_
*/
protected $trait_;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->trait_ = new \PhpParser\Builder\Trait_($this->_name);
}

/**
 * @expectedException \LogicException
 */
public function testAddStmt0()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stmt instanceof \PhpParser\Node\Stmt\Property) == false (line 35)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == false (line 37)
    // if ($stmt instanceof \PhpParser\Node\Stmt\TraitUse) == false (line 39)
    // throw new \LogicException(sprintf('Unexpected node of type "%s"', $stmt->getType())) -> exception (line 42)

    $actual = $this->trait_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddStmt1()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stmt instanceof \PhpParser\Node\Stmt\Property) == false (line 35)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == false (line 37)
    // if ($stmt instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 39)

    $actual = $this->trait_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddStmt2()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stmt instanceof \PhpParser\Node\Stmt\Property) == false (line 35)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == true (line 37)

    $actual = $this->trait_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddStmt3()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stmt instanceof \PhpParser\Node\Stmt\Property) == true (line 35)

    $actual = $this->trait_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->trait_->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
