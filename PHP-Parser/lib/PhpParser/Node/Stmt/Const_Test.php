<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Const_;

class Const_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_consts = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Const_
*/
protected $const_;

public function setUp()
{
    parent::setUp();

    $this->_consts = [];
    $this->_attributes = [];
    $this->const_ = new \PhpParser\Node\Stmt\Const_($this->_consts, $this->_attributes);
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
