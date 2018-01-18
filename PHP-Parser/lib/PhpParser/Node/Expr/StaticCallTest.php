<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\StaticCall;

class StaticCallTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var array
*/
protected $_args = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\StaticCall
*/
protected $staticCall;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->_name = null;
    $this->_args = [];
    $this->_attributes = [];
    $this->staticCall = new \PhpParser\Node\Expr\StaticCall($this->_class, $this->_name, $this->_args, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->staticCall->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->staticCall->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
