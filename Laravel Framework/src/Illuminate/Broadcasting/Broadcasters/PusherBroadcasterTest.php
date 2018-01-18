<?php

namespace tests\Illuminate\Broadcasting\Broadcasters;

use Illuminate\Broadcasting\Broadcasters\PusherBroadcaster;
use Mockery as m;
use Pusher\Pusher;

class PusherBroadcasterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_pusher;
/**
* @var \Illuminate\Broadcasting\Broadcasters\PusherBroadcaster
*/
protected $pusherBroadcaster;

public function setUp()
{
    parent::setUp();

    $this->_pusher = m::mock(\Pusher\Pusher::class);
    $this->pusherBroadcaster = new \Illuminate\Broadcasting\Broadcasters\PusherBroadcaster($this->_pusher);
}

public function testAuth0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::startsWith($request->channel_name, ['private-', 'presence-']) && !$request->user()) == false (line 40)

    $actual = $this->pusherBroadcaster->auth($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException
 */
public function testAuth1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::startsWith($request->channel_name, ['private-', 'presence-']) && !$request->user()) == true (line 40)
    // throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException() -> exception (line 42)

    $actual = $this->pusherBroadcaster->auth($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidAuthenticationResponse0()
{
    $request = m::mock('UntypedParameter_request_');
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::startsWith($request->channel_name, 'private')) == false (line 63)

    $actual = $this->pusherBroadcaster->validAuthenticationResponse($request, $result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidAuthenticationResponse1()
{
    $request = m::mock('UntypedParameter_request_');
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::startsWith($request->channel_name, 'private')) == true (line 63)

    $actual = $this->pusherBroadcaster->validAuthenticationResponse($request, $result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Broadcasting\BroadcastException
 */
public function testBroadcast0()
{
    $channels = [];
    $event = m::mock('UntypedParameter_event_');
    $payload = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($response) && $response['status'] >= 200 && $response['status'] <= 299 || $response === true) == false (line 102)
    // throw new \Illuminate\Broadcasting\BroadcastException(is_bool($response) ? 'Failed to connect to Pusher.' : $response['body']) -> exception (line 107)

    $actual = $this->pusherBroadcaster->broadcast($channels, $event, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBroadcast1()
{
    $channels = [];
    $event = m::mock('UntypedParameter_event_');
    $payload = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($response) && $response['status'] >= 200 && $response['status'] <= 299 || $response === true) == true (line 102)

    $actual = $this->pusherBroadcaster->broadcast($channels, $event, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPusher0()
{
    // TODO: Your mock expectations here

    $actual = $this->pusherBroadcaster->getPusher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
