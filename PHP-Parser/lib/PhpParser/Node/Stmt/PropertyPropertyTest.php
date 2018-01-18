<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt\PropertyProperty;

class PropertyPropertyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Mockery\MockInterface
*/
protected $_default;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\PropertyProperty
*/
protected $propertyProperty;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_default = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->propertyProperty = new \PhpParser\Node\Stmt\PropertyProperty($this->_name, $this->_default, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->propertyProperty->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->propertyProperty->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
