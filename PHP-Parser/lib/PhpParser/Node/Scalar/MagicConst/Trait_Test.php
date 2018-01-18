<?php

namespace tests\PhpParser\Node\Scalar\MagicConst;

use Mockery as m;
use PhpParser\Node\Scalar\MagicConst\Trait_;

class Trait_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Scalar\MagicConst\Trait_
*/
protected $trait_;

public function setUp()
{
    parent::setUp();

    $this->trait_ = new \PhpParser\Node\Scalar\MagicConst\Trait_();
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->trait_->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->trait_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
