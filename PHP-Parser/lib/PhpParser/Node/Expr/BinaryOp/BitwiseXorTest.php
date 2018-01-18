<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\BitwiseXor;

class BitwiseXorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\BitwiseXor
*/
protected $bitwiseXor;

public function setUp()
{
    parent::setUp();

    $this->bitwiseXor = new \PhpParser\Node\Expr\BinaryOp\BitwiseXor();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->bitwiseXor->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->bitwiseXor->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
