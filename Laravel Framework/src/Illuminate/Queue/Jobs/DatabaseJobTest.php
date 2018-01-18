<?php

namespace tests\Illuminate\Queue\Jobs;

use Illuminate\Container\Container;
use Illuminate\Queue\DatabaseQueue;
use Illuminate\Queue\Jobs\DatabaseJob;
use Mockery as m;

class DatabaseJobTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Mockery\MockInterface
*/
protected $_database;
/**
* @var mixed
*/
protected $_job = null;
/**
* @var mixed
*/
protected $_connectionName = null;
/**
* @var mixed
*/
protected $_queue = null;
/**
* @var \Illuminate\Queue\Jobs\DatabaseJob
*/
protected $databaseJob;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Container\Container::class);
    $this->_database = m::mock(\Illuminate\Queue\DatabaseQueue::class);
    $this->_job = null;
    $this->_connectionName = null;
    $this->_queue = null;
    $this->databaseJob = new \Illuminate\Queue\Jobs\DatabaseJob($this->_container, $this->_database, $this->_job, $this->_connectionName, $this->_queue);
}

public function testRelease0()
{
    $delay = m::mock('UntypedParameter_delay_');

    // TODO: Your mock expectations here

    $actual = $this->databaseJob->release($delay);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseJob->delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttempts0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseJob->attempts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetJobId0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseJob->getJobId();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRawBody0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseJob->getRawBody();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
