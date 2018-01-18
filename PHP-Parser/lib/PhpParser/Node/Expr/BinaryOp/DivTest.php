<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Div;

class DivTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Div
*/
protected $div;

public function setUp()
{
    parent::setUp();

    $this->div = new \PhpParser\Node\Expr\BinaryOp\Div();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->div->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->div->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
