<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\BitwiseOr;

class BitwiseOrTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\BitwiseOr
*/
protected $bitwiseOr;

public function setUp()
{
    parent::setUp();

    $this->bitwiseOr = new \PhpParser\Node\Expr\AssignOp\BitwiseOr();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->bitwiseOr->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
