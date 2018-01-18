<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Declare_;

class Declare_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_declares = [];
/**
* @var array
*/
protected $_stmts = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Declare_
*/
protected $declare_;

public function setUp()
{
    parent::setUp();

    $this->_declares = [];
    $this->_stmts = [];
    $this->_attributes = [];
    $this->declare_ = new \PhpParser\Node\Stmt\Declare_($this->_declares, $this->_stmts, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->declare_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->declare_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
