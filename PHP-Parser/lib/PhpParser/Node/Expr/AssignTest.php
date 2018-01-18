<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Assign;

class AssignTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_var;
/**
* @var \Mockery\MockInterface
*/
protected $_expr;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\Assign
*/
protected $assign;

public function setUp()
{
    parent::setUp();

    $this->_var = m::mock(\PhpParser\Node\Expr::class);
    $this->_expr = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->assign = new \PhpParser\Node\Expr\Assign($this->_var, $this->_expr, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->assign->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->assign->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
