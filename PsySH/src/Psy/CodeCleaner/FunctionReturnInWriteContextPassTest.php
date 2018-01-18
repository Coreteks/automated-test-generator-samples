<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class FunctionReturnInWriteContextPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\FunctionReturnInWriteContextPass
*/
protected $functionReturnInWriteContextPass;

public function setUp()
{
    parent::setUp();

    $this->functionReturnInWriteContextPass = new \Psy\CodeCleaner\FunctionReturnInWriteContextPass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Array_ || $this->isCallNode($node)) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Expr\Isset_ || $node instanceof \PhpParser\Node\Stmt\Unset_) == false (line 61)
    // if ($node instanceof \PhpParser\Node\Expr\Empty_ && !$this->isPhp55 && $this->isCallNode($node->expr)) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $this->isCallNode($node->var)) == false (line 72)

    $actual = $this->functionReturnInWriteContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Array_ || $this->isCallNode($node)) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Expr\Isset_ || $node instanceof \PhpParser\Node\Stmt\Unset_) == false (line 61)
    // if ($node instanceof \PhpParser\Node\Expr\Empty_ && !$this->isPhp55 && $this->isCallNode($node->expr)) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $this->isCallNode($node->var)) == true (line 72)
    // throw new \Psy\Exception\FatalErrorException(self::EXCEPTION_MESSAGE, 0, E_ERROR, null, $node->getLine()) -> exception (line 73)

    $actual = $this->functionReturnInWriteContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Array_ || $this->isCallNode($node)) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Expr\Isset_ || $node instanceof \PhpParser\Node\Stmt\Unset_) == false (line 61)
    // if ($node instanceof \PhpParser\Node\Expr\Empty_ && !$this->isPhp55 && $this->isCallNode($node->expr)) == true (line 70)
    // throw new \Psy\Exception\FatalErrorException(self::EXCEPTION_MESSAGE, 0, E_ERROR, null, $node->getLine()) -> exception (line 71)

    $actual = $this->functionReturnInWriteContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Array_ || $this->isCallNode($node)) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Expr\Isset_ || $node instanceof \PhpParser\Node\Stmt\Unset_) == true (line 61)

    $actual = $this->functionReturnInWriteContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Array_ || $this->isCallNode($node)) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Expr\Isset_ || $node instanceof \PhpParser\Node\Stmt\Unset_) == true (line 61)
    // if (!$this->isCallNode($var)) == false (line 63)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 68)

    $actual = $this->functionReturnInWriteContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode5()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Array_ || $this->isCallNode($node)) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Expr\Isset_ || $node instanceof \PhpParser\Node\Stmt\Unset_) == true (line 61)
    // if (!$this->isCallNode($var)) == true (line 63)

    $actual = $this->functionReturnInWriteContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode6()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Array_ || $this->isCallNode($node)) == true (line 54)

    $actual = $this->functionReturnInWriteContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode7()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Array_ || $this->isCallNode($node)) == true (line 54)
    // if ($item && $item->byRef && $this->isCallNode($item->value)) == false (line 57)

    $actual = $this->functionReturnInWriteContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode8()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Array_ || $this->isCallNode($node)) == true (line 54)
    // if ($item && $item->byRef && $this->isCallNode($item->value)) == true (line 57)
    // throw new \Psy\Exception\FatalErrorException(self::EXCEPTION_MESSAGE, 0, E_ERROR, null, $node->getLine()) -> exception (line 58)

    $actual = $this->functionReturnInWriteContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
