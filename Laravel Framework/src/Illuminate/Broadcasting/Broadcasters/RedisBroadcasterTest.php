<?php

namespace tests\Illuminate\Broadcasting\Broadcasters;

use Illuminate\Broadcasting\Broadcasters\RedisBroadcaster;
use Illuminate\Contracts\Redis\Factory;
use Mockery as m;

class RedisBroadcasterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_redis;
/**
* @var mixed
*/
protected $_connection = null;
/**
* @var \Illuminate\Broadcasting\Broadcasters\RedisBroadcaster
*/
protected $redisBroadcaster;

public function setUp()
{
    parent::setUp();

    $this->_redis = m::mock(\Illuminate\Contracts\Redis\Factory::class);
    $this->_connection = null;
    $this->redisBroadcaster = new \Illuminate\Broadcasting\Broadcasters\RedisBroadcaster($this->_redis, $this->_connection);
}

public function testAuth0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::startsWith($request->channel_name, ['private-', 'presence-']) && !$request->user()) == false (line 48)

    $actual = $this->redisBroadcaster->auth($request);
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
    // if (\Illuminate\Support\Str::startsWith($request->channel_name, ['private-', 'presence-']) && !$request->user()) == true (line 48)
    // throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException() -> exception (line 50)

    $actual = $this->redisBroadcaster->auth($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidAuthenticationResponse0()
{
    $request = m::mock('UntypedParameter_request_');
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_bool($result)) == false (line 71)

    $actual = $this->redisBroadcaster->validAuthenticationResponse($request, $result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidAuthenticationResponse1()
{
    $request = m::mock('UntypedParameter_request_');
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_bool($result)) == true (line 71)

    $actual = $this->redisBroadcaster->validAuthenticationResponse($request, $result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBroadcast0()
{
    $channels = [];
    $event = m::mock('UntypedParameter_event_');
    $payload = [];

    // TODO: Your mock expectations here

    $actual = $this->redisBroadcaster->broadcast($channels, $event, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBroadcast1()
{
    $channels = [];
    $event = m::mock('UntypedParameter_event_');
    $payload = [];

    // TODO: Your mock expectations here

    $actual = $this->redisBroadcaster->broadcast($channels, $event, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
