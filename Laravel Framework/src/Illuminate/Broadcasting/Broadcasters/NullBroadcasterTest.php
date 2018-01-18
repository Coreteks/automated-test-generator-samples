<?php

namespace tests\Illuminate\Broadcasting\Broadcasters;

use Illuminate\Broadcasting\Broadcasters\NullBroadcaster;
use Mockery as m;

class NullBroadcasterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Broadcasting\Broadcasters\NullBroadcaster
*/
protected $nullBroadcaster;

public function setUp()
{
    parent::setUp();

    $this->nullBroadcaster = new \Illuminate\Broadcasting\Broadcasters\NullBroadcaster();
}

public function testAuth0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->nullBroadcaster->auth($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidAuthenticationResponse0()
{
    $request = m::mock('UntypedParameter_request_');
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    $actual = $this->nullBroadcaster->validAuthenticationResponse($request, $result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBroadcast0()
{
    $channels = [];
    $event = m::mock('UntypedParameter_event_');
    $payload = [];

    // TODO: Your mock expectations here

    $actual = $this->nullBroadcaster->broadcast($channels, $event, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
