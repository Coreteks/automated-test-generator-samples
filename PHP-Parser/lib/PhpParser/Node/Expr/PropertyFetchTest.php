<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\PropertyFetch;

class PropertyFetchTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_var;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\PropertyFetch
*/
protected $propertyFetch;

public function setUp()
{
    parent::setUp();

    $this->_var = m::mock(\PhpParser\Node\Expr::class);
    $this->_name = null;
    $this->_attributes = [];
    $this->propertyFetch = new \PhpParser\Node\Expr\PropertyFetch($this->_var, $this->_name, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->propertyFetch->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->propertyFetch->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
