<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Property;

class PropertyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_flags = null;
/**
* @var array
*/
protected $_props = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Property
*/
protected $property;

public function setUp()
{
    parent::setUp();

    $this->_flags = null;
    $this->_props = [];
    $this->_attributes = [];
    $this->property = new \PhpParser\Node\Stmt\Property($this->_flags, $this->_props, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsPublic0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->isPublic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsProtected0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->isProtected();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsPrivate0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->isPrivate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsStatic0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->isStatic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->property->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
