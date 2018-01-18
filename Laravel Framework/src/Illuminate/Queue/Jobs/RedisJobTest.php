<?php

namespace tests\Illuminate\Queue\Jobs;

use Illuminate\Container\Container;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Queue\RedisQueue;
use Mockery as m;

class RedisJobTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Mockery\MockInterface
*/
protected $_redis;
/**
* @var mixed
*/
protected $_job = null;
/**
* @var mixed
*/
protected $_reserved = null;
/**
* @var mixed
*/
protected $_connectionName = null;
/**
* @var mixed
*/
protected $_queue = null;
/**
* @var \Illuminate\Queue\Jobs\RedisJob
*/
protected $redisJob;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Container\Container::class);
    $this->_redis = m::mock(\Illuminate\Queue\RedisQueue::class);
    $this->_job = null;
    $this->_reserved = null;
    $this->_connectionName = null;
    $this->_queue = null;
    $this->redisJob = new \Illuminate\Queue\Jobs\RedisJob($this->_container, $this->_redis, $this->_job, $this->_reserved, $this->_connectionName, $this->_queue);
}

public function testGetRawBody0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisJob->getRawBody();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisJob->delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRelease0()
{
    $delay = m::mock('UntypedParameter_delay_');

    // TODO: Your mock expectations here

    $actual = $this->redisJob->release($delay);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttempts0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisJob->attempts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetJobId0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisJob->getJobId();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRedisQueue0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisJob->getRedisQueue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReservedJob0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisJob->getReservedJob();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
