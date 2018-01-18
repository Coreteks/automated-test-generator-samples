<?php

namespace tests\Illuminate\Database\Schema;

use Illuminate\Database\Schema\SQLiteBuilder;
use Mockery as m;

class SQLiteBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Schema\SQLiteBuilder
*/
protected $sQLiteBuilder;

public function setUp()
{
    parent::setUp();

    $this->sQLiteBuilder = new \Illuminate\Database\Schema\SQLiteBuilder();
}

public function testDropAllTables0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->connection->getDatabaseName() !== ':memory:') == false (line 14)

    $actual = $this->sQLiteBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->connection->getDatabaseName() !== ':memory:') == true (line 14)

    $actual = $this->sQLiteBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefreshDatabaseFile0()
{
    // TODO: Your mock expectations here

    $actual = $this->sQLiteBuilder->refreshDatabaseFile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
