<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\AbstractClassPass;

class AbstractClassPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\AbstractClassPass
*/
protected $abstractClassPass;

public function setUp()
{
    parent::setUp();

    $this->abstractClassPass = new \Psy\CodeCleaner\AbstractClassPass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 34)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod) == false (line 37)

    $actual = $this->abstractClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 34)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod) == true (line 37)
    // if ($node->isAbstract()) == false (line 38)

    $actual = $this->abstractClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 34)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod) == true (line 37)
    // if ($node->isAbstract()) == true (line 38)
    // if ($node->stmts !== null) == false (line 42)

    $actual = $this->abstractClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 34)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod) == true (line 37)
    // if ($node->isAbstract()) == true (line 38)
    // if ($node->stmts !== null) == true (line 42)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 44)

    $actual = $this->abstractClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 34)

    $actual = $this->abstractClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 57)

    $actual = $this->abstractClassPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 57)
    // if ($count > 0 && !$node->isAbstract()) == false (line 59)

    $actual = $this->abstractClassPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testLeaveNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 57)
    // if ($count > 0 && !$node->isAbstract()) == true (line 59)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 67)

    $actual = $this->abstractClassPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
