<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\BitwiseXor;

class BitwiseXorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\BitwiseXor
*/
protected $bitwiseXor;

public function setUp()
{
    parent::setUp();

    $this->bitwiseXor = new \PhpParser\Node\Expr\AssignOp\BitwiseXor();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->bitwiseXor->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
