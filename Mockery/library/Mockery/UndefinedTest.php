<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\Undefined;

class UndefinedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Undefined
*/
protected $undefined;

public function setUp()
{
    parent::setUp();

    $this->undefined = new \Mockery\Undefined();
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = [];

    // TODO: Your mock expectations here

    $actual = $this->undefined->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->undefined->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
