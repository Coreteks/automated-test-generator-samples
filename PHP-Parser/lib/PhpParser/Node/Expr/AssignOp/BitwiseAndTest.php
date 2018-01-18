<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\BitwiseAnd;

class BitwiseAndTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\BitwiseAnd
*/
protected $bitwiseAnd;

public function setUp()
{
    parent::setUp();

    $this->bitwiseAnd = new \PhpParser\Node\Expr\AssignOp\BitwiseAnd();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->bitwiseAnd->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
