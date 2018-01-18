<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\NotEqual;

class NotEqualTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\NotEqual
*/
protected $notEqual;

public function setUp()
{
    parent::setUp();

    $this->notEqual = new \PhpParser\Node\Expr\BinaryOp\NotEqual();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->notEqual->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->notEqual->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
