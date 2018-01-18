<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\SyncQueue;
use Mockery as m;

class SyncQueueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\SyncQueue
*/
protected $syncQueue;

public function setUp()
{
    parent::setUp();

    $this->syncQueue = new \Illuminate\Queue\SyncQueue();
}

public function testSize0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->size($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPush0()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush1()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush2()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPush3()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush4()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush5()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPush6()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush7()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush8()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush9()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushRaw0()
{
    $payload = m::mock('UntypedParameter_payload_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->pushRaw($payload, $queue, $options);
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

    $actual = $this->syncQueue->later($delay, $job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->syncQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
