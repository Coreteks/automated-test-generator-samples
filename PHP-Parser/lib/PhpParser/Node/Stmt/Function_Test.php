<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Function_;

class Function_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var array
*/
protected $_subNodes = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Function_
*/
protected $function_;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_subNodes = [];
    $this->_attributes = [];
    $this->function_ = new \PhpParser\Node\Stmt\Function_($this->_name, $this->_subNodes, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->function_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReturnsByRef0()
{
    // TODO: Your mock expectations here

    $actual = $this->function_->returnsByRef();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParams0()
{
    // TODO: Your mock expectations here

    $actual = $this->function_->getParams();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReturnType0()
{
    // TODO: Your mock expectations here

    $actual = $this->function_->getReturnType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetStmts0()
{
    // TODO: Your mock expectations here

    $actual = $this->function_->getStmts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->function_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
