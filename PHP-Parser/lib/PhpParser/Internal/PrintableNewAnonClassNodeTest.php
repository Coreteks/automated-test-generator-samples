<?php

namespace tests\PhpParser\Internal;

use Mockery as m;
use PhpParser\Internal\PrintableNewAnonClassNode;
use PhpParser\Node\Name;

class PrintableNewAnonClassNodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_args = [];
/**
* @var \Mockery\MockInterface
*/
protected $_extends;
/**
* @var array
*/
protected $_implements = [];
/**
* @var array
*/
protected $_stmts = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Internal\PrintableNewAnonClassNode
*/
protected $printableNewAnonClassNode;

public function setUp()
{
    parent::setUp();

    $this->_args = [];
    $this->_extends = m::mock(\PhpParser\Node\Name::class);
    $this->_implements = [];
    $this->_stmts = [];
    $this->_attributes = [];
    $this->printableNewAnonClassNode = new \PhpParser\Internal\PrintableNewAnonClassNode($this->_args, $this->_extends, $this->_implements, $this->_stmts, $this->_attributes);
}

public function testFromNewNode0()
{
    $newNode = m::mock(\PhpParser\Node\Expr\New_::class);

    // TODO: Your mock expectations here

    $actual = $this->printableNewAnonClassNode->fromNewNode($newNode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->printableNewAnonClassNode->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->printableNewAnonClassNode->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
