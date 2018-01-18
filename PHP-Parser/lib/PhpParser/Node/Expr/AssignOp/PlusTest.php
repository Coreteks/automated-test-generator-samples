<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\Plus;

class PlusTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\Plus
*/
protected $plus;

public function setUp()
{
    parent::setUp();

    $this->plus = new \PhpParser\Node\Expr\AssignOp\Plus();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->plus->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
