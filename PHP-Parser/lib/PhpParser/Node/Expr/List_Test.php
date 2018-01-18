<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\List_;

class List_Test extends \PHPUnit_Framework_TestCase
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
* @var \PhpParser\Node\Expr\List_
*/
protected $list_;

public function setUp()
{
    parent::setUp();

    $this->_items = [];
    $this->_attributes = [];
    $this->list_ = new \PhpParser\Node\Expr\List_($this->_items, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->list_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->list_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
