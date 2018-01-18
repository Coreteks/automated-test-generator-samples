<?php

namespace tests\Illuminate\Queue\Jobs;

use Aws\Sqs\SqsClient;
use Illuminate\Container\Container;
use Illuminate\Queue\Jobs\SqsJob;
use Mockery as m;

class SqsJobTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Mockery\MockInterface
*/
protected $_sqs;
/**
* @var array
*/
protected $_job = [];
/**
* @var mixed
*/
protected $_connectionName = null;
/**
* @var mixed
*/
protected $_queue = null;
/**
* @var \Illuminate\Queue\Jobs\SqsJob
*/
protected $sqsJob;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Container\Container::class);
    $this->_sqs = m::mock(\Aws\Sqs\SqsClient::class);
    $this->_job = [];
    $this->_connectionName = null;
    $this->_queue = null;
    $this->sqsJob = new \Illuminate\Queue\Jobs\SqsJob($this->_container, $this->_sqs, $this->_job, $this->_connectionName, $this->_queue);
}

public function testRelease0()
{
    $delay = m::mock('UntypedParameter_delay_');

    // TODO: Your mock expectations here

    $actual = $this->sqsJob->release($delay);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqsJob->delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttempts0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqsJob->attempts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetJobId0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqsJob->getJobId();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRawBody0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqsJob->getRawBody();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSqs0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqsJob->getSqs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSqsJob0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqsJob->getSqsJob();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
