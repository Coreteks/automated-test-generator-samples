<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\YieldFrom;

class YieldFromTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_expr;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\YieldFrom
*/
protected $yieldFrom;

public function setUp()
{
    parent::setUp();

    $this->_expr = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->yieldFrom = new \PhpParser\Node\Expr\YieldFrom($this->_expr, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->yieldFrom->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->yieldFrom->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
