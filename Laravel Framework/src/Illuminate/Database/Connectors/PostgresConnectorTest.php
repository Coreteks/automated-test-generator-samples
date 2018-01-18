<?php

namespace tests\Illuminate\Database\Connectors;

use Illuminate\Database\Connectors\PostgresConnector;
use Mockery as m;

class PostgresConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Connectors\PostgresConnector
*/
protected $postgresConnector;

public function setUp()
{
    parent::setUp();

    $this->postgresConnector = new \Illuminate\Database\Connectors\PostgresConnector();
}

public function testConnect0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->postgresConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
