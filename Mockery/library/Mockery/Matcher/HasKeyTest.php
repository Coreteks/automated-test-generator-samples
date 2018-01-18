<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\HasKey;

class HasKeyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\HasKey
*/
protected $hasKey;

public function setUp()
{
    parent::setUp();

    $this->hasKey = new \Mockery\Matcher\HasKey();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->hasKey->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasKey->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
