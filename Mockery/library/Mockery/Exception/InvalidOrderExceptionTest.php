<?php

namespace tests\Mockery\Exception;

use Mockery as m;
use Mockery\Exception\InvalidOrderException;

class InvalidOrderExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Exception\InvalidOrderException
*/
protected $invalidOrderException;

public function setUp()
{
    parent::setUp();

    $this->invalidOrderException = new \Mockery\Exception\InvalidOrderException();
}

public function testSetMock0()
{
    $mock = m::mock(\Mockery\MockInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->invalidOrderException->setMock($mock);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetMethodName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->invalidOrderException->setMethodName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetActualOrder0()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    $actual = $this->invalidOrderException->setActualOrder($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetExpectedOrder0()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    $actual = $this->invalidOrderException->setExpectedOrder($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMock0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidOrderException->getMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodName0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidOrderException->getMethodName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetActualOrder0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidOrderException->getActualOrder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExpectedOrder0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidOrderException->getExpectedOrder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMockName0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidOrderException->getMockName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
