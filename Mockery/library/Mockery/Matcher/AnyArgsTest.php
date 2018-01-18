<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\AnyArgs;

class AnyArgsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\AnyArgs
*/
protected $anyArgs;

public function setUp()
{
    parent::setUp();

    $this->anyArgs = new \Mockery\Matcher\AnyArgs();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->anyArgs->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->anyArgs->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
