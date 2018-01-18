<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Use_;

class Use_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_uses = [];
/**
* @var mixed
*/
protected $_type = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\Use_
*/
protected $use_;

public function setUp()
{
    parent::setUp();

    $this->_uses = [];
    $this->_type = null;
    $this->_attributes = [];
    $this->use_ = new \PhpParser\Node\Stmt\Use_($this->_uses, $this->_type, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->use_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->use_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
