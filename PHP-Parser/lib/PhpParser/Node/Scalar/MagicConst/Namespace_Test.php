<?php

namespace tests\PhpParser\Node\Scalar\MagicConst;

use Mockery as m;
use PhpParser\Node\Scalar\MagicConst\Namespace_;

class Namespace_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Scalar\MagicConst\Namespace_
*/
protected $namespace_;

public function setUp()
{
    parent::setUp();

    $this->namespace_ = new \PhpParser\Node\Scalar\MagicConst\Namespace_();
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->namespace_->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->namespace_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
