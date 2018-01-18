<?php

namespace tests;

use CI_DB_sqlsrv_driver;
use Mockery as m;

class CI_DB_sqlsrv_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_sqlsrv_driver
*/
protected $cI_DB_sqlsrv_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_sqlsrv_driver = new \CI_DB_sqlsrv_driver($this->_params);
}

public function testDb_connect0()
{
    $pooling = m::mock('UntypedParameter_pooling_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($connection['UID']) && empty($connection['PWD'])) == false (line 139)
    // if (\FALSE !== ($this->conn_id = \sqlsrv_connect($this->hostname, $connection))) == false (line 144)

    $actual = $this->cI_DB_sqlsrv_driver->db_connect($pooling);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $pooling = m::mock('UntypedParameter_pooling_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($connection['UID']) && empty($connection['PWD'])) == false (line 139)
    // if (\FALSE !== ($this->conn_id = \sqlsrv_connect($this->hostname, $connection))) == true (line 144)

    $actual = $this->cI_DB_sqlsrv_driver->db_connect($pooling);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect2()
{
    $pooling = m::mock('UntypedParameter_pooling_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($connection['UID']) && empty($connection['PWD'])) == true (line 139)
    // if (\FALSE !== ($this->conn_id = \sqlsrv_connect($this->hostname, $connection))) == false (line 144)

    $actual = $this->cI_DB_sqlsrv_driver->db_connect($pooling);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect3()
{
    $pooling = m::mock('UntypedParameter_pooling_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($connection['UID']) && empty($connection['PWD'])) == true (line 139)
    // if (\FALSE !== ($this->conn_id = \sqlsrv_connect($this->hostname, $connection))) == true (line 144)

    $actual = $this->cI_DB_sqlsrv_driver->db_connect($pooling);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select0()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == false (line 166)
    // if ($this->_execute('USE ' . $this->escape_identifiers($database))) == false (line 171)

    $actual = $this->cI_DB_sqlsrv_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select1()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == false (line 166)
    // if ($this->_execute('USE ' . $this->escape_identifiers($database))) == true (line 171)

    $actual = $this->cI_DB_sqlsrv_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select2()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == true (line 166)
    // if ($this->_execute('USE ' . $this->escape_identifiers($database))) == false (line 171)

    $actual = $this->cI_DB_sqlsrv_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select3()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == true (line 166)
    // if ($this->_execute('USE ' . $this->escape_identifiers($database))) == true (line 171)

    $actual = $this->cI_DB_sqlsrv_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_sqlsrv_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_sqlsrv_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 267)
    // if (!$this->conn_id or ($info = \sqlsrv_server_info($this->conn_id)) === \FALSE) == false (line 272)

    $actual = $this->cI_DB_sqlsrv_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 267)
    // if (!$this->conn_id or ($info = \sqlsrv_server_info($this->conn_id)) === \FALSE) == true (line 272)

    $actual = $this->cI_DB_sqlsrv_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 267)

    $actual = $this->cI_DB_sqlsrv_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 336)
    // for (...) == false (line 343)

    $actual = $this->cI_DB_sqlsrv_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 336)
    // for (...) == true (line 343)
    // for (...) == false (line 343)

    $actual = $this->cI_DB_sqlsrv_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == true (line 336)

    $actual = $this->cI_DB_sqlsrv_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($sqlsrv_errors)) == false (line 370)
    // if (isset($sqlsrv_error['SQLSTATE'])) == false (line 376)
    // if (isset($sqlsrv_error['code'])) == false (line 380)
    // if (isset($sqlsrv_error['message'])) == false (line 385)

    $actual = $this->cI_DB_sqlsrv_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($sqlsrv_errors)) == false (line 370)
    // if (isset($sqlsrv_error['SQLSTATE'])) == false (line 376)
    // if (isset($sqlsrv_error['code'])) == false (line 380)
    // if (isset($sqlsrv_error['message'])) == true (line 385)

    $actual = $this->cI_DB_sqlsrv_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($sqlsrv_errors)) == false (line 370)
    // if (isset($sqlsrv_error['SQLSTATE'])) == false (line 376)
    // if (isset($sqlsrv_error['code'])) == true (line 380)
    // if (isset($sqlsrv_error['message'])) == false (line 385)

    $actual = $this->cI_DB_sqlsrv_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($sqlsrv_errors)) == false (line 370)
    // if (isset($sqlsrv_error['SQLSTATE'])) == false (line 376)
    // if (isset($sqlsrv_error['code'])) == true (line 380)
    // if (isset($sqlsrv_error['message'])) == true (line 385)

    $actual = $this->cI_DB_sqlsrv_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($sqlsrv_errors)) == false (line 370)
    // if (isset($sqlsrv_error['SQLSTATE'])) == true (line 376)
    // if (isset($sqlsrv_error['message'])) == false (line 385)

    $actual = $this->cI_DB_sqlsrv_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($sqlsrv_errors)) == false (line 370)
    // if (isset($sqlsrv_error['SQLSTATE'])) == true (line 376)
    // if (isset($sqlsrv_error['message'])) == true (line 385)

    $actual = $this->cI_DB_sqlsrv_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($sqlsrv_errors)) == true (line 370)

    $actual = $this->cI_DB_sqlsrv_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
