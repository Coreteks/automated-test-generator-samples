<?php

namespace tests\Illuminate\Support\Testing\Fakes;

use Illuminate\Support\Testing\Fakes\QueueFake;
use Mockery as m;

class QueueFakeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Testing\Fakes\QueueFake
*/
protected $queueFake;

public function setUp()
{
    parent::setUp();

    $this->queueFake = new \Illuminate\Support\Testing\Fakes\QueueFake();
}

public function testAssertPushed0()
{
    $job = m::mock('UntypedParameter_job_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_numeric($callback)) == false (line 27)

    $actual = $this->queueFake->assertPushed($job, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertPushed1()
{
    $job = m::mock('UntypedParameter_job_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_numeric($callback)) == true (line 27)

    $actual = $this->queueFake->assertPushed($job, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertPushedOn0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $job = m::mock('UntypedParameter_job_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->assertPushedOn($queue, $job, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNotPushed0()
{
    $job = m::mock('UntypedParameter_job_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->assertNotPushed($job, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNothingPushed0()
{
    // TODO: Your mock expectations here

    $actual = $this->queueFake->assertNothingPushed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushed0()
{
    $job = m::mock('UntypedParameter_job_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasPushed($job)) == false (line 105)

    $actual = $this->queueFake->pushed($job, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushed1()
{
    $job = m::mock('UntypedParameter_job_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasPushed($job)) == true (line 105)

    $actual = $this->queueFake->pushed($job, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasPushed0()
{
    $job = m::mock('UntypedParameter_job_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->hasPushed($job);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnection0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->connection($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSize0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->size($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushRaw0()
{
    $payload = m::mock('UntypedParameter_payload_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->queueFake->pushRaw($payload, $queue, $options);
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

    $actual = $this->queueFake->later($delay, $job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushOn0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->pushOn($queue, $job, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLaterOn0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $delay = m::mock('UntypedParameter_delay_');
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->laterOn($queue, $delay, $job, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBulk0()
{
    $jobs = m::mock('UntypedParameter_jobs_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->bulk($jobs, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBulk1()
{
    $jobs = m::mock('UntypedParameter_jobs_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->bulk($jobs, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnectionName0()
{
    // TODO: Your mock expectations here

    $actual = $this->queueFake->getConnectionName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConnectionName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->queueFake->setConnectionName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
