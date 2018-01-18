<?php

namespace tests\Illuminate\Queue\Connectors;

use Illuminate\Contracts\Redis\Factory;
use Illuminate\Queue\Connectors\RedisConnector;
use Mockery as m;

class RedisConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_redis;
/**
* @var mixed
*/
protected $_connection = null;
/**
* @var \Illuminate\Queue\Connectors\RedisConnector
*/
protected $redisConnector;

public function setUp()
{
    parent::setUp();

    $this->_redis = m::mock(\Illuminate\Contracts\Redis\Factory::class);
    $this->_connection = null;
    $this->redisConnector = new \Illuminate\Queue\Connectors\RedisConnector($this->_redis, $this->_connection);
}

public function testConnect0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->redisConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
