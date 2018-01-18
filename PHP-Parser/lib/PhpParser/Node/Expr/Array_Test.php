<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\Array_;

class Array_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_items = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\Array_
*/
protected $array_;

public function setUp()
{
    parent::setUp();

    $this->_items = [];
    $this->_attributes = [];
    $this->array_ = new \PhpParser\Node\Expr\Array_($this->_items, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->array_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->array_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
