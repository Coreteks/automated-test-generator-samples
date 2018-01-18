<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\ClosureUse;
use PhpParser\Node\Expr\Variable;

class ClosureUseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_var;
/**
* @var mixed
*/
protected $_byRef = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\ClosureUse
*/
protected $closureUse;

public function setUp()
{
    parent::setUp();

    $this->_var = m::mock(\PhpParser\Node\Expr\Variable::class);
    $this->_byRef = null;
    $this->_attributes = [];
    $this->closureUse = new \PhpParser\Node\Expr\ClosureUse($this->_var, $this->_byRef, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->closureUse->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->closureUse->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
