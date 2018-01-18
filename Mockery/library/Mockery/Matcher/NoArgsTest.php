<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\NoArgs;

class NoArgsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\NoArgs
*/
protected $noArgs;

public function setUp()
{
    parent::setUp();

    $this->noArgs = new \Mockery\Matcher\NoArgs();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->noArgs->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->noArgs->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
