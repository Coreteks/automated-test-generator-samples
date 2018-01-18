<?php

namespace tests\Illuminate\Redis\Limiters;

use Illuminate\Redis\Limiters\ConcurrencyLimiter;
use Mockery as m;

class ConcurrencyLimiterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_redis = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_maxLocks = null;
/**
* @var mixed
*/
protected $_releaseAfter = null;
/**
* @var \Illuminate\Redis\Limiters\ConcurrencyLimiter
*/
protected $concurrencyLimiter;

public function setUp()
{
    parent::setUp();

    $this->_redis = null;
    $this->_name = null;
    $this->_maxLocks = null;
    $this->_releaseAfter = null;
    $this->concurrencyLimiter = new \Illuminate\Redis\Limiters\ConcurrencyLimiter($this->_redis, $this->_name, $this->_maxLocks, $this->_releaseAfter);
}

public function testBlock0()
{
    $timeout = m::mock('UntypedParameter_timeout_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!($slot = $this->acquire())) == false (line 66)
    // if (is_callable($callback)) == false (line 74)

    $actual = $this->concurrencyLimiter->block($timeout, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlock1()
{
    $timeout = m::mock('UntypedParameter_timeout_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!($slot = $this->acquire())) == false (line 66)
    // if (is_callable($callback)) == true (line 74)

    $actual = $this->concurrencyLimiter->block($timeout, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlock2()
{
    $timeout = m::mock('UntypedParameter_timeout_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!($slot = $this->acquire())) == true (line 66)
    // if (time() - $timeout >= $starting) == false (line 67)
    // while (!($slot = $this->acquire())) == false (line 66)
    // if (is_callable($callback)) == false (line 74)

    $actual = $this->concurrencyLimiter->block($timeout, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlock3()
{
    $timeout = m::mock('UntypedParameter_timeout_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!($slot = $this->acquire())) == true (line 66)
    // if (time() - $timeout >= $starting) == false (line 67)
    // while (!($slot = $this->acquire())) == false (line 66)
    // if (is_callable($callback)) == true (line 74)

    $actual = $this->concurrencyLimiter->block($timeout, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Contracts\Redis\LimiterTimeoutException
 */
public function testBlock4()
{
    $timeout = m::mock('UntypedParameter_timeout_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!($slot = $this->acquire())) == true (line 66)
    // if (time() - $timeout >= $starting) == true (line 67)
    // throw new \Illuminate\Contracts\Redis\LimiterTimeoutException() -> exception (line 68)

    $actual = $this->concurrencyLimiter->block($timeout, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
