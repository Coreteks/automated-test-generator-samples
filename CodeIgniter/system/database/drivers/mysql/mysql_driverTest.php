<?php

namespace tests;

use CI_DB_mysql_driver;
use Mockery as m;

class CI_DB_mysql_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_mysql_driver
*/
protected $cI_DB_mysql_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_mysql_driver = new \CI_DB_mysql_driver($this->_params);
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == false (line 128)
    // if ($this->database !== '' && !$this->db_select()) == false (line 141)
    // if (\is_resource($this->conn_id)) == false (line 150)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == false (line 128)
    // if ($this->database !== '' && !$this->db_select()) == false (line 141)
    // if (\is_resource($this->conn_id)) == true (line 150)
    // if (!\mysql_set_charset($this->char_set, $this->conn_id)) == false (line 152)
    // if (isset($this->stricton)) == false (line 159)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect2()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == false (line 128)
    // if ($this->database !== '' && !$this->db_select()) == false (line 141)
    // if (\is_resource($this->conn_id)) == true (line 150)
    // if (!\mysql_set_charset($this->char_set, $this->conn_id)) == false (line 152)
    // if (isset($this->stricton)) == true (line 159)
    // if ($this->stricton) == false (line 161)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect3()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == false (line 128)
    // if ($this->database !== '' && !$this->db_select()) == false (line 141)
    // if (\is_resource($this->conn_id)) == true (line 150)
    // if (!\mysql_set_charset($this->char_set, $this->conn_id)) == false (line 152)
    // if (isset($this->stricton)) == true (line 159)
    // if ($this->stricton) == true (line 161)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect4()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == false (line 128)
    // if ($this->database !== '' && !$this->db_select()) == false (line 141)
    // if (\is_resource($this->conn_id)) == true (line 150)
    // if (!\mysql_set_charset($this->char_set, $this->conn_id)) == true (line 152)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect5()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == false (line 128)
    // if ($this->database !== '' && !$this->db_select()) == true (line 141)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect6()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == true (line 128)
    // if ($this->database !== '' && !$this->db_select()) == false (line 141)
    // if (\is_resource($this->conn_id)) == false (line 150)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect7()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == true (line 128)
    // if ($this->database !== '' && !$this->db_select()) == false (line 141)
    // if (\is_resource($this->conn_id)) == true (line 150)
    // if (!\mysql_set_charset($this->char_set, $this->conn_id)) == false (line 152)
    // if (isset($this->stricton)) == false (line 159)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect8()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == true (line 128)
    // if ($this->database !== '' && !$this->db_select()) == false (line 141)
    // if (\is_resource($this->conn_id)) == true (line 150)
    // if (!\mysql_set_charset($this->char_set, $this->conn_id)) == false (line 152)
    // if (isset($this->stricton)) == true (line 159)
    // if ($this->stricton) == false (line 161)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect9()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == true (line 128)
    // if ($this->database !== '' && !$this->db_select()) == false (line 141)
    // if (\is_resource($this->conn_id)) == true (line 150)
    // if (!\mysql_set_charset($this->char_set, $this->conn_id)) == false (line 152)
    // if (isset($this->stricton)) == true (line 159)
    // if ($this->stricton) == true (line 161)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect10()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == true (line 128)
    // if ($this->database !== '' && !$this->db_select()) == false (line 141)
    // if (\is_resource($this->conn_id)) == true (line 150)
    // if (!\mysql_set_charset($this->char_set, $this->conn_id)) == true (line 152)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect11()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encrypt === \TRUE) == true (line 128)
    // if ($this->database !== '' && !$this->db_select()) == true (line 141)

    $actual = $this->cI_DB_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\mysql_ping($this->conn_id) === \FALSE) == false (line 199)

    $actual = $this->cI_DB_mysql_driver->reconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\mysql_ping($this->conn_id) === \FALSE) == true (line 199)

    $actual = $this->cI_DB_mysql_driver->reconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select0()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == false (line 215)
    // if (\mysql_select_db($database, $this->conn_id)) == false (line 220)

    $actual = $this->cI_DB_mysql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select1()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == false (line 215)
    // if (\mysql_select_db($database, $this->conn_id)) == true (line 220)

    $actual = $this->cI_DB_mysql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select2()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == true (line 215)
    // if (\mysql_select_db($database, $this->conn_id)) == false (line 220)

    $actual = $this->cI_DB_mysql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select3()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == true (line 215)
    // if (\mysql_select_db($database, $this->conn_id)) == true (line 220)

    $actual = $this->cI_DB_mysql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 239)
    // if (!$this->conn_id or ($version = \mysql_get_server_info($this->conn_id)) === \FALSE) == false (line 244)

    $actual = $this->cI_DB_mysql_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 239)
    // if (!$this->conn_id or ($version = \mysql_get_server_info($this->conn_id)) === \FALSE) == true (line 244)

    $actual = $this->cI_DB_mysql_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 239)

    $actual = $this->cI_DB_mysql_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysql_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysql_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == false (line 420)
    // for (...) == false (line 427)

    $actual = $this->cI_DB_mysql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == false (line 420)
    // for (...) == true (line 427)
    // for (...) == false (line 427)

    $actual = $this->cI_DB_mysql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == true (line 420)

    $actual = $this->cI_DB_mysql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysql_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
