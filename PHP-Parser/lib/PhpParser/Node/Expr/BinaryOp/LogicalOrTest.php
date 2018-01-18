<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\LogicalOr;

class LogicalOrTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\LogicalOr
*/
protected $logicalOr;

public function setUp()
{
    parent::setUp();

    $this->logicalOr = new \PhpParser\Node\Expr\BinaryOp\LogicalOr();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalOr->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalOr->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
