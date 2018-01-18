<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Name;

class ConstFetchTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_name;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\ConstFetch
*/
protected $constFetch;

public function setUp()
{
    parent::setUp();

    $this->_name = m::mock(\PhpParser\Node\Name::class);
    $this->_attributes = [];
    $this->constFetch = new \PhpParser\Node\Expr\ConstFetch($this->_name, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->constFetch->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->constFetch->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
