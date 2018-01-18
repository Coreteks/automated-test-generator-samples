<?php

namespace tests\PhpParser\Node;

use Mockery as m;
use PhpParser\Node\Const_;
use PhpParser\Node\Expr;

class Const_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Mockery\MockInterface
*/
protected $_value;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Const_
*/
protected $const_;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_value = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->const_ = new \PhpParser\Node\Const_($this->_name, $this->_value, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->const_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->const_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
