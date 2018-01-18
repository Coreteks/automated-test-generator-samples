<?php

namespace tests\PhpParser\Node\Scalar\MagicConst;

use Mockery as m;
use PhpParser\Node\Scalar\MagicConst\Function_;

class Function_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Scalar\MagicConst\Function_
*/
protected $function_;

public function setUp()
{
    parent::setUp();

    $this->function_ = new \PhpParser\Node\Scalar\MagicConst\Function_();
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->function_->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->function_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
