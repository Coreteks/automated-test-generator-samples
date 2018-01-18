<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\LogicalAnd;

class LogicalAndTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\LogicalAnd
*/
protected $logicalAnd;

public function setUp()
{
    parent::setUp();

    $this->logicalAnd = new \PhpParser\Node\Expr\BinaryOp\LogicalAnd();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalAnd->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalAnd->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
