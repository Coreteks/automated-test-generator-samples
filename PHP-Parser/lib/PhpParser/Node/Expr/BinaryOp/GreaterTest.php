<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Greater;

class GreaterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Greater
*/
protected $greater;

public function setUp()
{
    parent::setUp();

    $this->greater = new \PhpParser\Node\Expr\BinaryOp\Greater();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->greater->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->greater->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
