<?php

namespace tests\Mockery\Generator;

use Mockery as m;
use Mockery\Generator\MockConfigurationBuilder;

class MockConfigurationBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Generator\MockConfigurationBuilder
*/
protected $mockConfigurationBuilder;

public function setUp()
{
    parent::setUp();

    $this->mockConfigurationBuilder = new \Mockery\Generator\MockConfigurationBuilder();
}

public function testAddTarget0()
{
    $target = m::mock('UntypedParameter_target_');

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->addTarget($target);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddTargets0()
{
    $targets = m::mock('UntypedParameter_targets_');

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->addTargets($targets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddTargets1()
{
    $targets = m::mock('UntypedParameter_targets_');

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->addTargets($targets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->setName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddBlackListedMethod0()
{
    $blackListedMethod = m::mock('UntypedParameter_blackListedMethod_');

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->addBlackListedMethod($blackListedMethod);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddBlackListedMethods0()
{
    $blackListedMethods = [];

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->addBlackListedMethods($blackListedMethods);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddBlackListedMethods1()
{
    $blackListedMethods = [];

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->addBlackListedMethods($blackListedMethods);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetBlackListedMethods0()
{
    $blackListedMethods = [];

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->setBlackListedMethods($blackListedMethods);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWhiteListedMethod0()
{
    $whiteListedMethod = m::mock('UntypedParameter_whiteListedMethod_');

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->addWhiteListedMethod($whiteListedMethod);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWhiteListedMethods0()
{
    $whiteListedMethods = [];

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->addWhiteListedMethods($whiteListedMethods);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWhiteListedMethods1()
{
    $whiteListedMethods = [];

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->addWhiteListedMethods($whiteListedMethods);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetWhiteListedMethods0()
{
    $whiteListedMethods = [];

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->setWhiteListedMethods($whiteListedMethods);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetInstanceMock0()
{
    $instanceMock = m::mock('UntypedParameter_instanceMock_');

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->setInstanceMock($instanceMock);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetParameterOverrides0()
{
    $overrides = [];

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->setParameterOverrides($overrides);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetMockOriginalDestructor0()
{
    $mockDestructor = m::mock('UntypedParameter_mockDestructor_');

    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->setMockOriginalDestructor($mockDestructor);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMockConfiguration0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockConfigurationBuilder->getMockConfiguration();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
