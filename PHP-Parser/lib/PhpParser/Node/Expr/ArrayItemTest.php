<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\ArrayItem;

class ArrayItemTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_value;
/**
* @var \Mockery\MockInterface
*/
protected $_key;
/**
* @var mixed
*/
protected $_byRef = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\ArrayItem
*/
protected $arrayItem;

public function setUp()
{
    parent::setUp();

    $this->_value = m::mock(\PhpParser\Node\Expr::class);
    $this->_key = m::mock(\PhpParser\Node\Expr::class);
    $this->_byRef = null;
    $this->_attributes = [];
    $this->arrayItem = new \PhpParser\Node\Expr\ArrayItem($this->_value, $this->_key, $this->_byRef, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->arrayItem->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->arrayItem->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
