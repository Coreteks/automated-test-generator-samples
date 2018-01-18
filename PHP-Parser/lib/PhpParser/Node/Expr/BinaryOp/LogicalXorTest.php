<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\LogicalXor;

class LogicalXorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\LogicalXor
*/
protected $logicalXor;

public function setUp()
{
    parent::setUp();

    $this->logicalXor = new \PhpParser\Node\Expr\BinaryOp\LogicalXor();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalXor->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalXor->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
