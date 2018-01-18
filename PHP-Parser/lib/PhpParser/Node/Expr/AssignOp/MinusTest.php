<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\Minus;

class MinusTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\Minus
*/
protected $minus;

public function setUp()
{
    parent::setUp();

    $this->minus = new \PhpParser\Node\Expr\AssignOp\Minus();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->minus->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
