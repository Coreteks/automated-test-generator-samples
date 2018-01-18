<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\TraitUse;

class TraitUseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_traits = [];
/**
* @var array
*/
protected $_adaptations = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\TraitUse
*/
protected $traitUse;

public function setUp()
{
    parent::setUp();

    $this->_traits = [];
    $this->_adaptations = [];
    $this->_attributes = [];
    $this->traitUse = new \PhpParser\Node\Stmt\TraitUse($this->_traits, $this->_adaptations, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->traitUse->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->traitUse->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
