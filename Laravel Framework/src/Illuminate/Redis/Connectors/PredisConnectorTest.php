<?php

namespace tests\Illuminate\Redis\Connectors;

use Illuminate\Redis\Connectors\PredisConnector;
use Mockery as m;

class PredisConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Redis\Connectors\PredisConnector
*/
protected $predisConnector;

public function setUp()
{
    parent::setUp();

    $this->predisConnector = new \Illuminate\Redis\Connectors\PredisConnector();
}

public function testConnect0()
{
    $config = [];
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->predisConnector->connect($config, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnectToCluster0()
{
    $config = [];
    $clusterOptions = [];
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->predisConnector->connectToCluster($config, $clusterOptions, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
