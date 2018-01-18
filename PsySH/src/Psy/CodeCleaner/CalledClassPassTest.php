<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\CalledClassPass;

class CalledClassPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\CalledClassPass
*/
protected $calledClassPass;

public function setUp()
{
    parent::setUp();

    $this->calledClassPass = new \Psy\CodeCleaner\CalledClassPass();
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->calledClassPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_ || $node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 45)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall && !$this->inClass) == false (line 47)

    $actual = $this->calledClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_ || $node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 45)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall && !$this->inClass) == true (line 47)
    // if (!empty($node->args) && !$this->isNull($node->args[0])) == false (line 52)
    // if (!$node->name instanceof \PhpParser\Node\Name) == false (line 57)
    // if (in_array($name, array('get_class', 'get_called_class'))) == false (line 62)

    $actual = $this->calledClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\ErrorException
 */
public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_ || $node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 45)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall && !$this->inClass) == true (line 47)
    // if (!empty($node->args) && !$this->isNull($node->args[0])) == false (line 52)
    // if (!$node->name instanceof \PhpParser\Node\Name) == false (line 57)
    // if (in_array($name, array('get_class', 'get_called_class'))) == true (line 62)
    // throw new \Psy\Exception\ErrorException($msg, 0, E_USER_WARNING, null, $node->getLine()) -> exception (line 64)

    $actual = $this->calledClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_ || $node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 45)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall && !$this->inClass) == true (line 47)
    // if (!empty($node->args) && !$this->isNull($node->args[0])) == false (line 52)
    // if (!$node->name instanceof \PhpParser\Node\Name) == true (line 57)

    $actual = $this->calledClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_ || $node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 45)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall && !$this->inClass) == true (line 47)
    // if (!empty($node->args) && !$this->isNull($node->args[0])) == true (line 52)

    $actual = $this->calledClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode5()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_ || $node instanceof \PhpParser\Node\Stmt\Trait_) == true (line 45)

    $actual = $this->calledClassPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 74)

    $actual = $this->calledClassPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 74)

    $actual = $this->calledClassPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
