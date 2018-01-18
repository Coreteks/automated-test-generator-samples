<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\RetryMiddleware;
use Mockery as m;

class RetryMiddlewareTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_decider = null;
/**
* @var mixed
*/
protected $_nextHandler = null;
/**
* @var mixed
*/
protected $_delay = null;
/**
* @var \GuzzleHttp\RetryMiddleware
*/
protected $retryMiddleware;

public function setUp()
{
    parent::setUp();

    $this->_decider = null;
    $this->_nextHandler = null;
    $this->_delay = null;
    $this->retryMiddleware = new \GuzzleHttp\RetryMiddleware($this->_decider, $this->_nextHandler, $this->_delay);
}

public function testExponentialDelay0()
{
    $retries = m::mock('UntypedParameter_retries_');

    // TODO: Your mock expectations here

    $actual = $this->retryMiddleware->exponentialDelay($retries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($options['retries'])) == false (line 62)

    $actual = $this->retryMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($options['retries'])) == true (line 62)

    $actual = $this->retryMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
