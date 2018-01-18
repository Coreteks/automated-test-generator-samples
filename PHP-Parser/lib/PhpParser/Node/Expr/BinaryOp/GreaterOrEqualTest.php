<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\GreaterOrEqual;

class GreaterOrEqualTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\GreaterOrEqual
*/
protected $greaterOrEqual;

public function setUp()
{
    parent::setUp();

    $this->greaterOrEqual = new \PhpParser\Node\Expr\BinaryOp\GreaterOrEqual();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->greaterOrEqual->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->greaterOrEqual->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
