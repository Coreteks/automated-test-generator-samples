<?php

namespace tests\Psy\Sudo;

use Mockery as m;
use Psy\Sudo\SudoVisitor;

class SudoVisitorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Sudo\SudoVisitor
*/
protected $sudoVisitor;

public function setUp()
{
    parent::setUp();

    $this->sudoVisitor = new \Psy\Sudo\SudoVisitor();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 49)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 56)
    // if ($node instanceof \PhpParser\Node\Expr\MethodCall) == false (line 65)
    // if ($node instanceof \PhpParser\Node\Expr\StaticPropertyFetch) == false (line 72)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\StaticPropertyFetch) == false (line 80)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Expr\ClassConstFetch) == false (line 98)

    $actual = $this->sudoVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 49)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 56)
    // if ($node instanceof \PhpParser\Node\Expr\MethodCall) == false (line 65)
    // if ($node instanceof \PhpParser\Node\Expr\StaticPropertyFetch) == false (line 72)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\StaticPropertyFetch) == false (line 80)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Expr\ClassConstFetch) == true (line 98)

    $actual = $this->sudoVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 49)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 56)
    // if ($node instanceof \PhpParser\Node\Expr\MethodCall) == false (line 65)
    // if ($node instanceof \PhpParser\Node\Expr\StaticPropertyFetch) == false (line 72)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\StaticPropertyFetch) == false (line 80)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall) == true (line 90)

    $actual = $this->sudoVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 49)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 56)
    // if ($node instanceof \PhpParser\Node\Expr\MethodCall) == false (line 65)
    // if ($node instanceof \PhpParser\Node\Expr\StaticPropertyFetch) == false (line 72)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\StaticPropertyFetch) == true (line 80)

    $actual = $this->sudoVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 49)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 56)
    // if ($node instanceof \PhpParser\Node\Expr\MethodCall) == false (line 65)
    // if ($node instanceof \PhpParser\Node\Expr\StaticPropertyFetch) == true (line 72)

    $actual = $this->sudoVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode5()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 49)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 56)
    // if ($node instanceof \PhpParser\Node\Expr\MethodCall) == true (line 65)

    $actual = $this->sudoVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode6()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\PropertyFetch) == false (line 49)
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\PropertyFetch) == true (line 56)

    $actual = $this->sudoVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode7()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\PropertyFetch) == true (line 49)

    $actual = $this->sudoVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
