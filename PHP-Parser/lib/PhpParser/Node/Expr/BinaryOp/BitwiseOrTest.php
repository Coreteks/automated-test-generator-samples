<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\BitwiseOr;

class BitwiseOrTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\BitwiseOr
*/
protected $bitwiseOr;

public function setUp()
{
    parent::setUp();

    $this->bitwiseOr = new \PhpParser\Node\Expr\BinaryOp\BitwiseOr();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->bitwiseOr->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->bitwiseOr->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
