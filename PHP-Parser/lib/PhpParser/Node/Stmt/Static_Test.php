<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Static_;

class Static_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_vars = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Static_
*/
protected $static_;

public function setUp()
{
    parent::setUp();

    $this->_vars = [];
    $this->_attributes = [];
    $this->static_ = new \PhpParser\Node\Stmt\Static_($this->_vars, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->static_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->static_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
