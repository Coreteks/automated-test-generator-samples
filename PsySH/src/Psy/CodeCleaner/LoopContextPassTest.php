<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\LoopContextPass;

class LoopContextPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\LoopContextPass
*/
protected $loopContextPass;

public function setUp()
{
    parent::setUp();

    $this->loopContextPass = new \Psy\CodeCleaner\LoopContextPass();
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->loopContextPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == false (line 66)
    // Case $node instanceof \PhpParser\Node\Stmt\Continue_ == false (line 67)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == false (line 66)
    // Case $node instanceof \PhpParser\Node\Stmt\Continue_ == true (line 67)
    // if ($this->loopDepth === 0) == false (line 70)
    // if ($node->num instanceof \PhpParser\Node\Scalar\LNumber || $node->num instanceof \PhpParser\Node\Scalar\DNumber) == false (line 75)
    // if ($node->num && $this->isPHP54) == false (line 86)

    $actual = $this->loopContextPass->enterNode($node);
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
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == false (line 66)
    // Case $node instanceof \PhpParser\Node\Stmt\Continue_ == true (line 67)
    // if ($this->loopDepth === 0) == false (line 70)
    // if ($node->num instanceof \PhpParser\Node\Scalar\LNumber || $node->num instanceof \PhpParser\Node\Scalar\DNumber) == false (line 75)
    // if ($node->num && $this->isPHP54) == true (line 86)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 88)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == false (line 66)
    // Case $node instanceof \PhpParser\Node\Stmt\Continue_ == true (line 67)
    // if ($this->loopDepth === 0) == false (line 70)
    // if ($node->num instanceof \PhpParser\Node\Scalar\LNumber || $node->num instanceof \PhpParser\Node\Scalar\DNumber) == true (line 75)
    // if ($this->isPHP54 && ($node->num instanceof \PhpParser\Node\Scalar\DNumber || $num < 1)) == false (line 77)
    // if ($num > $this->loopDepth) == false (line 82)

    $actual = $this->loopContextPass->enterNode($node);
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
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == false (line 66)
    // Case $node instanceof \PhpParser\Node\Stmt\Continue_ == true (line 67)
    // if ($this->loopDepth === 0) == false (line 70)
    // if ($node->num instanceof \PhpParser\Node\Scalar\LNumber || $node->num instanceof \PhpParser\Node\Scalar\DNumber) == true (line 75)
    // if ($this->isPHP54 && ($node->num instanceof \PhpParser\Node\Scalar\DNumber || $num < 1)) == false (line 77)
    // if ($num > $this->loopDepth) == true (line 82)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 84)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode5()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == false (line 66)
    // Case $node instanceof \PhpParser\Node\Stmt\Continue_ == true (line 67)
    // if ($this->loopDepth === 0) == false (line 70)
    // if ($node->num instanceof \PhpParser\Node\Scalar\LNumber || $node->num instanceof \PhpParser\Node\Scalar\DNumber) == true (line 75)
    // if ($this->isPHP54 && ($node->num instanceof \PhpParser\Node\Scalar\DNumber || $num < 1)) == true (line 77)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 79)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode6()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == false (line 66)
    // Case $node instanceof \PhpParser\Node\Stmt\Continue_ == true (line 67)
    // if ($this->loopDepth === 0) == true (line 70)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 72)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode7()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == true (line 66)
    // if ($this->loopDepth === 0) == false (line 70)
    // if ($node->num instanceof \PhpParser\Node\Scalar\LNumber || $node->num instanceof \PhpParser\Node\Scalar\DNumber) == false (line 75)
    // if ($node->num && $this->isPHP54) == false (line 86)

    $actual = $this->loopContextPass->enterNode($node);
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
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == true (line 66)
    // if ($this->loopDepth === 0) == false (line 70)
    // if ($node->num instanceof \PhpParser\Node\Scalar\LNumber || $node->num instanceof \PhpParser\Node\Scalar\DNumber) == false (line 75)
    // if ($node->num && $this->isPHP54) == true (line 86)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 88)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode9()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == true (line 66)
    // if ($this->loopDepth === 0) == false (line 70)
    // if ($node->num instanceof \PhpParser\Node\Scalar\LNumber || $node->num instanceof \PhpParser\Node\Scalar\DNumber) == true (line 75)
    // if ($this->isPHP54 && ($node->num instanceof \PhpParser\Node\Scalar\DNumber || $num < 1)) == false (line 77)
    // if ($num > $this->loopDepth) == false (line 82)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode10()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == true (line 66)
    // if ($this->loopDepth === 0) == false (line 70)
    // if ($node->num instanceof \PhpParser\Node\Scalar\LNumber || $node->num instanceof \PhpParser\Node\Scalar\DNumber) == true (line 75)
    // if ($this->isPHP54 && ($node->num instanceof \PhpParser\Node\Scalar\DNumber || $num < 1)) == false (line 77)
    // if ($num > $this->loopDepth) == true (line 82)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 84)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode11()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == true (line 66)
    // if ($this->loopDepth === 0) == false (line 70)
    // if ($node->num instanceof \PhpParser\Node\Scalar\LNumber || $node->num instanceof \PhpParser\Node\Scalar\DNumber) == true (line 75)
    // if ($this->isPHP54 && ($node->num instanceof \PhpParser\Node\Scalar\DNumber || $num < 1)) == true (line 77)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 79)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode12()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 62)
    // Case $node instanceof \PhpParser\Node\Stmt\Break_ == true (line 66)
    // if ($this->loopDepth === 0) == true (line 70)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 72)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode13()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 61)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == true (line 62)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode14()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 60)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == true (line 61)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode15()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 59)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == true (line 60)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode16()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 58)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == true (line 59)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode17()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 57)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == true (line 58)

    $actual = $this->loopContextPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 99)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 100)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 101)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 102)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 103)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == false (line 104)

    $actual = $this->loopContextPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 99)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 100)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 101)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 102)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == false (line 103)
    // Case $node instanceof \PhpParser\Node\Stmt\While_ == true (line 104)

    $actual = $this->loopContextPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 99)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 100)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 101)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == false (line 102)
    // Case $node instanceof \PhpParser\Node\Stmt\Switch_ == true (line 103)

    $actual = $this->loopContextPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 99)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 100)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == false (line 101)
    // Case $node instanceof \PhpParser\Node\Stmt\Foreach_ == true (line 102)

    $actual = $this->loopContextPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 99)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == false (line 100)
    // Case $node instanceof \PhpParser\Node\Stmt\For_ == true (line 101)

    $actual = $this->loopContextPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode5()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 99)
    // Case $node instanceof \PhpParser\Node\Stmt\Do_ == true (line 100)

    $actual = $this->loopContextPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
