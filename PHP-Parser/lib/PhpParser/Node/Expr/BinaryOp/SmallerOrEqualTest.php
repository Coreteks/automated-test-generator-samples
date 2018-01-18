<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\SmallerOrEqual;

class SmallerOrEqualTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\SmallerOrEqual
*/
protected $smallerOrEqual;

public function setUp()
{
    parent::setUp();

    $this->smallerOrEqual = new \PhpParser\Node\Expr\BinaryOp\SmallerOrEqual();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->smallerOrEqual->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->smallerOrEqual->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
