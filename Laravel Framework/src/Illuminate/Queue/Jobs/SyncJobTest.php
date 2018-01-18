<?php

namespace tests\Illuminate\Queue\Jobs;

use Illuminate\Container\Container;
use Illuminate\Queue\Jobs\SyncJob;
use Mockery as m;

class SyncJobTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var mixed
*/
protected $_payload = null;
/**
* @var mixed
*/
protected $_connectionName = null;
/**
* @var mixed
*/
protected $_queue = null;
/**
* @var \Illuminate\Queue\Jobs\SyncJob
*/
protected $syncJob;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Container\Container::class);
    $this->_payload = null;
    $this->_connectionName = null;
    $this->_queue = null;
    $this->syncJob = new \Illuminate\Queue\Jobs\SyncJob($this->_container, $this->_payload, $this->_connectionName, $this->_queue);
}

public function testRelease0()
{
    $delay = m::mock('UntypedParameter_delay_');

    // TODO: Your mock expectations here

    $actual = $this->syncJob->release($delay);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttempts0()
{
    // TODO: Your mock expectations here

    $actual = $this->syncJob->attempts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetJobId0()
{
    // TODO: Your mock expectations here

    $actual = $this->syncJob->getJobId();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRawBody0()
{
    // TODO: Your mock expectations here

    $actual = $this->syncJob->getRawBody();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueue0()
{
    // TODO: Your mock expectations here

    $actual = $this->syncJob->getQueue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
