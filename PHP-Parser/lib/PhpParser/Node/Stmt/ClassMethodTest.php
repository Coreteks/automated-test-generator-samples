<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\ClassMethod;

class ClassMethodTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var array
*/
protected $_subNodes = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\ClassMethod
*/
protected $classMethod;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_subNodes = [];
    $this->_attributes = [];
    $this->classMethod = new \PhpParser\Node\Stmt\ClassMethod($this->_name, $this->_subNodes, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReturnsByRef0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->returnsByRef();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParams0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->getParams();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReturnType0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->getReturnType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetStmts0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->getStmts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsPublic0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->isPublic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsProtected0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->isProtected();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsPrivate0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->isPrivate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsAbstract0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->isAbstract();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFinal0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->isFinal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsStatic0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->isStatic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsMagic0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->isMagic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->classMethod->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
