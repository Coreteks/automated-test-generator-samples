<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\Concat;

class ConcatTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\Concat
*/
protected $concat;

public function setUp()
{
    parent::setUp();

    $this->concat = new \PhpParser\Node\Expr\AssignOp\Concat();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->concat->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}