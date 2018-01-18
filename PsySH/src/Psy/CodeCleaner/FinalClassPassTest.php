<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\FinalClassPass;

class FinalClassPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\FinalClassPass
*/
protected $finalClassPass;

public function setUp()
{
    parent::setUp();

    $this->finalClassPass = new \Psy\CodeCleaner\FinalClassPass();
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->finalClassPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 40)

    $actual = $this->finalClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 40)
    // if ($node->extends) == false (line 41)
    // if ($node->isFinal()) == false (line 49)

    $actual = $this->finalClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 40)
    // if ($node->extends) == false (line 41)
    // if ($node->isFinal()) == true (line 49)

    $actual = $this->finalClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 40)
    // if ($node->extends) == true (line 41)
    // if ($this->isFinalClass($extends)) == false (line 43)
    // if ($node->isFinal()) == false (line 49)

    $actual = $this->finalClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 40)
    // if ($node->extends) == true (line 41)
    // if ($this->isFinalClass($extends)) == false (line 43)
    // if ($node->isFinal()) == true (line 49)

    $actual = $this->finalClassPass->enterNode($node);
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
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 40)
    // if ($node->extends) == true (line 41)
    // if ($this->isFinalClass($extends)) == true (line 43)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 45)

    $actual = $this->finalClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
