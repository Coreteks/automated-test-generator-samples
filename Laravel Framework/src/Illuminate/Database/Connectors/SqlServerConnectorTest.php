<?php

namespace tests\Illuminate\Database\Connectors;

use Illuminate\Database\Connectors\SqlServerConnector;
use Mockery as m;

class SqlServerConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Connectors\SqlServerConnector
*/
protected $sqlServerConnector;

public function setUp()
{
    parent::setUp();

    $this->sqlServerConnector = new \Illuminate\Database\Connectors\SqlServerConnector();
}

public function testConnect0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->sqlServerConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
