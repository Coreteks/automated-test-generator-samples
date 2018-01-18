<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\Closure;

class ClosureTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\Closure
*/
protected $closure;

public function setUp()
{
    parent::setUp();

    $this->closure = new \Mockery\Matcher\Closure();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->closure->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->closure->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
