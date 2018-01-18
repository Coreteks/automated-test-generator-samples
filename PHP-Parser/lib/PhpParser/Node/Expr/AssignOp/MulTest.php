<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\Mul;

class MulTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\Mul
*/
protected $mul;

public function setUp()
{
    parent::setUp();

    $this->mul = new \PhpParser\Node\Expr\AssignOp\Mul();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->mul->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
