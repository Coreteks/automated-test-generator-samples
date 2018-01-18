<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\ShiftLeft;

class ShiftLeftTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\ShiftLeft
*/
protected $shiftLeft;

public function setUp()
{
    parent::setUp();

    $this->shiftLeft = new \PhpParser\Node\Expr\AssignOp\ShiftLeft();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->shiftLeft->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
