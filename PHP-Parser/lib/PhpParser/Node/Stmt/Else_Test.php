<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Else_;

class Else_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_stmts = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Else_
*/
protected $else_;

public function setUp()
{
    parent::setUp();

    $this->_stmts = [];
    $this->_attributes = [];
    $this->else_ = new \PhpParser\Node\Stmt\Else_($this->_stmts, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->else_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->else_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
