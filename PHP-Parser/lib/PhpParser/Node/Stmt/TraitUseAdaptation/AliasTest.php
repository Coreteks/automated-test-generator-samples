<?php

namespace tests\PhpParser\Node\Stmt\TraitUseAdaptation;

use Mockery as m;
use PhpParser\Node\Stmt\TraitUseAdaptation\Alias;

class AliasTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_trait = null;
/**
* @var mixed
*/
protected $_method = null;
/**
* @var mixed
*/
protected $_newModifier = null;
/**
* @var mixed
*/
protected $_newName = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\TraitUseAdaptation\Alias
*/
protected $alias;

public function setUp()
{
    parent::setUp();

    $this->_trait = null;
    $this->_method = null;
    $this->_newModifier = null;
    $this->_newName = null;
    $this->_attributes = [];
    $this->alias = new \PhpParser\Node\Stmt\TraitUseAdaptation\Alias($this->_trait, $this->_method, $this->_newModifier, $this->_newName, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->alias->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->alias->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
