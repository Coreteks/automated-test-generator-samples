<?php

namespace tests\Illuminate\Foundation\Bus;

use Illuminate\Foundation\Bus\PendingDispatch;
use Mockery as m;

class PendingDispatchTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_job = null;
/**
* @var \Illuminate\Foundation\Bus\PendingDispatch
*/
protected $pendingDispatch;

public function setUp()
{
    parent::setUp();

    $this->_job = null;
    $this->pendingDispatch = new \Illuminate\Foundation\Bus\PendingDispatch($this->_job);
}

public function testOnConnection0()
{
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->pendingDispatch->onConnection($connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnQueue0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->pendingDispatch->onQueue($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllOnConnection0()
{
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->pendingDispatch->allOnConnection($connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllOnQueue0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->pendingDispatch->allOnQueue($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelay0()
{
    $delay = m::mock('UntypedParameter_delay_');

    // TODO: Your mock expectations here

    $actual = $this->pendingDispatch->delay($delay);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChain0()
{
    $chain = m::mock('UntypedParameter_chain_');

    // TODO: Your mock expectations here

    $actual = $this->pendingDispatch->chain($chain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    $actual = $this->pendingDispatch->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
