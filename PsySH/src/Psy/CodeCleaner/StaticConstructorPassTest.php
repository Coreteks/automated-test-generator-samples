<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\StaticConstructorPass;

class StaticConstructorPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\StaticConstructorPass
*/
protected $staticConstructorPass;

public function setUp()
{
    parent::setUp();

    $this->staticConstructorPass = new \Psy\CodeCleaner\StaticConstructorPass();
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->staticConstructorPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == false (line 56)

    $actual = $this->staticConstructorPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 56)
    // if (!empty($this->namespace) && $this->isPHP533) == false (line 58)
    // if ($constructor && $constructor->isStatic()) == false (line 78)

    $actual = $this->staticConstructorPass->enterNode($node);
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
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 56)
    // if (!empty($this->namespace) && $this->isPHP533) == false (line 58)
    // if ($constructor && $constructor->isStatic()) == true (line 78)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 84)

    $actual = $this->staticConstructorPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 56)
    // if (!empty($this->namespace) && $this->isPHP533) == false (line 58)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == false (line 64)
    // if ($constructor && $constructor->isStatic()) == false (line 78)

    $actual = $this->staticConstructorPass->enterNode($node);
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
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 56)
    // if (!empty($this->namespace) && $this->isPHP533) == false (line 58)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == false (line 64)
    // if ($constructor && $constructor->isStatic()) == true (line 78)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 84)

    $actual = $this->staticConstructorPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode5()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 56)
    // if (!empty($this->namespace) && $this->isPHP533) == false (line 58)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == true (line 64)
    // if ('__construct' === strtolower($stmt->name)) == false (line 66)
    // if (strtolower($node->name) === strtolower($stmt->name)) == false (line 72)
    // if ($constructor && $constructor->isStatic()) == false (line 78)

    $actual = $this->staticConstructorPass->enterNode($node);
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
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 56)
    // if (!empty($this->namespace) && $this->isPHP533) == false (line 58)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == true (line 64)
    // if ('__construct' === strtolower($stmt->name)) == false (line 66)
    // if (strtolower($node->name) === strtolower($stmt->name)) == false (line 72)
    // if ($constructor && $constructor->isStatic()) == true (line 78)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 84)

    $actual = $this->staticConstructorPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode7()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 56)
    // if (!empty($this->namespace) && $this->isPHP533) == false (line 58)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == true (line 64)
    // if ('__construct' === strtolower($stmt->name)) == false (line 66)
    // if (strtolower($node->name) === strtolower($stmt->name)) == true (line 72)
    // if ($constructor && $constructor->isStatic()) == false (line 78)

    $actual = $this->staticConstructorPass->enterNode($node);
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
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 56)
    // if (!empty($this->namespace) && $this->isPHP533) == false (line 58)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == true (line 64)
    // if ('__construct' === strtolower($stmt->name)) == false (line 66)
    // if (strtolower($node->name) === strtolower($stmt->name)) == true (line 72)
    // if ($constructor && $constructor->isStatic()) == true (line 78)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 84)

    $actual = $this->staticConstructorPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode9()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 56)
    // if (!empty($this->namespace) && $this->isPHP533) == false (line 58)
    // if ($stmt instanceof \PhpParser\Node\Stmt\ClassMethod) == true (line 64)
    // if ('__construct' === strtolower($stmt->name)) == true (line 66)

    $actual = $this->staticConstructorPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode10()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 54)
    // if ($node instanceof \PhpParser\Node\Stmt\Class_) == true (line 56)
    // if (!empty($this->namespace) && $this->isPHP533) == true (line 58)

    $actual = $this->staticConstructorPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode11()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt\Namespace_) == true (line 54)

    $actual = $this->staticConstructorPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
