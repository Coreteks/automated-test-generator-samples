<?php

namespace tests\Illuminate\Database\Schema;

use Illuminate\Database\Schema\MySqlBuilder;
use Mockery as m;

class MySqlBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Schema\MySqlBuilder
*/
protected $mySqlBuilder;

public function setUp()
{
    parent::setUp();

    $this->mySqlBuilder = new \Illuminate\Database\Schema\MySqlBuilder();
}

public function testHasTable0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->mySqlBuilder->hasTable($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetColumnListing0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->mySqlBuilder->getColumnListing($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($tables)) == false (line 54)

    $actual = $this->mySqlBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($tables)) == true (line 54)

    $actual = $this->mySqlBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($tables)) == false (line 54)

    $actual = $this->mySqlBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropAllTables3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($tables)) == true (line 54)

    $actual = $this->mySqlBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
