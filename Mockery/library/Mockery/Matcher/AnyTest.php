<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\Any;

class AnyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\Any
*/
protected $any;

public function setUp()
{
    parent::setUp();

    $this->any = new \Mockery\Matcher\Any();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->any->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->any->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
