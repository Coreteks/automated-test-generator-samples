<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\BooleanOr;

class BooleanOrTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\BooleanOr
*/
protected $booleanOr;

public function setUp()
{
    parent::setUp();

    $this->booleanOr = new \PhpParser\Node\Expr\BinaryOp\BooleanOr();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->booleanOr->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->booleanOr->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
