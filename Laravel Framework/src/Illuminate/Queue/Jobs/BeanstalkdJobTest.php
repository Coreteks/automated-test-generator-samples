<?php

namespace tests\Illuminate\Queue\Jobs;

use Illuminate\Container\Container;
use Illuminate\Queue\Jobs\BeanstalkdJob;
use Mockery as m;
use Pheanstalk\Job;
use Pheanstalk\Pheanstalk;

class BeanstalkdJobTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Mockery\MockInterface
*/
protected $_pheanstalk;
/**
* @var \Mockery\MockInterface
*/
protected $_job;
/**
* @var mixed
*/
protected $_connectionName = null;
/**
* @var mixed
*/
protected $_queue = null;
/**
* @var \Illuminate\Queue\Jobs\BeanstalkdJob
*/
protected $beanstalkdJob;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Container\Container::class);
    $this->_pheanstalk = m::mock(\Pheanstalk\Pheanstalk::class);
    $this->_job = m::mock(\Pheanstalk\Job::class);
    $this->_connectionName = null;
    $this->_queue = null;
    $this->beanstalkdJob = new \Illuminate\Queue\Jobs\BeanstalkdJob($this->_container, $this->_pheanstalk, $this->_job, $this->_connectionName, $this->_queue);
}

public function testRelease0()
{
    $delay = m::mock('UntypedParameter_delay_');

    // TODO: Your mock expectations here

    $actual = $this->beanstalkdJob->release($delay);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBury0()
{
    // TODO: Your mock expectations here

    $actual = $this->beanstalkdJob->bury();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    // TODO: Your mock expectations here

    $actual = $this->beanstalkdJob->delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttempts0()
{
    // TODO: Your mock expectations here

    $actual = $this->beanstalkdJob->attempts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetJobId0()
{
    // TODO: Your mock expectations here

    $actual = $this->beanstalkdJob->getJobId();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRawBody0()
{
    // TODO: Your mock expectations here

    $actual = $this->beanstalkdJob->getRawBody();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPheanstalk0()
{
    // TODO: Your mock expectations here

    $actual = $this->beanstalkdJob->getPheanstalk();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPheanstalkJob0()
{
    // TODO: Your mock expectations here

    $actual = $this->beanstalkdJob->getPheanstalkJob();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
