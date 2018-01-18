<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\Pow;

class PowTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\Pow
*/
protected $pow;

public function setUp()
{
    parent::setUp();

    $this->pow = new \PhpParser\Node\Expr\AssignOp\Pow();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->pow->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
