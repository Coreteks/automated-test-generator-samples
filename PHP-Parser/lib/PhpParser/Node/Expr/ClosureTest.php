<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\Closure;

class ClosureTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_subNodes = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\Closure
*/
protected $closure;

public function setUp()
{
    parent::setUp();

    $this->_subNodes = [];
    $this->_attributes = [];
    $this->closure = new \PhpParser\Node\Expr\Closure($this->_subNodes, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->closure->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReturnsByRef0()
{
    // TODO: Your mock expectations here

    $actual = $this->closure->returnsByRef();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParams0()
{
    // TODO: Your mock expectations here

    $actual = $this->closure->getParams();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReturnType0()
{
    // TODO: Your mock expectations here

    $actual = $this->closure->getReturnType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetStmts0()
{
    // TODO: Your mock expectations here

    $actual = $this->closure->getStmts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->closure->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
