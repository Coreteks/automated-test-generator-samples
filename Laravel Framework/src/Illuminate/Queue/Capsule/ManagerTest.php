<?php

namespace tests\Illuminate\Queue\Capsule;

use Illuminate\Container\Container;
use Illuminate\Queue\Capsule\Manager;
use Mockery as m;

class ManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Queue\Capsule\Manager
*/
protected $manager;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Container\Container::class);
    $this->manager = new \Illuminate\Queue\Capsule\Manager($this->_container);
}

public function testConnection0()
{
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->manager->connection($connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->manager->push($job, $data, $queue, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBulk0()
{
    $jobs = m::mock('UntypedParameter_jobs_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->manager->bulk($jobs, $data, $queue, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLater0()
{
    $delay = m::mock('UntypedParameter_delay_');
    $job = m::mock('UntypedParameter_job_');
    $data = m::mock('UntypedParameter_data_');
    $queue = m::mock('UntypedParameter_queue_');
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->manager->later($delay, $job, $data, $queue, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->manager->getConnection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConnection0()
{
    $config = [];
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->manager->addConnection($config, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueueManager0()
{
    // TODO: Your mock expectations here

    $actual = $this->manager->getQueueManager();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->manager->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->manager->__callStatic($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
