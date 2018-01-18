<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\ArrayDimFetch;

class ArrayDimFetchTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_var;
/**
* @var \Mockery\MockInterface
*/
protected $_dim;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\ArrayDimFetch
*/
protected $arrayDimFetch;

public function setUp()
{
    parent::setUp();

    $this->_var = m::mock(\PhpParser\Node\Expr::class);
    $this->_dim = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->arrayDimFetch = new \PhpParser\Node\Expr\ArrayDimFetch($this->_var, $this->_dim, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->arrayDimFetch->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->arrayDimFetch->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
