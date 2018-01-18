<?php

namespace tests\Illuminate\Database\Schema;

use Illuminate\Database\Schema\PostgresBuilder;
use Mockery as m;

class PostgresBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Schema\PostgresBuilder
*/
protected $postgresBuilder;

public function setUp()
{
    parent::setUp();

    $this->postgresBuilder = new \Illuminate\Database\Schema\PostgresBuilder();
}

public function testHasTable0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->postgresBuilder->hasTable($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($tables)) == false (line 45)

    $actual = $this->postgresBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($tables)) == true (line 45)

    $actual = $this->postgresBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($table, $excludedTables)) == false (line 40)
    // if (empty($tables)) == false (line 45)

    $actual = $this->postgresBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($table, $excludedTables)) == false (line 40)
    // if (empty($tables)) == true (line 45)

    $actual = $this->postgresBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($table, $excludedTables)) == true (line 40)
    // if (empty($tables)) == false (line 45)

    $actual = $this->postgresBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($table, $excludedTables)) == true (line 40)
    // if (empty($tables)) == true (line 45)

    $actual = $this->postgresBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetColumnListing0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->postgresBuilder->getColumnListing($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
