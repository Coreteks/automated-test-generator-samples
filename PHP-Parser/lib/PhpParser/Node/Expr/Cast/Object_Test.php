<?php

namespace tests\PhpParser\Node\Expr\Cast;

use Mockery as m;
use PhpParser\Node\Expr\Cast\Object_;

class Object_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\Cast\Object_
*/
protected $object_;

public function setUp()
{
    parent::setUp();

    $this->object_ = new \PhpParser\Node\Expr\Cast\Object_();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->object_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
