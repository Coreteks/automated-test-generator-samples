<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\NotIdentical;

class NotIdenticalTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\NotIdentical
*/
protected $notIdentical;

public function setUp()
{
    parent::setUp();

    $this->notIdentical = new \PhpParser\Node\Expr\BinaryOp\NotIdentical();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->notIdentical->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->notIdentical->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
