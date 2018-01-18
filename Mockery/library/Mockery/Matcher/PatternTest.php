<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\Pattern;

class PatternTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\Pattern
*/
protected $pattern;

public function setUp()
{
    parent::setUp();

    $this->pattern = new \Mockery\Matcher\Pattern();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->pattern->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->pattern->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
