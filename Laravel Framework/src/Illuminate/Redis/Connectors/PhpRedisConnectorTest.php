<?php

namespace tests\Illuminate\Redis\Connectors;

use Illuminate\Redis\Connectors\PhpRedisConnector;
use Mockery as m;

class PhpRedisConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Redis\Connectors\PhpRedisConnector
*/
protected $phpRedisConnector;

public function setUp()
{
    parent::setUp();

    $this->phpRedisConnector = new \Illuminate\Redis\Connectors\PhpRedisConnector();
}

public function testConnect0()
{
    $config = [];
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnector->connect($config, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnectToCluster0()
{
    $config = [];
    $clusterOptions = [];
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnector->connectToCluster($config, $clusterOptions, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
