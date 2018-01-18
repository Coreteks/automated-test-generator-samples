<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\ShiftRight;

class ShiftRightTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\ShiftRight
*/
protected $shiftRight;

public function setUp()
{
    parent::setUp();

    $this->shiftRight = new \PhpParser\Node\Expr\BinaryOp\ShiftRight();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->shiftRight->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->shiftRight->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
