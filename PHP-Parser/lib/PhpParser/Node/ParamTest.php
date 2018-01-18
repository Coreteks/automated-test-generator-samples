<?php

namespace tests\PhpParser\Node;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Param;

class ParamTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_var;
/**
* @var \Mockery\MockInterface
*/
protected $_default;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var mixed
*/
protected $_byRef = null;
/**
* @var mixed
*/
protected $_variadic = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Param
*/
protected $param;

public function setUp()
{
    parent::setUp();

    $this->_var = m::mock(\PhpParser\Node\Expr\Variable::class);
    $this->_default = m::mock(\PhpParser\Node\Expr::class);
    $this->_type = null;
    $this->_byRef = null;
    $this->_variadic = null;
    $this->_attributes = [];
    $this->param = new \PhpParser\Node\Param($this->_var, $this->_default, $this->_type, $this->_byRef, $this->_variadic, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->param->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->param->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
