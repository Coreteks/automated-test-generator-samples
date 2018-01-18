<?php

namespace tests\PhpParser\Node\Expr\Cast;

use Mockery as m;
use PhpParser\Node\Expr\Cast\Unset_;

class Unset_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\Cast\Unset_
*/
protected $unset_;

public function setUp()
{
    parent::setUp();

    $this->unset_ = new \PhpParser\Node\Expr\Cast\Unset_();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->unset_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
