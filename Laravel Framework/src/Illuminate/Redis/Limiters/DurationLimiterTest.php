<?php

namespace tests\Illuminate\Redis\Limiters;

use Illuminate\Redis\Limiters\DurationLimiter;
use Mockery as m;

class DurationLimiterTest extends \PHPUnit_Framework_TestCase
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
protected $_decay = null;
/**
* @var \Illuminate\Redis\Limiters\DurationLimiter
*/
protected $durationLimiter;

public function setUp()
{
    parent::setUp();

    $this->_redis = null;
    $this->_name = null;
    $this->_maxLocks = null;
    $this->_decay = null;
    $this->durationLimiter = new \Illuminate\Redis\Limiters\DurationLimiter($this->_redis, $this->_name, $this->_maxLocks, $this->_decay);
}

public function testBlock0()
{
    $timeout = m::mock('UntypedParameter_timeout_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!$this->acquire()) == false (line 80)
    // if (is_callable($callback)) == false (line 88)

    $actual = $this->durationLimiter->block($timeout, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlock1()
{
    $timeout = m::mock('UntypedParameter_timeout_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!$this->acquire()) == false (line 80)
    // if (is_callable($callback)) == true (line 88)

    $actual = $this->durationLimiter->block($timeout, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlock2()
{
    $timeout = m::mock('UntypedParameter_timeout_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!$this->acquire()) == true (line 80)
    // if (time() - $timeout >= $starting) == false (line 81)
    // while (!$this->acquire()) == false (line 80)
    // if (is_callable($callback)) == false (line 88)

    $actual = $this->durationLimiter->block($timeout, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlock3()
{
    $timeout = m::mock('UntypedParameter_timeout_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!$this->acquire()) == true (line 80)
    // if (time() - $timeout >= $starting) == false (line 81)
    // while (!$this->acquire()) == false (line 80)
    // if (is_callable($callback)) == true (line 88)

    $actual = $this->durationLimiter->block($timeout, $callback);
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
    // while (!$this->acquire()) == true (line 80)
    // if (time() - $timeout >= $starting) == true (line 81)
    // throw new \Illuminate\Contracts\Redis\LimiterTimeoutException() -> exception (line 82)

    $actual = $this->durationLimiter->block($timeout, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAcquire0()
{
    // TODO: Your mock expectations here

    $actual = $this->durationLimiter->acquire();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
