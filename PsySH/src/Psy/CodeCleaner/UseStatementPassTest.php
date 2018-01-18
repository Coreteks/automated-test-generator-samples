<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\UseStatementPass;

class UseStatementPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\UseStatementPass
*/
protected $useStatementPass;

public function setUp()
{
    parent::setUp();

    $this->useStatementPass = new \Psy\CodeCleaner\UseStatementPass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 48)

    $actual = $this->useStatementPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == true (line 48)
    // if (strtolower($node->name) === strtolower($this->lastNamespace)) == false (line 51)

    $actual = $this->useStatementPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == true (line 48)
    // if (strtolower($node->name) === strtolower($this->lastNamespace)) == true (line 51)

    $actual = $this->useStatementPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 75)
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 86)

    $actual = $this->useStatementPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 75)
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 86)
    // if ($subNode instanceof \PhpParser\Node\Name) == false (line 93)

    $actual = $this->useStatementPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 75)
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 86)
    // if ($subNode instanceof \PhpParser\Node\Name) == true (line 93)
    // if ($replacement = $this->findAlias($subNode)) == false (line 95)

    $actual = $this->useStatementPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 75)
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 86)
    // if ($subNode instanceof \PhpParser\Node\Name) == true (line 93)
    // if ($replacement = $this->findAlias($subNode)) == true (line 95)

    $actual = $this->useStatementPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 75)
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == true (line 86)

    $actual = $this->useStatementPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode5()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == true (line 75)

    $actual = $this->useStatementPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode6()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == true (line 75)

    $actual = $this->useStatementPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode7()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == true (line 67)

    $actual = $this->useStatementPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode8()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == true (line 67)

    $actual = $this->useStatementPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
