<?php

namespace tests\Illuminate\Broadcasting\Broadcasters;

use Illuminate\Broadcasting\Broadcasters\LogBroadcaster;
use Mockery as m;
use Psr\Log\LoggerInterface;

class LogBroadcasterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_logger;
/**
* @var \Illuminate\Broadcasting\Broadcasters\LogBroadcaster
*/
protected $logBroadcaster;

public function setUp()
{
    parent::setUp();

    $this->_logger = m::mock(\Psr\Log\LoggerInterface::class);
    $this->logBroadcaster = new \Illuminate\Broadcasting\Broadcasters\LogBroadcaster($this->_logger);
}

public function testAuth0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->logBroadcaster->auth($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidAuthenticationResponse0()
{
    $request = m::mock('UntypedParameter_request_');
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    $actual = $this->logBroadcaster->validAuthenticationResponse($request, $result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBroadcast0()
{
    $channels = [];
    $event = m::mock('UntypedParameter_event_');
    $payload = [];

    // TODO: Your mock expectations here

    $actual = $this->logBroadcaster->broadcast($channels, $event, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
