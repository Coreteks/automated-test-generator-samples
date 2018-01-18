<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\ClassConst;

class ClassConstTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_consts = [];
/**
* @var mixed
*/
protected $_flags = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\ClassConst
*/
protected $classConst;

public function setUp()
{
    parent::setUp();

    $this->_consts = [];
    $this->_flags = null;
    $this->_attributes = [];
    $this->classConst = new \PhpParser\Node\Stmt\ClassConst($this->_consts, $this->_flags, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->classConst->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsPublic0()
{
    // TODO: Your mock expectations here

    $actual = $this->classConst->isPublic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsProtected0()
{
    // TODO: Your mock expectations here

    $actual = $this->classConst->isProtected();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsPrivate0()
{
    // TODO: Your mock expectations here

    $actual = $this->classConst->isPrivate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->classConst->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
