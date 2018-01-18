<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\Type;

class TypeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Matcher\Type
*/
protected $type;

public function setUp()
{
    parent::setUp();

    $this->type = new \Mockery\Matcher\Type();
}

public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (function_exists($function)) == false (line 34)
    // if (is_string($this->_expected) && (class_exists($this->_expected) || interface_exists($this->_expected))) == false (line 36)

    $actual = $this->type->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch1()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (function_exists($function)) == false (line 34)
    // if (is_string($this->_expected) && (class_exists($this->_expected) || interface_exists($this->_expected))) == true (line 36)

    $actual = $this->type->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch2()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (function_exists($function)) == true (line 34)

    $actual = $this->type->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->type->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
