<?php

namespace tests;

use Mockery as m;
use SimplePie_Category;

class SimplePie_CategoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_term = null;
/**
* @var mixed
*/
protected $_scheme = null;
/**
* @var mixed
*/
protected $_label = null;
/**
* @var \SimplePie_Category
*/
protected $simplePie_Category;

public function setUp()
{
    parent::setUp();

    $this->_term = null;
    $this->_scheme = null;
    $this->_label = null;
    $this->simplePie_Category = new \SimplePie_Category($this->_term, $this->_scheme, $this->_label);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_Category->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_term0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->term !== \null) == false (line 113)

    $actual = $this->simplePie_Category->get_term();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_term1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->term !== \null) == true (line 113)

    $actual = $this->simplePie_Category->get_term();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_scheme0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->scheme !== \null) == false (line 130)

    $actual = $this->simplePie_Category->get_scheme();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_scheme1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->scheme !== \null) == true (line 130)

    $actual = $this->simplePie_Category->get_scheme();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_label0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->label !== \null) == false (line 147)

    $actual = $this->simplePie_Category->get_label();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_label1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->label !== \null) == true (line 147)

    $actual = $this->simplePie_Category->get_label();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
