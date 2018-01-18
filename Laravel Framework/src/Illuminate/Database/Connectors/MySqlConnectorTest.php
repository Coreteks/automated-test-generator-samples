<?php

namespace tests\Illuminate\Database\Connectors;

use Illuminate\Database\Connectors\MySqlConnector;
use Mockery as m;

class MySqlConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Connectors\MySqlConnector
*/
protected $mySqlConnector;

public function setUp()
{
    parent::setUp();

    $this->mySqlConnector = new \Illuminate\Database\Connectors\MySqlConnector();
}

public function testConnect0()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($config['database'])) == false (line 26)

    $actual = $this->mySqlConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect1()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($config['database'])) == true (line 26)

    $actual = $this->mySqlConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
