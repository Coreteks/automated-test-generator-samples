<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Minus;

class MinusTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Minus
*/
protected $minus;

public function setUp()
{
    parent::setUp();

    $this->minus = new \PhpParser\Node\Expr\BinaryOp\Minus();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->minus->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->minus->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
