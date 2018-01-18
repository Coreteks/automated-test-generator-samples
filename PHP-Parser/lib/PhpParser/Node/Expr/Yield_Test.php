<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Yield_;

class Yield_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_value;
/**
* @var \Mockery\MockInterface
*/
protected $_key;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\Yield_
*/
protected $yield_;

public function setUp()
{
    parent::setUp();

    $this->_value = m::mock(\PhpParser\Node\Expr::class);
    $this->_key = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->yield_ = new \PhpParser\Node\Expr\Yield_($this->_value, $this->_key, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->yield_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->yield_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
