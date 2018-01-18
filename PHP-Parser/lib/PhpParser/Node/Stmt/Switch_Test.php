<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt\Switch_;

class Switch_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cond;
/**
* @var array
*/
protected $_cases = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Switch_
*/
protected $switch_;

public function setUp()
{
    parent::setUp();

    $this->_cond = m::mock(\PhpParser\Node\Expr::class);
    $this->_cases = [];
    $this->_attributes = [];
    $this->switch_ = new \PhpParser\Node\Stmt\Switch_($this->_cond, $this->_cases, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->switch_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->switch_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
