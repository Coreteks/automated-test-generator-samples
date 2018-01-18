<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\Subset;

class SubsetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_expected = [];
/**
* @var mixed
*/
protected $_strict = null;
/**
* @var \Mockery\Matcher\Subset
*/
protected $subset;

public function setUp()
{
    parent::setUp();

    $this->_expected = [];
    $this->_strict = null;
    $this->subset = new \Mockery\Matcher\Subset($this->_expected, $this->_strict);
}

public function testStrict0()
{
    $expected = [];

    // TODO: Your mock expectations here

    $actual = $this->subset->strict($expected);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoose0()
{
    $expected = [];

    // TODO: Your mock expectations here

    $actual = $this->subset->loose($expected);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($actual)) == false (line 66)
    // if ($this->strict) == false (line 70)

    $actual = $this->subset->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch1()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($actual)) == false (line 66)
    // if ($this->strict) == true (line 70)

    $actual = $this->subset->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch2()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($actual)) == true (line 66)

    $actual = $this->subset->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->subset->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString1()
{
    // TODO: Your mock expectations here

    $actual = $this->subset->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
