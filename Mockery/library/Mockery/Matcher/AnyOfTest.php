<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\AnyOf;

class AnyOfTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\AnyOf
*/
protected $anyOf;

public function setUp()
{
    parent::setUp();

    $this->anyOf = new \Mockery\Matcher\AnyOf();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->anyOf->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch1()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual === $exp) == false (line 35)

    $actual = $this->anyOf->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch2()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual === $exp) == true (line 35)

    $actual = $this->anyOf->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->anyOf->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
