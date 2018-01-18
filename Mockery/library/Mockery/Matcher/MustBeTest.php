<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\MustBe;

class MustBeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\MustBe
*/
protected $mustBe;

public function setUp()
{
    parent::setUp();

    $this->mustBe = new \Mockery\Matcher\MustBe();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($actual)) == false (line 36)

    $actual = $this->mustBe->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch1()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($actual)) == true (line 36)

    $actual = $this->mustBe->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->mustBe->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
