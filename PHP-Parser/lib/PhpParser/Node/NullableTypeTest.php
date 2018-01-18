<?php

namespace tests\PhpParser\Node;

use Mockery as m;
use PhpParser\Node\NullableType;

class NullableTypeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_type = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\NullableType
*/
protected $nullableType;

public function setUp()
{
    parent::setUp();

    $this->_type = null;
    $this->_attributes = [];
    $this->nullableType = new \PhpParser\Node\NullableType($this->_type, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->nullableType->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->nullableType->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
