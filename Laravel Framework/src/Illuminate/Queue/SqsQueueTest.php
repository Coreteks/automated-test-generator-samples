<?php

namespace tests\Illuminate\Queue;

use Aws\Sqs\SqsClient;
use Illuminate\Queue\SqsQueue;
use Mockery as m;

class SqsQueueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_sqs;
/**
* @var mixed
*/
protected $_default = null;
/**
* @var mixed
*/
protected $_prefix = null;
/**
* @var \Illuminate\Queue\SqsQueue
*/
protected $sqsQueue;

public function setUp()
{
    parent::setUp();

    $this->_sqs = m::mock(\Aws\Sqs\SqsClient::class);
    $this->_default = null;
    $this->_prefix = null;
    $this->sqsQueue = new \Illuminate\Queue\SqsQueue($this->_sqs, $this->_default, $this->_prefix);
}

public function testSize0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->sqsQueue->size($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->sqsQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushRaw0()
{
    $payload = m::mock('UntypedParameter_payload_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->sqsQueue->pushRaw($payload, $queue, $options);
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

    $actual = $this->sqsQueue->later($delay, $job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($response['Messages']) && count($response['Messages']) > 0) == false (line 124)

    $actual = $this->sqsQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop1()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($response['Messages']) && count($response['Messages']) > 0) == true (line 124)

    $actual = $this->sqsQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueue0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->sqsQueue->getQueue($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSqs0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqsQueue->getSqs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
