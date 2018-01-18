<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\StaticPropertyFetch;

class StaticPropertyFetchTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\StaticPropertyFetch
*/
protected $staticPropertyFetch;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->_name = null;
    $this->_attributes = [];
    $this->staticPropertyFetch = new \PhpParser\Node\Expr\StaticPropertyFetch($this->_class, $this->_name, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->staticPropertyFetch->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->staticPropertyFetch->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
