<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\New_;

class New_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var array
*/
protected $_args = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\New_
*/
protected $new_;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->_args = [];
    $this->_attributes = [];
    $this->new_ = new \PhpParser\Node\Expr\New_($this->_class, $this->_args, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->new_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->new_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
