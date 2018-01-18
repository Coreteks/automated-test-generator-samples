<?php

namespace tests\PhpParser\Node\Expr\Cast;

use Mockery as m;
use PhpParser\Node\Expr\Cast\Bool_;

class Bool_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\Cast\Bool_
*/
protected $bool_;

public function setUp()
{
    parent::setUp();

    $this->bool_ = new \PhpParser\Node\Expr\Cast\Bool_();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->bool_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
