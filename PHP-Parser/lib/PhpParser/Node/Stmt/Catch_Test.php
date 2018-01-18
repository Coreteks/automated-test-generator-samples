<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Stmt\Catch_;

class Catch_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_types = [];
/**
* @var \Mockery\MockInterface
*/
protected $_var;
/**
* @var array
*/
protected $_stmts = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Catch_
*/
protected $catch_;

public function setUp()
{
    parent::setUp();

    $this->_types = [];
    $this->_var = m::mock(\PhpParser\Node\Expr\Variable::class);
    $this->_stmts = [];
    $this->_attributes = [];
    $this->catch_ = new \PhpParser\Node\Stmt\Catch_($this->_types, $this->_var, $this->_stmts, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->catch_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->catch_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
