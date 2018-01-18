<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Goto_;

class Goto_Test extends \PHPUnit_Framework_TestCase
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
* @var \PhpParser\Node\Stmt\Goto_
*/
protected $goto_;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_attributes = [];
    $this->goto_ = new \PhpParser\Node\Stmt\Goto_($this->_name, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->goto_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->goto_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
