<?php

namespace tests;

use Mockery as m;
use SimplePie_Credit;

class SimplePie_CreditTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_role = null;
/**
* @var mixed
*/
protected $_scheme = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \SimplePie_Credit
*/
protected $simplePie_Credit;

public function setUp()
{
    parent::setUp();

    $this->_role = null;
    $this->_scheme = null;
    $this->_name = null;
    $this->simplePie_Credit = new \SimplePie_Credit($this->_role, $this->_scheme, $this->_name);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_Credit->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->role !== \null) == false (line 112)

    $actual = $this->simplePie_Credit->get_role();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->role !== \null) == true (line 112)

    $actual = $this->simplePie_Credit->get_role();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_scheme0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->scheme !== \null) == false (line 129)

    $actual = $this->simplePie_Credit->get_scheme();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_scheme1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->scheme !== \null) == true (line 129)

    $actual = $this->simplePie_Credit->get_scheme();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_name0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->name !== \null) == false (line 146)

    $actual = $this->simplePie_Credit->get_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_name1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->name !== \null) == true (line 146)

    $actual = $this->simplePie_Credit->get_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
