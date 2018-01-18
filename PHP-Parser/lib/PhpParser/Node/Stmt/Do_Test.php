<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt\Do_;

class Do_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cond;
/**
* @var array
*/
protected $_stmts = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Do_
*/
protected $do_;

public function setUp()
{
    parent::setUp();

    $this->_cond = m::mock(\PhpParser\Node\Expr::class);
    $this->_stmts = [];
    $this->_attributes = [];
    $this->do_ = new \PhpParser\Node\Stmt\Do_($this->_cond, $this->_stmts, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->do_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->do_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
