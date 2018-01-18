<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\ValidFunctionNamePass;

class ValidFunctionNamePassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\ValidFunctionNamePass
*/
protected $validFunctionNamePass;

public function setUp()
{
    parent::setUp();

    $this->validFunctionNamePass = new \Psy\CodeCleaner\ValidFunctionNamePass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 44)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == false (line 46)

    $actual = $this->validFunctionNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 44)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == true (line 46)
    // if ($this->conditionalScopes === 0) == false (line 51)

    $actual = $this->validFunctionNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 44)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == true (line 46)
    // if ($this->conditionalScopes === 0) == true (line 51)
    // if (function_exists($name) || isset($this->currentScope[strtolower($name)])) == false (line 52)

    $actual = $this->validFunctionNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 44)
    // if ($node instanceof \PhpParser\Node\Stmt\Function_) == true (line 46)
    // if ($this->conditionalScopes === 0) == true (line 51)
    // if (function_exists($name) || isset($this->currentScope[strtolower($name)])) == true (line 52)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 55)

    $actual = $this->validFunctionNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == true (line 44)

    $actual = $this->validFunctionNamePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 73)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == false (line 75)

    $actual = $this->validFunctionNamePass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 73)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 75)
    // if (!$name instanceof \PhpParser\Node\Expr && !$name instanceof \PhpParser\Node\Expr\Variable) == false (line 78)

    $actual = $this->validFunctionNamePass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 73)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 75)
    // if (!$name instanceof \PhpParser\Node\Expr && !$name instanceof \PhpParser\Node\Expr\Variable) == true (line 78)
    // if (!$inScope && !function_exists($shortName) && !function_exists($fullName)) == false (line 82)

    $actual = $this->validFunctionNamePass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testLeaveNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == false (line 73)
    // if ($node instanceof \PhpParser\Node\Expr\FuncCall) == true (line 75)
    // if (!$name instanceof \PhpParser\Node\Expr && !$name instanceof \PhpParser\Node\Expr\Variable) == true (line 78)
    // if (!$inScope && !function_exists($shortName) && !function_exists($fullName)) == true (line 82)
    // throw new \Psy\Exception\FatalErrorException($message, 0, E_ERROR, null, $node->getLine()) -> exception (line 84)

    $actual = $this->validFunctionNamePass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::isConditional($node)) == true (line 73)

    $actual = $this->validFunctionNamePass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
