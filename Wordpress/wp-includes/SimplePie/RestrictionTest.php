<?php

namespace tests;

use Mockery as m;
use SimplePie_Restriction;

class SimplePie_RestrictionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_relationship = null;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var mixed
*/
protected $_value = null;
/**
* @var \SimplePie_Restriction
*/
protected $simplePie_Restriction;

public function setUp()
{
    parent::setUp();

    $this->_relationship = null;
    $this->_type = null;
    $this->_value = null;
    $this->simplePie_Restriction = new \SimplePie_Restriction($this->_relationship, $this->_type, $this->_value);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_Restriction->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_relationship0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->relationship !== \null) == false (line 112)

    $actual = $this->simplePie_Restriction->get_relationship();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_relationship1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->relationship !== \null) == true (line 112)

    $actual = $this->simplePie_Restriction->get_relationship();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->type !== \null) == false (line 129)

    $actual = $this->simplePie_Restriction->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->type !== \null) == true (line 129)

    $actual = $this->simplePie_Restriction->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_value0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->value !== \null) == false (line 146)

    $actual = $this->simplePie_Restriction->get_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_value1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->value !== \null) == true (line 146)

    $actual = $this->simplePie_Restriction->get_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
