<?php

namespace tests\Illuminate\Queue;

use Illuminate\Database\Connection;
use Illuminate\Queue\DatabaseQueue;
use Mockery as m;

class DatabaseQueueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_database;
/**
* @var mixed
*/
protected $_table = null;
/**
* @var mixed
*/
protected $_default = null;
/**
* @var mixed
*/
protected $_retryAfter = null;
/**
* @var \Illuminate\Queue\DatabaseQueue
*/
protected $databaseQueue;

public function setUp()
{
    parent::setUp();

    $this->_database = m::mock(\Illuminate\Database\Connection::class);
    $this->_table = null;
    $this->_default = null;
    $this->_retryAfter = null;
    $this->databaseQueue = new \Illuminate\Queue\DatabaseQueue($this->_database, $this->_table, $this->_default, $this->_retryAfter);
}

public function testSize0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->databaseQueue->size($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->databaseQueue->push($job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushRaw0()
{
    $payload = m::mock('UntypedParameter_payload_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->databaseQueue->pushRaw($payload, $queue, $options);
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

    $actual = $this->databaseQueue->later($delay, $job, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBulk0()
{
    $jobs = m::mock('UntypedParameter_jobs_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->databaseQueue->bulk($jobs, $data, $queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRelease0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $job = m::mock('UntypedParameter_job_');
    $delay = m::mock('UntypedParameter_delay_');

    // TODO: Your mock expectations here

    $actual = $this->databaseQueue->release($queue, $job, $delay);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPop0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->databaseQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPop1()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw $e -> exception (line 205)

    $actual = $this->databaseQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPop2()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job = $this->getNextAvailableJob($queue)) -> exception (line 197)

    $actual = $this->databaseQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPop3()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job = $this->getNextAvailableJob($queue)) -> exception (line 197)
    // throw $e -> exception (line 205)

    $actual = $this->databaseQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPop4()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job = $this->getNextAvailableJob($queue)) == false (line 197)

    $actual = $this->databaseQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPop5()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job = $this->getNextAvailableJob($queue)) == false (line 197)
    // throw $e -> exception (line 205)

    $actual = $this->databaseQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop6()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job = $this->getNextAvailableJob($queue)) == false (line 197)

    $actual = $this->databaseQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPop7()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job = $this->getNextAvailableJob($queue)) == true (line 197)

    $actual = $this->databaseQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPop8()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job = $this->getNextAvailableJob($queue)) == true (line 197)
    // throw $e -> exception (line 205)

    $actual = $this->databaseQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop9()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job = $this->getNextAvailableJob($queue)) == true (line 197)

    $actual = $this->databaseQueue->pop($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteReserved0()
{
    $queue = m::mock('UntypedParameter_queue_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->databaseQueue->deleteReserved($queue, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueue0()
{
    $queue = m::mock('UntypedParameter_queue_');

    // TODO: Your mock expectations here

    $actual = $this->databaseQueue->getQueue($queue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDatabase0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseQueue->getDatabase();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
