<?php

namespace tests\Illuminate\Redis\Limiters;

use Illuminate\Redis\Limiters\DurationLimiterBuilder;
use Mockery as m;

class DurationLimiterBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_connection = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Illuminate\Redis\Limiters\DurationLimiterBuilder
*/
protected $durationLimiterBuilder;

public function setUp()
{
    parent::setUp();

    $this->_connection = null;
    $this->_name = null;
    $this->durationLimiterBuilder = new \Illuminate\Redis\Limiters\DurationLimiterBuilder($this->_connection, $this->_name);
}

public function testAllow0()
{
    $maxLocks = m::mock('UntypedParameter_maxLocks_');

    // TODO: Your mock expectations here

    $actual = $this->durationLimiterBuilder->allow($maxLocks);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvery0()
{
    $decay = m::mock('UntypedParameter_decay_');

    // TODO: Your mock expectations here

    $actual = $this->durationLimiterBuilder->every($decay);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlock0()
{
    $timeout = m::mock('UntypedParameter_timeout_');

    // TODO: Your mock expectations here

    $actual = $this->durationLimiterBuilder->block($timeout);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testThen0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $failure = m::mock('UntypedParameter_failure_');

    // TODO: Your mock expectations here

    $actual = $this->durationLimiterBuilder->then($callback, $failure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testThen1()
{
    $callback = m::mock('UntypedParameter_callback_');
    $failure = m::mock('UntypedParameter_failure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($failure) == false (line 115)
    // throw $e -> exception (line 119)

    $actual = $this->durationLimiterBuilder->then($callback, $failure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testThen2()
{
    $callback = m::mock('UntypedParameter_callback_');
    $failure = m::mock('UntypedParameter_failure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($failure) == true (line 115)

    $actual = $this->durationLimiterBuilder->then($callback, $failure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testThen3()
{
    $callback = m::mock('UntypedParameter_callback_');
    $failure = m::mock('UntypedParameter_failure_');

    // TODO: Your mock expectations here

    $actual = $this->durationLimiterBuilder->then($callback, $failure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
