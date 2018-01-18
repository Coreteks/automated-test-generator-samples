<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\HaltCompiler;

class HaltCompilerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_remaining = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\HaltCompiler
*/
protected $haltCompiler;

public function setUp()
{
    parent::setUp();

    $this->_remaining = null;
    $this->_attributes = [];
    $this->haltCompiler = new \PhpParser\Node\Stmt\HaltCompiler($this->_remaining, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->haltCompiler->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->haltCompiler->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
