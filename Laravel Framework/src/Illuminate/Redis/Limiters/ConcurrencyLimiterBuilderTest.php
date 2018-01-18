<?php

namespace tests\Illuminate\Redis\Limiters;

use Illuminate\Redis\Limiters\ConcurrencyLimiterBuilder;
use Mockery as m;

class ConcurrencyLimiterBuilderTest extends \PHPUnit_Framework_TestCase
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
* @var \Illuminate\Redis\Limiters\ConcurrencyLimiterBuilder
*/
protected $concurrencyLimiterBuilder;

public function setUp()
{
    parent::setUp();

    $this->_connection = null;
    $this->_name = null;
    $this->concurrencyLimiterBuilder = new \Illuminate\Redis\Limiters\ConcurrencyLimiterBuilder($this->_connection, $this->_name);
}

public function testLimit0()
{
    $maxLocks = m::mock('UntypedParameter_maxLocks_');

    // TODO: Your mock expectations here

    $actual = $this->concurrencyLimiterBuilder->limit($maxLocks);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReleaseAfter0()
{
    $releaseAfter = m::mock('UntypedParameter_releaseAfter_');

    // TODO: Your mock expectations here

    $actual = $this->concurrencyLimiterBuilder->releaseAfter($releaseAfter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlock0()
{
    $timeout = m::mock('UntypedParameter_timeout_');

    // TODO: Your mock expectations here

    $actual = $this->concurrencyLimiterBuilder->block($timeout);
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

    $actual = $this->concurrencyLimiterBuilder->then($callback, $failure);
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

    $actual = $this->concurrencyLimiterBuilder->then($callback, $failure);
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

    $actual = $this->concurrencyLimiterBuilder->then($callback, $failure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testThen3()
{
    $callback = m::mock('UntypedParameter_callback_');
    $failure = m::mock('UntypedParameter_failure_');

    // TODO: Your mock expectations here

    $actual = $this->concurrencyLimiterBuilder->then($callback, $failure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
