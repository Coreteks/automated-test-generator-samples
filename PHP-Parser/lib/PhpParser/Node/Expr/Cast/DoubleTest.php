<?php

namespace tests\PhpParser\Node\Expr\Cast;

use Mockery as m;
use PhpParser\Node\Expr\Cast\Double;

class DoubleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\Cast\Double
*/
protected $double;

public function setUp()
{
    parent::setUp();

    $this->double = new \PhpParser\Node\Expr\Cast\Double();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->double->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
