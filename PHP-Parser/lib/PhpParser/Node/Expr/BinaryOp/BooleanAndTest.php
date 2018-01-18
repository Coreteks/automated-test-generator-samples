<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\BooleanAnd;

class BooleanAndTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\BooleanAnd
*/
protected $booleanAnd;

public function setUp()
{
    parent::setUp();

    $this->booleanAnd = new \PhpParser\Node\Expr\BinaryOp\BooleanAnd();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->booleanAnd->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->booleanAnd->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
