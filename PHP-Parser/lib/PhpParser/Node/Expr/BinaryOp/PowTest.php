<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Pow;

class PowTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Pow
*/
protected $pow;

public function setUp()
{
    parent::setUp();

    $this->pow = new \PhpParser\Node\Expr\BinaryOp\Pow();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->pow->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->pow->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
