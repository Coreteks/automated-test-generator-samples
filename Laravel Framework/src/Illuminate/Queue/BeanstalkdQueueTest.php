<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\BeanstalkdQueue;
use Mockery as m;
use Pheanstalk\Pheanstalk;

class BeanstalkdQueueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_pheanstalk;
/**
* @var mixed
*/
protected $_default = null;
/**
* @var mixed
*/
protected $_timeToRun = null;
/**
* @var \Illuminate\Queue\BeanstalkdQueue
*/
protected $beanstalkdQueue;

public function setUp()
{
    parent::setUp();

    $this->_pheanstalk = m::mock(\Pheanstalk\Pheanstalk::class);
    $this->_default = null;
    $this->_timeToRun = null;
    $this->beanstalkdQueue = new \Illuminate\Queue\BeanstalkdQueue($this->_pheanstalk, $this->_default, $this->_timeToRun);
}

public function testSize0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->beanstalkdQueue->size($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->beanstalkdQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushRaw0()
{
    $payload = m::mock('UntypedParameter_payload_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->beanstalkdQueue->pushRaw($payload, $queue, $options);
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

    $actual = $this->beanstalkdQueue->later($delay, $job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job instanceof \Pheanstalk\Job) == false (line 122)

    $actual = $this->beanstalkdQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop1()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job instanceof \Pheanstalk\Job) == true (line 122)

    $actual = $this->beanstalkdQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteMessage0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->beanstalkdQueue->deleteMessage($queue, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueue0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->beanstalkdQueue->getQueue($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPheanstalk0()
{
    // TODO: Your mock expectations here

    $actual = $this->beanstalkdQueue->getPheanstalk();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
