<?php

namespace tests\PhpParser\Node;

use Mockery as m;
use PhpParser\Node\Identifier;

class IdentifierTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Identifier
*/
protected $identifier;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_attributes = [];
    $this->identifier = new \PhpParser\Node\Identifier($this->_name, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->identifier->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->identifier->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToLowerString0()
{
    // TODO: Your mock expectations here

    $actual = $this->identifier->toLowerString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsSpecialClassName0()
{
    // TODO: Your mock expectations here

    $actual = $this->identifier->isSpecialClassName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->identifier->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->identifier->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
