<?php

namespace tests\PhpParser\Node\Expr\Cast;

use Mockery as m;
use PhpParser\Node\Expr\Cast\Array_;

class Array_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\Cast\Array_
*/
protected $array_;

public function setUp()
{
    parent::setUp();

    $this->array_ = new \PhpParser\Node\Expr\Cast\Array_();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->array_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
