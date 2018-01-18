<?php

namespace tests;

use CI_DB_cubrid_driver;
use Mockery as m;

class CI_DB_cubrid_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_cubrid_driver
*/
protected $cI_DB_cubrid_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_cubrid_driver = new \CI_DB_cubrid_driver($this->_params);
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/^CUBRID:[^:]+(:[0-9][1-9]{0,4})?:[^:]+:([^:]*):([^:]*):(\\?.+)?$/', $this->dsn, $matches)) == false (line 121)

    $actual = $this->cI_DB_cubrid_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/^CUBRID:[^:]+(:[0-9][1-9]{0,4})?:[^:]+:([^:]*):([^:]*):(\\?.+)?$/', $this->dsn, $matches)) == true (line 121)

    $actual = $this->cI_DB_cubrid_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\cubrid_ping($this->conn_id) === \FALSE) == false (line 147)

    $actual = $this->cI_DB_cubrid_driver->reconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\cubrid_ping($this->conn_id) === \FALSE) == true (line 147)

    $actual = $this->cI_DB_cubrid_driver->reconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 162)

    $actual = $this->cI_DB_cubrid_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 162)

    $actual = $this->cI_DB_cubrid_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_cubrid_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_cubrid_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == false (line 334)
    // for (...) == false (line 341)

    $actual = $this->cI_DB_cubrid_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == false (line 334)
    // for (...) == true (line 341)
    // for (...) == false (line 341)

    $actual = $this->cI_DB_cubrid_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == true (line 334)

    $actual = $this->cI_DB_cubrid_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_cubrid_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
