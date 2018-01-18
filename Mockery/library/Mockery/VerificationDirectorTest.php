<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\ReceivedMethodCalls;
use Mockery\VerificationDirector;
use Mockery\VerificationExpectation;

class VerificationDirectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_receivedMethodCalls;
/**
* @var \Mockery\MockInterface
*/
protected $_expectation;
/**
* @var \Mockery\VerificationDirector
*/
protected $verificationDirector;

public function setUp()
{
    parent::setUp();

    $this->_receivedMethodCalls = m::mock(\Mockery\ReceivedMethodCalls::class);
    $this->_expectation = m::mock(\Mockery\VerificationExpectation::class);
    $this->verificationDirector = new \Mockery\VerificationDirector($this->_receivedMethodCalls, $this->_expectation);
}

public function testVerify0()
{
    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWith0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->with($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithArgs0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->withArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithNoArgs0()
{
    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->withNoArgs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithAnyArgs0()
{
    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->withAnyArgs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimes0()
{
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->times($limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnce0()
{
    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->once();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTwice0()
{
    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->twice();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAtLeast0()
{
    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->atLeast();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAtMost0()
{
    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->atMost();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBetween0()
{
    $minimum = m::mock('UntypedParameter_minimum_');
    $maximum = m::mock('UntypedParameter_maximum_');

    // TODO: Your mock expectations here

    $actual = $this->verificationDirector->between($minimum, $maximum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
