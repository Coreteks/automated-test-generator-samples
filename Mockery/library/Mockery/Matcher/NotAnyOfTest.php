<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\NotAnyOf;

class NotAnyOfTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\NotAnyOf
*/
protected $notAnyOf;

public function setUp()
{
    parent::setUp();

    $this->notAnyOf = new \Mockery\Matcher\NotAnyOf();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->notAnyOf->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch1()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual === $exp || $actual == $exp) == false (line 35)

    $actual = $this->notAnyOf->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch2()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual === $exp || $actual == $exp) == true (line 35)

    $actual = $this->notAnyOf->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->notAnyOf->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
