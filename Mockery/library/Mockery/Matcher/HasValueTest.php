<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\HasValue;

class HasValueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\HasValue
*/
protected $hasValue;

public function setUp()
{
    parent::setUp();

    $this->hasValue = new \Mockery\Matcher\HasValue();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->hasValue->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasValue->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
