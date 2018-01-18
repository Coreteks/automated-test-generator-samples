<?php

namespace tests\Illuminate\Database\Connectors;

use Illuminate\Database\Connectors\SQLiteConnector;
use Mockery as m;

class SQLiteConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Connectors\SQLiteConnector
*/
protected $sQLiteConnector;

public function setUp()
{
    parent::setUp();

    $this->sQLiteConnector = new \Illuminate\Database\Connectors\SQLiteConnector();
}

public function testConnect0()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config['database'] == ':memory:') == false (line 24)
    // if ($path === false) == false (line 33)

    $actual = $this->sQLiteConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testConnect1()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config['database'] == ':memory:') == false (line 24)
    // if ($path === false) == true (line 33)
    // throw new \InvalidArgumentException("Database ({$config['database']}) does not exist.") -> exception (line 34)

    $actual = $this->sQLiteConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect2()
{
    $config = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config['database'] == ':memory:') == true (line 24)

    $actual = $this->sQLiteConnector->connect($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
