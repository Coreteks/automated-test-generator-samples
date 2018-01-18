<?php

namespace tests\Illuminate\Queue;

use Illuminate\Contracts\Redis\Factory;
use Illuminate\Queue\RedisQueue;
use Mockery as m;

class RedisQueueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_redis;
/**
* @var mixed
*/
protected $_default = null;
/**
* @var mixed
*/
protected $_connection = null;
/**
* @var mixed
*/
protected $_retryAfter = null;
/**
* @var \Illuminate\Queue\RedisQueue
*/
protected $redisQueue;

public function setUp()
{
    parent::setUp();

    $this->_redis = m::mock(\Illuminate\Contracts\Redis\Factory::class);
    $this->_default = null;
    $this->_connection = null;
    $this->_retryAfter = null;
    $this->redisQueue = new \Illuminate\Queue\RedisQueue($this->_redis, $this->_default, $this->_connection, $this->_retryAfter);
}

public function testSize0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->redisQueue->size($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->redisQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushRaw0()
{
    $payload = m::mock('UntypedParameter_payload_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->redisQueue->pushRaw($payload, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLater0()
{
    $delay = m::mock('UntypedParameter_delay_');
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->redisQueue->later($delay, $job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reserved) == false (line 158)

    $actual = $this->redisQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop1()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reserved) == true (line 158)

    $actual = $this->redisQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMigrateExpiredJobs0()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');

    // TODO: Your mock expectations here

    $actual = $this->redisQueue->migrateExpiredJobs($from, $to);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteReserved0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $job = m::mock('UntypedParameter_job_');

    // TODO: Your mock expectations here

    $actual = $this->redisQueue->deleteReserved($queue, $job);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteAndRelease0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $job = m::mock('UntypedParameter_job_');
    $delay = m::mock('UntypedParameter_delay_');

    // TODO: Your mock expectations here

    $actual = $this->redisQueue->deleteAndRelease($queue, $job, $delay);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueue0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->redisQueue->getQueue($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRedis0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisQueue->getRedis();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
