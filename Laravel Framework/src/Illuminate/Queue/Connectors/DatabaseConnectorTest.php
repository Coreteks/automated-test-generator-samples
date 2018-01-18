<?php

namespace tests\Illuminate\Queue\Connectors;

use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Queue\Connectors\DatabaseConnector;
use Mockery as m;

class DatabaseConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_connections;
/**
* @var \Illuminate\Queue\Connectors\DatabaseConnector
*/
protected $databaseConnector;

public function setUp()
{
    parent::setUp();

    $this->_connections = m::mock(\Illuminate\Database\ConnectionResolverInterface::class);
    $this->databaseConnector = new \Illuminate\Queue\Connectors\DatabaseConnector($this->_connections);
}

public function testConnect0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->databaseConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
