<?php

namespace tests;

use Mockery as m;
use SimplePie_Rating;

class SimplePie_RatingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_scheme = null;
/**
* @var mixed
*/
protected $_value = null;
/**
* @var \SimplePie_Rating
*/
protected $simplePie_Rating;

public function setUp()
{
    parent::setUp();

    $this->_scheme = null;
    $this->_value = null;
    $this->simplePie_Rating = new \SimplePie_Rating($this->_scheme, $this->_value);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_Rating->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_scheme0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->scheme !== \null) == false (line 103)

    $actual = $this->simplePie_Rating->get_scheme();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_scheme1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->scheme !== \null) == true (line 103)

    $actual = $this->simplePie_Rating->get_scheme();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_value0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->value !== \null) == false (line 120)

    $actual = $this->simplePie_Rating->get_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_value1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->value !== \null) == true (line 120)

    $actual = $this->simplePie_Rating->get_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
