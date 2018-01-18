<?php

namespace tests\PhpParser\Node;

use Mockery as m;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;

class ArgTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_value;
/**
* @var mixed
*/
protected $_byRef = null;
/**
* @var mixed
*/
protected $_unpack = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Arg
*/
protected $arg;

public function setUp()
{
    parent::setUp();

    $this->_value = m::mock(\PhpParser\Node\Expr::class);
    $this->_byRef = null;
    $this->_unpack = null;
    $this->_attributes = [];
    $this->arg = new \PhpParser\Node\Arg($this->_value, $this->_byRef, $this->_unpack, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->arg->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->arg->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
