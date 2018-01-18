<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Plus;

class PlusTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Plus
*/
protected $plus;

public function setUp()
{
    parent::setUp();

    $this->plus = new \PhpParser\Node\Expr\BinaryOp\Plus();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->plus->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->plus->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
