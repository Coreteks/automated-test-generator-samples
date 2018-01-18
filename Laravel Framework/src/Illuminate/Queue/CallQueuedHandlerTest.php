<?php

namespace tests\Illuminate\Queue;

use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Queue\CallQueuedHandler;
use Mockery as m;

class CallQueuedHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_dispatcher;
/**
* @var \Illuminate\Queue\CallQueuedHandler
*/
protected $callQueuedHandler;

public function setUp()
{
    parent::setUp();

    $this->_dispatcher = m::mock(\Illuminate\Contracts\Bus\Dispatcher::class);
    $this->callQueuedHandler = new \Illuminate\Queue\CallQueuedHandler($this->_dispatcher);
}

/**
 * @expectedException \Exception
 */
public function testCall0()
{
    $job = m::mock(\Illuminate\Contracts\Queue\Job::class);
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->callQueuedHandler->call($job, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall1()
{
    $job = m::mock(\Illuminate\Contracts\Queue\Job::class);
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->callQueuedHandler->call($job, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall2()
{
    $job = m::mock(\Illuminate\Contracts\Queue\Job::class);
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$job->hasFailed() && !$job->isReleased()) == false (line 52)
    // if (!$job->isDeletedOrReleased()) == false (line 56)

    $actual = $this->callQueuedHandler->call($job, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall3()
{
    $job = m::mock(\Illuminate\Contracts\Queue\Job::class);
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$job->hasFailed() && !$job->isReleased()) == false (line 52)
    // if (!$job->isDeletedOrReleased()) == true (line 56)

    $actual = $this->callQueuedHandler->call($job, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall4()
{
    $job = m::mock(\Illuminate\Contracts\Queue\Job::class);
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$job->hasFailed() && !$job->isReleased()) == true (line 52)
    // if (!$job->isDeletedOrReleased()) == false (line 56)

    $actual = $this->callQueuedHandler->call($job, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall5()
{
    $job = m::mock(\Illuminate\Contracts\Queue\Job::class);
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$job->hasFailed() && !$job->isReleased()) == true (line 52)
    // if (!$job->isDeletedOrReleased()) == true (line 56)

    $actual = $this->callQueuedHandler->call($job, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailed0()
{
    $data = [];
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($command, 'failed')) == false (line 148)

    $actual = $this->callQueuedHandler->failed($data, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailed1()
{
    $data = [];
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($command, 'failed')) == true (line 148)

    $actual = $this->callQueuedHandler->failed($data, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
