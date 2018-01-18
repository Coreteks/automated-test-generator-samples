<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\Ducktype;

class DucktypeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\Ducktype
*/
protected $ducktype;

public function setUp()
{
    parent::setUp();

    $this->ducktype = new \Mockery\Matcher\Ducktype();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($actual)) == false (line 33)

    $actual = $this->ducktype->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch1()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($actual)) == false (line 33)
    // if (!method_exists($actual, $method)) == false (line 37)

    $actual = $this->ducktype->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch2()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($actual)) == false (line 33)
    // if (!method_exists($actual, $method)) == true (line 37)

    $actual = $this->ducktype->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch3()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($actual)) == true (line 33)

    $actual = $this->ducktype->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->ducktype->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
