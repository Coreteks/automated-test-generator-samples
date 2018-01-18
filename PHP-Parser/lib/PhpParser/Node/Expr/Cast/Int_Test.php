<?php

namespace tests\PhpParser\Node\Expr\Cast;

use Mockery as m;
use PhpParser\Node\Expr\Cast\Int_;

class Int_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\Cast\Int_
*/
protected $int_;

public function setUp()
{
    parent::setUp();

    $this->int_ = new \PhpParser\Node\Expr\Cast\Int_();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->int_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
