<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\Contains;

class ContainsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\Contains
*/
protected $contains;

public function setUp()
{
    parent::setUp();

    $this->contains = new \Mockery\Matcher\Contains();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->contains->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch1()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($match === false) == false (line 42)

    $actual = $this->contains->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch2()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($match === false) == true (line 42)

    $actual = $this->contains->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch3()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exp === $val || $exp == $val) == false (line 37)
    // if ($match === false) == false (line 42)

    $actual = $this->contains->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch4()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exp === $val || $exp == $val) == false (line 37)
    // if ($match === false) == true (line 42)

    $actual = $this->contains->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch5()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exp === $val || $exp == $val) == true (line 37)
    // if ($match === false) == false (line 42)

    $actual = $this->contains->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch6()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exp === $val || $exp == $val) == true (line 37)
    // if ($match === false) == true (line 42)

    $actual = $this->contains->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->contains->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString1()
{
    // TODO: Your mock expectations here

    $actual = $this->contains->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
