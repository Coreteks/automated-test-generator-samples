<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\Not;

class NotTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\Not
*/
protected $not;

public function setUp()
{
    parent::setUp();

    $this->not = new \Mockery\Matcher\Not();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->not->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->not->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
