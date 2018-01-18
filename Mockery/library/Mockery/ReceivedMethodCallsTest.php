<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\ReceivedMethodCalls;

class ReceivedMethodCallsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\ReceivedMethodCalls
*/
protected $receivedMethodCalls;

public function setUp()
{
    parent::setUp();

    $this->receivedMethodCalls = new \Mockery\ReceivedMethodCalls();
}

public function testPush0()
{
    $methodCall = m::mock(\Mockery\MethodCall::class);

    // TODO: Your mock expectations here

    $actual = $this->receivedMethodCalls->push($methodCall);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify0()
{
    $expectation = m::mock(\Mockery\Expectation::class);

    // TODO: Your mock expectations here

    $actual = $this->receivedMethodCalls->verify($expectation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify1()
{
    $expectation = m::mock(\Mockery\Expectation::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($methodCall->getMethod() !== $expectation->getName()) == false (line 35)
    // if (!$expectation->matchArgs($methodCall->getArgs())) == false (line 39)

    $actual = $this->receivedMethodCalls->verify($expectation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify2()
{
    $expectation = m::mock(\Mockery\Expectation::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($methodCall->getMethod() !== $expectation->getName()) == false (line 35)
    // if (!$expectation->matchArgs($methodCall->getArgs())) == true (line 39)

    $actual = $this->receivedMethodCalls->verify($expectation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify3()
{
    $expectation = m::mock(\Mockery\Expectation::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($methodCall->getMethod() !== $expectation->getName()) == true (line 35)

    $actual = $this->receivedMethodCalls->verify($expectation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
