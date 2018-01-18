<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\UseUse;

class UseUseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_name;
/**
* @var mixed
*/
protected $_alias = null;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\UseUse
*/
protected $useUse;

public function setUp()
{
    parent::setUp();

    $this->_name = m::mock(\PhpParser\Node\Name::class);
    $this->_alias = null;
    $this->_type = null;
    $this->_attributes = [];
    $this->useUse = new \PhpParser\Node\Stmt\UseUse($this->_name, $this->_alias, $this->_type, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->useUse->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAlias0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->alias) == false (line 42)

    $actual = $this->useUse->getAlias();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAlias1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->alias) == true (line 42)

    $actual = $this->useUse->getAlias();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->useUse->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
