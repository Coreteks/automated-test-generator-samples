<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Stmt\StaticVar;

class StaticVarTest extends \PHPUnit_Framework_TestCase
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
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\StaticVar
*/
protected $staticVar;

public function setUp()
{
    parent::setUp();

    $this->_var = m::mock(\PhpParser\Node\Expr\Variable::class);
    $this->_default = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->staticVar = new \PhpParser\Node\Stmt\StaticVar($this->_var, $this->_default, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->staticVar->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->staticVar->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
