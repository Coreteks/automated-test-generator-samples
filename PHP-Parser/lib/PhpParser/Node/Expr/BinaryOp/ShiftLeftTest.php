<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\ShiftLeft;

class ShiftLeftTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\ShiftLeft
*/
protected $shiftLeft;

public function setUp()
{
    parent::setUp();

    $this->shiftLeft = new \PhpParser\Node\Expr\BinaryOp\ShiftLeft();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->shiftLeft->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->shiftLeft->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
