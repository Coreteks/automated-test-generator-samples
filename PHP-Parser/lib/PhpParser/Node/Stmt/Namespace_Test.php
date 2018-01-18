<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\Namespace_;

class Namespace_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_name;
/**
* @var mixed
*/
protected $_stmts = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Namespace_
*/
protected $namespace_;

public function setUp()
{
    parent::setUp();

    $this->_name = m::mock(\PhpParser\Node\Name::class);
    $this->_stmts = null;
    $this->_attributes = [];
    $this->namespace_ = new \PhpParser\Node\Stmt\Namespace_($this->_name, $this->_stmts, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->namespace_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->namespace_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
