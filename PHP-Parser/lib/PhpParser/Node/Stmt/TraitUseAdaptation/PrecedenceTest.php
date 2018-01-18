<?php

namespace tests\PhpParser\Node\Stmt\TraitUseAdaptation;

use Mockery as m;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\TraitUseAdaptation\Precedence;

class PrecedenceTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_trait;
/**
* @var mixed
*/
protected $_method = null;
/**
* @var array
*/
protected $_insteadof = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence
*/
protected $precedence;

public function setUp()
{
    parent::setUp();

    $this->_trait = m::mock(\PhpParser\Node\Name::class);
    $this->_method = null;
    $this->_insteadof = [];
    $this->_attributes = [];
    $this->precedence = new \PhpParser\Node\Stmt\TraitUseAdaptation\Precedence($this->_trait, $this->_method, $this->_insteadof, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->precedence->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->precedence->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
