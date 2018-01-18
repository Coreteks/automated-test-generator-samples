<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Mul;

class MulTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Mul
*/
protected $mul;

public function setUp()
{
    parent::setUp();

    $this->mul = new \PhpParser\Node\Expr\BinaryOp\Mul();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->mul->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->mul->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
