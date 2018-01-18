<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\BitwiseAnd;

class BitwiseAndTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\BitwiseAnd
*/
protected $bitwiseAnd;

public function setUp()
{
    parent::setUp();

    $this->bitwiseAnd = new \PhpParser\Node\Expr\BinaryOp\BitwiseAnd();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->bitwiseAnd->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->bitwiseAnd->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
