<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Smaller;

class SmallerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Smaller
*/
protected $smaller;

public function setUp()
{
    parent::setUp();

    $this->smaller = new \PhpParser\Node\Expr\BinaryOp\Smaller();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->smaller->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->smaller->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
