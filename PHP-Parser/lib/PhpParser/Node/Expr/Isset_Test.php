<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\Isset_;

class Isset_Test extends \PHPUnit_Framework_TestCase
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
* @var \PhpParser\Node\Expr\Isset_
*/
protected $isset_;

public function setUp()
{
    parent::setUp();

    $this->_vars = [];
    $this->_attributes = [];
    $this->isset_ = new \PhpParser\Node\Expr\Isset_($this->_vars, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->isset_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->isset_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
