<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt\Foreach_;

class Foreach_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_expr;
/**
* @var \Mockery\MockInterface
*/
protected $_valueVar;
/**
* @var array
*/
protected $_subNodes = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Foreach_
*/
protected $foreach_;

public function setUp()
{
    parent::setUp();

    $this->_expr = m::mock(\PhpParser\Node\Expr::class);
    $this->_valueVar = m::mock(\PhpParser\Node\Expr::class);
    $this->_subNodes = [];
    $this->_attributes = [];
    $this->foreach_ = new \PhpParser\Node\Stmt\Foreach_($this->_expr, $this->_valueVar, $this->_subNodes, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->foreach_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->foreach_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
