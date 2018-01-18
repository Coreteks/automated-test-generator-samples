<?php

namespace tests\Illuminate\Queue;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Queue\QueueManager;
use Illuminate\Queue\Worker;
use Mockery as m;

class WorkerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_manager;
/**
* @var \Mockery\MockInterface
*/
protected $_events;
/**
* @var \Mockery\MockInterface
*/
protected $_exceptions;
/**
* @var \Illuminate\Queue\Worker
*/
protected $worker;

public function setUp()
{
    parent::setUp();

    $this->_manager = m::mock(\Illuminate\Queue\QueueManager::class);
    $this->_events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);
    $this->_exceptions = m::mock(\Illuminate\Contracts\Debug\ExceptionHandler::class);
    $this->worker = new \Illuminate\Queue\Worker($this->_manager, $this->_events, $this->_exceptions);
}

public function testDaemon0()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (true) == false (line 91)

    $actual = $this->worker->daemon($connectionName, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDaemon1()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (true) == true (line 91)
    // if (!$this->daemonShouldRun($options, $connectionName, $queue)) == false (line 95)
    // if ($job) == false (line 113)
    // while (true) == false (line 91)

    $actual = $this->worker->daemon($connectionName, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDaemon2()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (true) == true (line 91)
    // if (!$this->daemonShouldRun($options, $connectionName, $queue)) == false (line 95)
    // if ($job) == true (line 113)
    // while (true) == false (line 91)

    $actual = $this->worker->daemon($connectionName, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDaemon3()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (true) == true (line 91)
    // if (!$this->daemonShouldRun($options, $connectionName, $queue)) == true (line 95)
    // while (true) == false (line 91)

    $actual = $this->worker->daemon($connectionName, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunNextJob0()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job) == false (line 226)

    $actual = $this->worker->runNextJob($connectionName, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunNextJob1()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $queue = m::mock('UntypedParameter_queue_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job) == true (line 226)

    $actual = $this->worker->runNextJob($connectionName, $queue, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testProcess0()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testProcess3()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess5()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testProcess6()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess7()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess8()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testProcess9()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess10()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess11()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess12()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $options = m::mock(\Illuminate\Queue\WorkerOptions::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->process($connectionName, $job, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMemoryExceeded0()
{
    $memoryLimit = m::mock('UntypedParameter_memoryLimit_');

    // TODO: Your mock expectations here

    $actual = $this->worker->memoryExceeded($memoryLimit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStop0()
{
    $status = m::mock('UntypedParameter_status_');

    // TODO: Your mock expectations here

    $actual = $this->worker->stop($status);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKill0()
{
    $status = m::mock('UntypedParameter_status_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (extension_loaded('posix')) == false (line 586)

    $actual = $this->worker->kill($status);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKill1()
{
    $status = m::mock('UntypedParameter_status_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (extension_loaded('posix')) == true (line 586)

    $actual = $this->worker->kill($status);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSleep0()
{
    $seconds = m::mock('UntypedParameter_seconds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($seconds < 1) == false (line 601)

    $actual = $this->worker->sleep($seconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSleep1()
{
    $seconds = m::mock('UntypedParameter_seconds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($seconds < 1) == true (line 601)

    $actual = $this->worker->sleep($seconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCache0()
{
    $cache = m::mock(\Illuminate\Contracts\Cache\Repository::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->setCache($cache);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetManager0()
{
    // TODO: Your mock expectations here

    $actual = $this->worker->getManager();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetManager0()
{
    $manager = m::mock(\Illuminate\Queue\QueueManager::class);

    // TODO: Your mock expectations here

    $actual = $this->worker->setManager($manager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
