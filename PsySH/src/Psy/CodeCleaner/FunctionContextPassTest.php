<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\FunctionContextPass;

class FunctionContextPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\FunctionContextPass
*/
protected $functionContextPass;

public function setUp()
{
    parent::setUp();

    $this->functionContextPass = new \Psy\CodeCleaner\FunctionContextPass();
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->functionContextPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\FunctionLike) == false (line 34)
    // if ($this->functionDepth !== 0) == false (line 41)
    // if ($node instanceof \PhpParser\Node\Expr\Yield_) == false (line 46)

    $actual = $this->functionContextPass->enterNode($node);
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
    // if ($node instanceof \PhpParser\Node\FunctionLike) == false (line 34)
    // if ($this->functionDepth !== 0) == false (line 41)
    // if ($node instanceof \PhpParser\Node\Expr\Yield_) == true (line 46)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 48)

    $actual = $this->functionContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\FunctionLike) == false (line 34)
    // if ($this->functionDepth !== 0) == true (line 41)

    $actual = $this->functionContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\FunctionLike) == true (line 34)

    $actual = $this->functionContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\FunctionLike) == false (line 57)

    $actual = $this->functionContextPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\FunctionLike) == true (line 57)

    $actual = $this->functionContextPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
