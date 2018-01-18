<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\ValidClassNamePass;

class ValidClassNamePassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\ValidClassNamePass
*/
protected $validClassNamePass;

public function setUp()
{
    parent::setUp();

    $this->validClassNamePass = new \Psy\CodeCleaner\ValidClassNamePass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 62)
    // if ($this->conditionalScopes === 0) == false (line 67)

    $actual = $this->validClassNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 62)
    // if ($this->conditionalScopes === 0) == true (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 68)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 72)

    $actual = $this->validClassNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 62)
    // if ($this->conditionalScopes === 0) == true (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 68)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == true (line 72)

    $actual = $this->validClassNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 62)
    // if ($this->conditionalScopes === 0) == true (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 68)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == true (line 70)

    $actual = $this->validClassNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 62)
    // if ($this->conditionalScopes === 0) == true (line 67)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 68)

    $actual = $this->validClassNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode5()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == true (line 62)

    $actual = $this->validClassNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 92)
    // if ($node instanceof \PhpParser\Node\Expr\New_) == false (line 94)
    // if ($node instanceof \PhpParser\Node\Expr\ClassConstFetch) == false (line 96)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall) == false (line 98)

    $actual = $this->validClassNamePass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 92)
    // if ($node instanceof \PhpParser\Node\Expr\New_) == false (line 94)
    // if ($node instanceof \PhpParser\Node\Expr\ClassConstFetch) == false (line 96)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall) == true (line 98)

    $actual = $this->validClassNamePass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 92)
    // if ($node instanceof \PhpParser\Node\Expr\New_) == false (line 94)
    // if ($node instanceof \PhpParser\Node\Expr\ClassConstFetch) == true (line 96)

    $actual = $this->validClassNamePass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 92)
    // if ($node instanceof \PhpParser\Node\Expr\New_) == true (line 94)

    $actual = $this->validClassNamePass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == true (line 92)

    $actual = $this->validClassNamePass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
