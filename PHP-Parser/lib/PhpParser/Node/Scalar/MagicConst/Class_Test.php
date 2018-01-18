<?php

namespace tests\PhpParser\Node\Scalar\MagicConst;

use Mockery as m;
use PhpParser\Node\Scalar\MagicConst\Class_;

class Class_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Scalar\MagicConst\Class_
*/
protected $class_;

public function setUp()
{
    parent::setUp();

    $this->class_ = new \PhpParser\Node\Scalar\MagicConst\Class_();
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->class_->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->class_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
