<?php

namespace tests\PhpParser\NodeVisitor;

use Mockery as m;
use PhpParser\ErrorHandler;
use PhpParser\NodeVisitor\NameResolver;

class NameResolverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_errorHandler;
/**
* @var array
*/
protected $_options = [];
/**
* @var \PhpParser\NodeVisitor\NameResolver
*/
protected $nameResolver;

public function setUp()
{
    parent::setUp();

    $this->_errorHandler = m::mock(\PhpParser\ErrorHandler::class);
    $this->_options = [];
    $this->nameResolver = new \PhpParser\NodeVisitor\NameResolver($this->_errorHandler, $this->_options);
}

public function testGetNameContext0()
{
    // TODO: Your mock expectations here

    $actual = $this->nameResolver->getNameContext();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->nameResolver->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == false (line 120)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == false (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == false (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == false (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == true (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == false (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == true (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode5()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == true (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == false (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode6()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == true (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == true (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode7()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == true (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == true (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode8()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode9()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == false (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == false (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode10()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == false (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == true (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode11()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == false (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == true (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode12()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == true (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == false (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode13()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == true (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == true (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode14()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 118)
    // if ($node instanceof \PhpParser\Node\Stmt\TraitUse) == true (line 120)
    // if (null !== $adaptation->trait) == true (line 126)
    // if ($adaptation instanceof \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence) == true (line 130)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode15()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 114)
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch) == true (line 118)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode16()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 114)
    // if ($node->name instanceof \PhpParser\Node\Name) == false (line 115)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode17()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == false (line 110)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 114)
    // if ($node->name instanceof \PhpParser\Node\Name) == true (line 115)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode18()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == true (line 110)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode19()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 101)
    // if ($node instanceof \PhpParser\Node\Stmt\Catch_) == true (line 110)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode20()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == true (line 101)
    // if ($node->class instanceof \PhpParser\Node\Name) == false (line 107)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode21()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == false (line 97)
    // if ($node instanceof \PhpParser\Node\Expr\StaticCall || $node instanceof \PhpParser\Node\Expr\StaticPropertyFetch || $node instanceof \PhpParser\Node\Expr\ClassConstFetch || $node instanceof \PhpParser\Node\Expr\New_ || $node instanceof \PhpParser\Node\Expr\Instanceof_) == true (line 101)
    // if ($node->class instanceof \PhpParser\Node\Name) == true (line 107)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode22()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == true (line 97)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode23()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == false (line 93)
    // if ($node instanceof \PhpParser\Node\Stmt\Const_) == true (line 97)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode24()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 90)
    // if ($node instanceof \PhpParser\Node\Stmt\ClassMethod || $node instanceof \PhpParser\Node\Expr\Closure) == true (line 93)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode25()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == false (line 88)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == true (line 90)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode26()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == false (line 82)
    // if ($node instanceof \PhpParser\Node\Stmt\Trait_) == true (line 88)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode27()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == true (line 82)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode28()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 70)
    // if ($node instanceof \PhpParser\Node\Stmt\Interface_) == true (line 82)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode29()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 70)
    // if (null !== $node->extends) == false (line 71)
    // if (null !== $node->name) == false (line 79)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode30()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 70)
    // if (null !== $node->extends) == false (line 71)
    // if (null !== $node->name) == true (line 79)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode31()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 70)
    // if (null !== $node->extends) == false (line 71)
    // if (null !== $node->name) == false (line 79)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode32()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 70)
    // if (null !== $node->extends) == false (line 71)
    // if (null !== $node->name) == true (line 79)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode33()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 70)
    // if (null !== $node->extends) == true (line 71)
    // if (null !== $node->name) == false (line 79)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode34()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 70)
    // if (null !== $node->extends) == true (line 71)
    // if (null !== $node->name) == true (line 79)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode35()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 70)
    // if (null !== $node->extends) == true (line 71)
    // if (null !== $node->name) == false (line 79)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode36()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == false (line 66)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 70)
    // if (null !== $node->extends) == true (line 71)
    // if (null !== $node->name) == true (line 79)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode37()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == true (line 66)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode38()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == false (line 62)
    // if ($node instanceof \PhpParser\Node\Stmt\GroupUse) == true (line 66)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode39()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == true (line 62)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode40()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 60)
    // if ($node instanceof \PhpParser\Node\Stmt\Use_) == true (line 62)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode41()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == true (line 60)

    $actual = $this->nameResolver->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
