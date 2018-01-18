<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Echo_;

class Echo_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_exprs = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Echo_
*/
protected $echo_;

public function setUp()
{
    parent::setUp();

    $this->_exprs = [];
    $this->_attributes = [];
    $this->echo_ = new \PhpParser\Node\Stmt\Echo_($this->_exprs, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->echo_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->echo_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
