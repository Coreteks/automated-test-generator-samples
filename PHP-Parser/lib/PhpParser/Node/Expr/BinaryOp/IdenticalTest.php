<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Identical;

class IdenticalTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Identical
*/
protected $identical;

public function setUp()
{
    parent::setUp();

    $this->identical = new \PhpParser\Node\Expr\BinaryOp\Identical();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->identical->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->identical->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
