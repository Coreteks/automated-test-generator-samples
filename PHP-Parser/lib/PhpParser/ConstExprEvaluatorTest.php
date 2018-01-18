<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\ConstExprEvaluator;

class ConstExprEvaluatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_fallbackEvaluator = null;
/**
* @var \PhpParser\ConstExprEvaluator
*/
protected $constExprEvaluator;

public function setUp()
{
    parent::setUp();

    $this->_fallbackEvaluator = null;
    $this->constExprEvaluator = new \PhpParser\ConstExprEvaluator($this->_fallbackEvaluator);
}

public function testEvaluate0()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == false (line 65)
    // if ($expr instanceof \PhpParser\Node\Expr\Array_) == false (line 72)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryPlus) == false (line 77)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryMinus) == false (line 80)
    // if ($expr instanceof \PhpParser\Node\Expr\BooleanNot) == false (line 83)
    // if ($expr instanceof \PhpParser\Node\Expr\BitwiseNot) == false (line 86)
    // if ($expr instanceof \PhpParser\Node\Expr\BinaryOp) == false (line 90)
    // if ($expr instanceof \PhpParser\Node\Expr\Ternary) == false (line 94)
    // if ($expr instanceof \PhpParser\Node\Expr\ArrayDimFetch && null !== $expr->dim) == false (line 98)
    // if ($expr instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 102)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate1()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == false (line 65)
    // if ($expr instanceof \PhpParser\Node\Expr\Array_) == false (line 72)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryPlus) == false (line 77)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryMinus) == false (line 80)
    // if ($expr instanceof \PhpParser\Node\Expr\BooleanNot) == false (line 83)
    // if ($expr instanceof \PhpParser\Node\Expr\BitwiseNot) == false (line 86)
    // if ($expr instanceof \PhpParser\Node\Expr\BinaryOp) == false (line 90)
    // if ($expr instanceof \PhpParser\Node\Expr\Ternary) == false (line 94)
    // if ($expr instanceof \PhpParser\Node\Expr\ArrayDimFetch && null !== $expr->dim) == false (line 98)
    // if ($expr instanceof \PhpParser\Node\Expr\ConstFetch) == true (line 102)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate2()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == false (line 65)
    // if ($expr instanceof \PhpParser\Node\Expr\Array_) == false (line 72)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryPlus) == false (line 77)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryMinus) == false (line 80)
    // if ($expr instanceof \PhpParser\Node\Expr\BooleanNot) == false (line 83)
    // if ($expr instanceof \PhpParser\Node\Expr\BitwiseNot) == false (line 86)
    // if ($expr instanceof \PhpParser\Node\Expr\BinaryOp) == false (line 90)
    // if ($expr instanceof \PhpParser\Node\Expr\Ternary) == false (line 94)
    // if ($expr instanceof \PhpParser\Node\Expr\ArrayDimFetch && null !== $expr->dim) == true (line 98)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate3()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == false (line 65)
    // if ($expr instanceof \PhpParser\Node\Expr\Array_) == false (line 72)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryPlus) == false (line 77)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryMinus) == false (line 80)
    // if ($expr instanceof \PhpParser\Node\Expr\BooleanNot) == false (line 83)
    // if ($expr instanceof \PhpParser\Node\Expr\BitwiseNot) == false (line 86)
    // if ($expr instanceof \PhpParser\Node\Expr\BinaryOp) == false (line 90)
    // if ($expr instanceof \PhpParser\Node\Expr\Ternary) == true (line 94)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate4()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == false (line 65)
    // if ($expr instanceof \PhpParser\Node\Expr\Array_) == false (line 72)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryPlus) == false (line 77)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryMinus) == false (line 80)
    // if ($expr instanceof \PhpParser\Node\Expr\BooleanNot) == false (line 83)
    // if ($expr instanceof \PhpParser\Node\Expr\BitwiseNot) == false (line 86)
    // if ($expr instanceof \PhpParser\Node\Expr\BinaryOp) == true (line 90)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate5()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == false (line 65)
    // if ($expr instanceof \PhpParser\Node\Expr\Array_) == false (line 72)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryPlus) == false (line 77)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryMinus) == false (line 80)
    // if ($expr instanceof \PhpParser\Node\Expr\BooleanNot) == false (line 83)
    // if ($expr instanceof \PhpParser\Node\Expr\BitwiseNot) == true (line 86)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate6()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == false (line 65)
    // if ($expr instanceof \PhpParser\Node\Expr\Array_) == false (line 72)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryPlus) == false (line 77)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryMinus) == false (line 80)
    // if ($expr instanceof \PhpParser\Node\Expr\BooleanNot) == true (line 83)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate7()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == false (line 65)
    // if ($expr instanceof \PhpParser\Node\Expr\Array_) == false (line 72)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryPlus) == false (line 77)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryMinus) == true (line 80)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate8()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == false (line 65)
    // if ($expr instanceof \PhpParser\Node\Expr\Array_) == false (line 72)
    // if ($expr instanceof \PhpParser\Node\Expr\UnaryPlus) == true (line 77)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate9()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == false (line 65)
    // if ($expr instanceof \PhpParser\Node\Expr\Array_) == true (line 72)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate10()
{
    $expr = m::mock(\PhpParser\Node\Expr::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($expr instanceof \PhpParser\Node\Scalar\LNumber || $expr instanceof \PhpParser\Node\Scalar\DNumber || $expr instanceof \PhpParser\Node\Scalar\String_) == true (line 65)

    $actual = $this->constExprEvaluator->evaluate($expr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
