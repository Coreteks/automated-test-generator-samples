<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Case_;

class Case_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_cond = null;
/**
* @var array
*/
protected $_stmts = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Case_
*/
protected $case_;

public function setUp()
{
    parent::setUp();

    $this->_cond = null;
    $this->_stmts = [];
    $this->_attributes = [];
    $this->case_ = new \PhpParser\Node\Stmt\Case_($this->_cond, $this->_stmts, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->case_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->case_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
