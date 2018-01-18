<?php

namespace tests\PhpParser\Node\Expr\Cast;

use Mockery as m;
use PhpParser\Node\Expr\Cast\String_;

class String_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\Cast\String_
*/
protected $string_;

public function setUp()
{
    parent::setUp();

    $this->string_ = new \PhpParser\Node\Expr\Cast\String_();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->string_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
