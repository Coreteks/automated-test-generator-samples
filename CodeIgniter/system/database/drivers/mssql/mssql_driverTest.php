<?php

namespace tests;

use CI_DB_mssql_driver;
use Mockery as m;

class CI_DB_mssql_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_mssql_driver
*/
protected $cI_DB_mssql_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_mssql_driver = new \CI_DB_mssql_driver($this->_params);
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->conn_id) == false (line 116)
    // if ($this->database !== '' && !$this->db_select()) == false (line 124)

    $actual = $this->cI_DB_mssql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->conn_id) == false (line 116)
    // if ($this->database !== '' && !$this->db_select()) == true (line 124)

    $actual = $this->cI_DB_mssql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect2()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->conn_id) == true (line 116)

    $actual = $this->cI_DB_mssql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select0()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == false (line 152)
    // if (\mssql_select_db('[' . $database . ']', $this->conn_id)) == false (line 159)

    $actual = $this->cI_DB_mssql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select1()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == false (line 152)
    // if (\mssql_select_db('[' . $database . ']', $this->conn_id)) == true (line 159)

    $actual = $this->cI_DB_mssql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select2()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == true (line 152)
    // if (\mssql_select_db('[' . $database . ']', $this->conn_id)) == false (line 159)

    $actual = $this->cI_DB_mssql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select3()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == true (line 152)
    // if (\mssql_select_db('[' . $database . ']', $this->conn_id)) == true (line 159)

    $actual = $this->cI_DB_mssql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mssql_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mssql_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 318)
    // for (...) == false (line 325)

    $actual = $this->cI_DB_mssql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 318)
    // for (...) == true (line 325)
    // for (...) == false (line 325)

    $actual = $this->cI_DB_mssql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == true (line 318)

    $actual = $this->cI_DB_mssql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($message)) == false (line 355)

    $actual = $this->cI_DB_mssql_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($message)) == true (line 355)

    $actual = $this->cI_DB_mssql_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
