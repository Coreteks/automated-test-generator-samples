<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Ternary;

class TernaryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cond;
/**
* @var mixed
*/
protected $_if = null;
/**
* @var \Mockery\MockInterface
*/
protected $_else;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\Ternary
*/
protected $ternary;

public function setUp()
{
    parent::setUp();

    $this->_cond = m::mock(\PhpParser\Node\Expr::class);
    $this->_if = null;
    $this->_else = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->ternary = new \PhpParser\Node\Expr\Ternary($this->_cond, $this->_if, $this->_else, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->ternary->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->ternary->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
