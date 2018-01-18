<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Finally_;
use PhpParser\Node\Stmt\TryCatch;

class TryCatchTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_stmts = [];
/**
* @var array
*/
protected $_catches = [];
/**
* @var \Mockery\MockInterface
*/
protected $_finally;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Stmt\TryCatch
*/
protected $tryCatch;

public function setUp()
{
    parent::setUp();

    $this->_stmts = [];
    $this->_catches = [];
    $this->_finally = m::mock(\PhpParser\Node\Stmt\Finally_::class);
    $this->_attributes = [];
    $this->tryCatch = new \PhpParser\Node\Stmt\TryCatch($this->_stmts, $this->_catches, $this->_finally, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->tryCatch->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->tryCatch->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
