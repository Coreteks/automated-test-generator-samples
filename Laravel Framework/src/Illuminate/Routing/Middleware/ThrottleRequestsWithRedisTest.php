<?php

namespace tests\Illuminate\Routing\Middleware;

use Illuminate\Contracts\Redis\Factory;
use Illuminate\Routing\Middleware\ThrottleRequestsWithRedis;
use Mockery as m;

class ThrottleRequestsWithRedisTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_redis;
/**
* @var \Illuminate\Routing\Middleware\ThrottleRequestsWithRedis
*/
protected $throttleRequestsWithRedis;

public function setUp()
{
    parent::setUp();

    $this->_redis = m::mock(\Illuminate\Contracts\Redis\Factory::class);
    $this->throttleRequestsWithRedis = new \Illuminate\Routing\Middleware\ThrottleRequestsWithRedis($this->_redis);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);
    $maxAttempts = m::mock('UntypedParameter_maxAttempts_');
    $decayMinutes = m::mock('UntypedParameter_decayMinutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->tooManyAttempts($key, $maxAttempts, $decayMinutes)) == false (line 59)

    $actual = $this->throttleRequestsWithRedis->handle($request, $next, $maxAttempts, $decayMinutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle1()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);
    $maxAttempts = m::mock('UntypedParameter_maxAttempts_');
    $decayMinutes = m::mock('UntypedParameter_decayMinutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->tooManyAttempts($key, $maxAttempts, $decayMinutes)) == true (line 59)
    // throw $this->buildException($key, $maxAttempts) -> exception (line 60)

    $actual = $this->throttleRequestsWithRedis->handle($request, $next, $maxAttempts, $decayMinutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
