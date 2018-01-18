<?php

namespace tests\Mockery\Exception;

use Mockery as m;
use Mockery\Exception\NoMatchingExpectationException;

class NoMatchingExpectationExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Exception\NoMatchingExpectationException
*/
protected $noMatchingExpectationException;

public function setUp()
{
    parent::setUp();

    $this->noMatchingExpectationException = new \Mockery\Exception\NoMatchingExpectationException();
}

public function testSetMock0()
{
    $mock = m::mock(\Mockery\MockInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->noMatchingExpectationException->setMock($mock);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetMethodName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->noMatchingExpectationException->setMethodName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetActualArguments0()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    $actual = $this->noMatchingExpectationException->setActualArguments($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMock0()
{
    // TODO: Your mock expectations here

    $actual = $this->noMatchingExpectationException->getMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodName0()
{
    // TODO: Your mock expectations here

    $actual = $this->noMatchingExpectationException->getMethodName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetActualArguments0()
{
    // TODO: Your mock expectations here

    $actual = $this->noMatchingExpectationException->getActualArguments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMockName0()
{
    // TODO: Your mock expectations here

    $actual = $this->noMatchingExpectationException->getMockName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
