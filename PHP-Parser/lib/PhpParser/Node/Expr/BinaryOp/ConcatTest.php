<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Concat;

class ConcatTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Concat
*/
protected $concat;

public function setUp()
{
    parent::setUp();

    $this->concat = new \PhpParser\Node\Expr\BinaryOp\Concat();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->concat->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->concat->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
