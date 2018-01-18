<?php

namespace tests\Illuminate\Database\Schema;

use Illuminate\Database\Connection;
use Illuminate\Database\Schema\Builder;
use Mockery as m;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_connection;
/**
* @var \Illuminate\Database\Schema\Builder
*/
protected $builder;

public function setUp()
{
    parent::setUp();

    $this->_connection = m::mock(\Illuminate\Database\Connection::class);
    $this->builder = new \Illuminate\Database\Schema\Builder($this->_connection);
}

public function testDefaultStringLength0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->builder->defaultStringLength($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasTable0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->builder->hasTable($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasColumn0()
{
    $table = m::mock('UntypedParameter_table_');
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->hasColumn($table, $column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasColumns0()
{
    $table = m::mock('UntypedParameter_table_');
    $columns = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->hasColumns($table, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasColumns1()
{
    $table = m::mock('UntypedParameter_table_');
    $columns = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array(strtolower($column), $tableColumns)) == false (line 103)

    $actual = $this->builder->hasColumns($table, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasColumns2()
{
    $table = m::mock('UntypedParameter_table_');
    $columns = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array(strtolower($column), $tableColumns)) == true (line 103)

    $actual = $this->builder->hasColumns($table, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetColumnType0()
{
    $table = m::mock('UntypedParameter_table_');
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->getColumnType($table, $column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetColumnListing0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->builder->getColumnListing($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTable0()
{
    $table = m::mock('UntypedParameter_table_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->builder->table($table, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate0()
{
    $table = m::mock('UntypedParameter_table_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->builder->create($table, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->builder->drop($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropIfExists0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->builder->dropIfExists($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testDropAllTables0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \LogicException('This database driver does not support dropping all tables.') -> exception (line 203)

    $actual = $this->builder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename0()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');

    // TODO: Your mock expectations here

    $actual = $this->builder->rename($from, $to);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnableForeignKeyConstraints0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->enableForeignKeyConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisableForeignKeyConstraints0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->disableForeignKeyConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnection0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->getConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConnection0()
{
    $connection = m::mock(\Illuminate\Database\Connection::class);

    // TODO: Your mock expectations here

    $actual = $this->builder->setConnection($connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlueprintResolver0()
{
    $resolver = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->builder->blueprintResolver($resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
