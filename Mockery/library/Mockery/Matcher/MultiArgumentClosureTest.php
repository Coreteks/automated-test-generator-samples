<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\MultiArgumentClosure;

class MultiArgumentClosureTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\MultiArgumentClosure
*/
protected $multiArgumentClosure;

public function setUp()
{
    parent::setUp();

    $this->multiArgumentClosure = new \Mockery\Matcher\MultiArgumentClosure();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->multiArgumentClosure->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->multiArgumentClosure->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
