<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\PassableByReferencePass;

class PassableByReferencePassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\PassableByReferencePass
*/
protected $passableByReferencePass;

public function setUp()
{
    parent::setUp();

    $this->passableByReferencePass = new \Psy\CodeCleaner\PassableByReferencePass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 39)

    $actual = $this->passableByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 39)
    // if ($node->name instanceof \PhpParser\Node\Expr || $node->name instanceof \PhpParser\Node\Expr\Variable) == false (line 41)
    // if ($name === 'array_multisort') == false (line 47)

    $actual = $this->passableByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 39)
    // if ($node->name instanceof \PhpParser\Node\Expr || $node->name instanceof \PhpParser\Node\Expr\Variable) == false (line 41)
    // if ($name === 'array_multisort') == false (line 47)

    $actual = $this->passableByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 39)
    // if ($node->name instanceof \PhpParser\Node\Expr || $node->name instanceof \PhpParser\Node\Expr\Variable) == false (line 41)
    // if ($name === 'array_multisort') == false (line 47)

    $actual = $this->passableByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 39)
    // if ($node->name instanceof \PhpParser\Node\Expr || $node->name instanceof \PhpParser\Node\Expr\Variable) == false (line 41)
    // if ($name === 'array_multisort') == false (line 47)
    // if (array_key_exists($key, $node->args)) == false (line 59)

    $actual = $this->passableByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode5()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 39)
    // if ($node->name instanceof \PhpParser\Node\Expr || $node->name instanceof \PhpParser\Node\Expr\Variable) == false (line 41)
    // if ($name === 'array_multisort') == false (line 47)
    // if (array_key_exists($key, $node->args)) == true (line 59)
    // if ($param->isPassedByReference() && !$this->isPassableByReference($arg)) == false (line 61)

    $actual = $this->passableByReferencePass->enterNode($node);
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
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 39)
    // if ($node->name instanceof \PhpParser\Node\Expr || $node->name instanceof \PhpParser\Node\Expr\Variable) == false (line 41)
    // if ($name === 'array_multisort') == false (line 47)
    // if (array_key_exists($key, $node->args)) == true (line 59)
    // if ($param->isPassedByReference() && !$this->isPassableByReference($arg)) == true (line 61)
    // throw new \Psy\Exception\FatalErrorException(self::EXCEPTION_MESSAGE, 0, E_ERROR, null, $node->getLine()) -> exception (line 62)

    $actual = $this->passableByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode7()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 39)
    // if ($node->name instanceof \PhpParser\Node\Expr || $node->name instanceof \PhpParser\Node\Expr\Variable) == false (line 41)
    // if ($name === 'array_multisort') == true (line 47)

    $actual = $this->passableByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode8()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 39)
    // if ($node->name instanceof \PhpParser\Node\Expr || $node->name instanceof \PhpParser\Node\Expr\Variable) == true (line 41)

    $actual = $this->passableByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
