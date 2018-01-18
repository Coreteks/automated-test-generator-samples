<?php

namespace tests\Illuminate\Routing\Middleware;

use Illuminate\Cache\RateLimiter;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Mockery as m;

class ThrottleRequestsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_limiter;
/**
* @var \Illuminate\Routing\Middleware\ThrottleRequests
*/
protected $throttleRequests;

public function setUp()
{
    parent::setUp();

    $this->_limiter = m::mock(\Illuminate\Cache\RateLimiter::class);
    $this->throttleRequests = new \Illuminate\Routing\Middleware\ThrottleRequests($this->_limiter);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);
    $maxAttempts = m::mock('UntypedParameter_maxAttempts_');
    $decayMinutes = m::mock('UntypedParameter_decayMinutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->limiter->tooManyAttempts($key, $maxAttempts, $decayMinutes)) == false (line 51)

    $actual = $this->throttleRequests->handle($request, $next, $maxAttempts, $decayMinutes);
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
    // if ($this->limiter->tooManyAttempts($key, $maxAttempts, $decayMinutes)) == true (line 51)
    // throw $this->buildException($key, $maxAttempts) -> exception (line 52)

    $actual = $this->throttleRequests->handle($request, $next, $maxAttempts, $decayMinutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
