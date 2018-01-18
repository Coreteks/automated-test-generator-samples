<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Equal;

class EqualTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Equal
*/
protected $equal;

public function setUp()
{
    parent::setUp();

    $this->equal = new \PhpParser\Node\Expr\BinaryOp\Equal();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->equal->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->equal->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
