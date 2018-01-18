<?php

namespace tests\PhpParser\Node\Scalar;

use Mockery as m;
use PhpParser\Node\Scalar\EncapsedStringPart;

class EncapsedStringPartTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Scalar\EncapsedStringPart
*/
protected $encapsedStringPart;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->_attributes = [];
    $this->encapsedStringPart = new \PhpParser\Node\Scalar\EncapsedStringPart($this->_value, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->encapsedStringPart->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->encapsedStringPart->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
