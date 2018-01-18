<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\RateLimiter;
use Illuminate\Contracts\Cache\Repository;
use Mockery as m;

class RateLimiterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cache;
/**
* @var \Illuminate\Cache\RateLimiter
*/
protected $rateLimiter;

public function setUp()
{
    parent::setUp();

    $this->_cache = m::mock(\Illuminate\Contracts\Cache\Repository::class);
    $this->rateLimiter = new \Illuminate\Cache\RateLimiter($this->_cache);
}

public function testTooManyAttempts0()
{
    $key = m::mock('UntypedParameter_key_');
    $maxAttempts = m::mock('UntypedParameter_maxAttempts_');
    $decayMinutes = m::mock('UntypedParameter_decayMinutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->attempts($key) >= $maxAttempts) == false (line 40)

    $actual = $this->rateLimiter->tooManyAttempts($key, $maxAttempts, $decayMinutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTooManyAttempts1()
{
    $key = m::mock('UntypedParameter_key_');
    $maxAttempts = m::mock('UntypedParameter_maxAttempts_');
    $decayMinutes = m::mock('UntypedParameter_decayMinutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->attempts($key) >= $maxAttempts) == true (line 40)
    // if ($this->cache->has($key . ':timer')) == false (line 41)

    $actual = $this->rateLimiter->tooManyAttempts($key, $maxAttempts, $decayMinutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTooManyAttempts2()
{
    $key = m::mock('UntypedParameter_key_');
    $maxAttempts = m::mock('UntypedParameter_maxAttempts_');
    $decayMinutes = m::mock('UntypedParameter_decayMinutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->attempts($key) >= $maxAttempts) == true (line 40)
    // if ($this->cache->has($key . ':timer')) == true (line 41)

    $actual = $this->rateLimiter->tooManyAttempts($key, $maxAttempts, $decayMinutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHit0()
{
    $key = m::mock('UntypedParameter_key_');
    $decayMinutes = m::mock('UntypedParameter_decayMinutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$added && $hits == 1) == false (line 68)

    $actual = $this->rateLimiter->hit($key, $decayMinutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHit1()
{
    $key = m::mock('UntypedParameter_key_');
    $decayMinutes = m::mock('UntypedParameter_decayMinutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$added && $hits == 1) == true (line 68)

    $actual = $this->rateLimiter->hit($key, $decayMinutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttempts0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->rateLimiter->attempts($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResetAttempts0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->rateLimiter->resetAttempts($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetriesLeft0()
{
    $key = m::mock('UntypedParameter_key_');
    $maxAttempts = m::mock('UntypedParameter_maxAttempts_');

    // TODO: Your mock expectations here

    $actual = $this->rateLimiter->retriesLeft($key, $maxAttempts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->rateLimiter->clear($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAvailableIn0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->rateLimiter->availableIn($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
