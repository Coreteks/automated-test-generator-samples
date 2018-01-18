<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt\DeclareDeclare;

class DeclareDeclareTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_key = null;
/**
* @var \Mockery\MockInterface
*/
protected $_value;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\DeclareDeclare
*/
protected $declareDeclare;

public function setUp()
{
    parent::setUp();

    $this->_key = null;
    $this->_value = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->declareDeclare = new \PhpParser\Node\Stmt\DeclareDeclare($this->_key, $this->_value, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->declareDeclare->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->declareDeclare->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
