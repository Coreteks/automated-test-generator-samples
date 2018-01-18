<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt\Return_;

class Return_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_expr;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Return_
*/
protected $return_;

public function setUp()
{
    parent::setUp();

    $this->_expr = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->return_ = new \PhpParser\Node\Stmt\Return_($this->_expr, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->return_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->return_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
