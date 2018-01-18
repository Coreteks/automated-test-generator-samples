<?php

namespace tests\PhpParser\Node\Scalar;

use Mockery as m;
use PhpParser\Node\Scalar\Encapsed;

class EncapsedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_parts = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Scalar\Encapsed
*/
protected $encapsed;

public function setUp()
{
    parent::setUp();

    $this->_parts = [];
    $this->_attributes = [];
    $this->encapsed = new \PhpParser\Node\Scalar\Encapsed($this->_parts, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->encapsed->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->encapsed->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
