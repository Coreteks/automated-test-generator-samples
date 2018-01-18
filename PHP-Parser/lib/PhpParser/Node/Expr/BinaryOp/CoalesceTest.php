<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Coalesce;

class CoalesceTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Coalesce
*/
protected $coalesce;

public function setUp()
{
    parent::setUp();

    $this->coalesce = new \PhpParser\Node\Expr\BinaryOp\Coalesce();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->coalesce->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->coalesce->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
