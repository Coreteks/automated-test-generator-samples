<?php

namespace tests;

use CI_DB_sqlite3_driver;
use Mockery as m;

class CI_DB_sqlite3_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_sqlite3_driver
*/
protected $cI_DB_sqlite3_driver;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_sqlite3_driver = new \CI_DB_sqlite3_driver();
}

/**
 * @expectedException \Exception
 */
public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent) == false (line 81)

    $actual = $this->cI_DB_sqlite3_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent) == false (line 81)

    $actual = $this->cI_DB_sqlite3_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect2()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent) == false (line 81)

    $actual = $this->cI_DB_sqlite3_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testDb_connect3()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent) == true (line 81)

    $actual = $this->cI_DB_sqlite3_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect4()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent) == true (line 81)

    $actual = $this->cI_DB_sqlite3_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect5()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent) == true (line 81)

    $actual = $this->cI_DB_sqlite3_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 107)

    $actual = $this->cI_DB_sqlite3_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 107)

    $actual = $this->cI_DB_sqlite3_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_sqlite3_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_sqlite3_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['field_names'][$table])) == false (line 234)
    // if (($result = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == false (line 239)

    $actual = $this->cI_DB_sqlite3_driver->list_fields($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['field_names'][$table])) == false (line 234)
    // if (($result = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == false (line 239)

    $actual = $this->cI_DB_sqlite3_driver->list_fields($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['field_names'][$table])) == false (line 234)
    // if (($result = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == true (line 239)

    $actual = $this->cI_DB_sqlite3_driver->list_fields($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields3()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['field_names'][$table])) == true (line 234)

    $actual = $this->cI_DB_sqlite3_driver->list_fields($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == false (line 263)
    // if (empty($query)) == false (line 269)
    // for (...) == false (line 275)

    $actual = $this->cI_DB_sqlite3_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == false (line 263)
    // if (empty($query)) == false (line 269)
    // for (...) == true (line 275)
    // for (...) == false (line 275)

    $actual = $this->cI_DB_sqlite3_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == false (line 263)
    // if (empty($query)) == true (line 269)

    $actual = $this->cI_DB_sqlite3_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data3()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == true (line 263)

    $actual = $this->cI_DB_sqlite3_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_sqlite3_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
