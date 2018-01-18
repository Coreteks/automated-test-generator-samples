<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\GroupUse;

class GroupUseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_prefix;
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
* @var \PhpParser\Node\Stmt\GroupUse
*/
protected $groupUse;

public function setUp()
{
    parent::setUp();

    $this->_prefix = m::mock(\PhpParser\Node\Name::class);
    $this->_uses = [];
    $this->_type = null;
    $this->_attributes = [];
    $this->groupUse = new \PhpParser\Node\Stmt\GroupUse($this->_prefix, $this->_uses, $this->_type, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->groupUse->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->groupUse->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
