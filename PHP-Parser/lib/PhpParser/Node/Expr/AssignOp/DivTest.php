<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\Div;

class DivTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\Div
*/
protected $div;

public function setUp()
{
    parent::setUp();

    $this->div = new \PhpParser\Node\Expr\AssignOp\Div();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->div->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
