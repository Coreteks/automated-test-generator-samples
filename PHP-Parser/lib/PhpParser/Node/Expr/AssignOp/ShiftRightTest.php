<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\ShiftRight;

class ShiftRightTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\ShiftRight
*/
protected $shiftRight;

public function setUp()
{
    parent::setUp();

    $this->shiftRight = new \PhpParser\Node\Expr\AssignOp\ShiftRight();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->shiftRight->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
