<?php

namespace tests;

use CI_DB_postgre_driver;
use Mockery as m;

class CI_DB_postgre_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_postgre_driver
*/
protected $cI_DB_postgre_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_postgre_driver = new \CI_DB_postgre_driver($this->_params);
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->conn_id !== \FALSE) == false (line 156)

    $actual = $this->cI_DB_postgre_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->conn_id !== \FALSE) == true (line 156)
    // if ($persistent === \TRUE && \pg_connection_status($this->conn_id) === \PGSQL_CONNECTION_BAD && \pg_ping($this->conn_id) === \FALSE) == false (line 158)
    // if (\pg_set_client_encoding($this->conn_id, $this->char_set) !== 0) == false (line 166)

    $actual = $this->cI_DB_postgre_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect2()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->conn_id !== \FALSE) == true (line 156)
    // if ($persistent === \TRUE && \pg_connection_status($this->conn_id) === \PGSQL_CONNECTION_BAD && \pg_ping($this->conn_id) === \FALSE) == false (line 158)
    // if (\pg_set_client_encoding($this->conn_id, $this->char_set) !== 0) == true (line 166)

    $actual = $this->cI_DB_postgre_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect3()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->conn_id !== \FALSE) == true (line 156)
    // if ($persistent === \TRUE && \pg_connection_status($this->conn_id) === \PGSQL_CONNECTION_BAD && \pg_ping($this->conn_id) === \FALSE) == true (line 158)

    $actual = $this->cI_DB_postgre_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\pg_ping($this->conn_id) === \FALSE) == false (line 191)

    $actual = $this->cI_DB_postgre_driver->reconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\pg_ping($this->conn_id) === \FALSE) == true (line 191)

    $actual = $this->cI_DB_postgre_driver->reconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 206)
    // if (!$this->conn_id or ($pg_version = \pg_version($this->conn_id)) === \FALSE) == false (line 211)

    $actual = $this->cI_DB_postgre_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 206)
    // if (!$this->conn_id or ($pg_version = \pg_version($this->conn_id)) === \FALSE) == true (line 211)

    $actual = $this->cI_DB_postgre_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 206)

    $actual = $this->cI_DB_postgre_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_write_type0()
{
    $sql = m::mock('UntypedParameter_sql_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#^(INSERT|UPDATE).*RETURNING\\s.+(\\,\\s?.+)*$#is', $sql)) == false (line 285)

    $actual = $this->cI_DB_postgre_driver->is_write_type($sql);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_write_type1()
{
    $sql = m::mock('UntypedParameter_sql_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#^(INSERT|UPDATE).*RETURNING\\s.+(\\,\\s?.+)*$#is', $sql)) == true (line 285)

    $actual = $this->cI_DB_postgre_driver->is_write_type($sql);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscape0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($str) or \is_object($str) && \method_exists($str, '__toString')) == false (line 318)
    // if (\is_bool($str)) == false (line 322)

    $actual = $this->cI_DB_postgre_driver->escape($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscape1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($str) or \is_object($str) && \method_exists($str, '__toString')) == false (line 318)
    // if (\is_bool($str)) == true (line 322)

    $actual = $this->cI_DB_postgre_driver->escape($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscape2()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($str) or \is_object($str) && \method_exists($str, '__toString')) == true (line 318)

    $actual = $this->cI_DB_postgre_driver->escape($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_postgre_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($table === \NULL && $v >= '8.1') == false (line 357)
    // if ($table !== \NULL) == false (line 361)

    $actual = $this->cI_DB_postgre_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($table === \NULL && $v >= '8.1') == false (line 357)
    // if ($table !== \NULL) == true (line 361)
    // if ($column !== \NULL && $v >= '8.0') == false (line 363)

    $actual = $this->cI_DB_postgre_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($table === \NULL && $v >= '8.1') == false (line 357)
    // if ($table !== \NULL) == true (line 361)
    // if ($column !== \NULL && $v >= '8.0') == true (line 363)

    $actual = $this->cI_DB_postgre_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($table === \NULL && $v >= '8.1') == true (line 357)

    $actual = $this->cI_DB_postgre_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 443)
    // for (...) == false (line 450)

    $actual = $this->cI_DB_postgre_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 443)
    // for (...) == true (line 450)
    // for (...) == false (line 450)

    $actual = $this->cI_DB_postgre_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == true (line 443)

    $actual = $this->cI_DB_postgre_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_postgre_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrder_by0()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $direction = m::mock('UntypedParameter_direction_');
    $escape = m::mock('UntypedParameter_escape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($direction === 'RANDOM') == false (line 490)

    $actual = $this->cI_DB_postgre_driver->order_by($orderby, $direction, $escape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrder_by1()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $direction = m::mock('UntypedParameter_direction_');
    $escape = m::mock('UntypedParameter_escape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($direction === 'RANDOM') == true (line 490)
    // if (!\is_float($orderby) && \ctype_digit((string) $orderby)) == false (line 492)
    // if (\is_float($orderby)) == false (line 499)

    $actual = $this->cI_DB_postgre_driver->order_by($orderby, $direction, $escape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrder_by2()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $direction = m::mock('UntypedParameter_direction_');
    $escape = m::mock('UntypedParameter_escape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($direction === 'RANDOM') == true (line 490)
    // if (!\is_float($orderby) && \ctype_digit((string) $orderby)) == false (line 492)
    // if (\is_float($orderby)) == true (line 499)

    $actual = $this->cI_DB_postgre_driver->order_by($orderby, $direction, $escape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrder_by3()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $direction = m::mock('UntypedParameter_direction_');
    $escape = m::mock('UntypedParameter_escape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($direction === 'RANDOM') == true (line 490)
    // if (!\is_float($orderby) && \ctype_digit((string) $orderby)) == true (line 492)
    // if (\is_float($orderby)) == false (line 499)

    $actual = $this->cI_DB_postgre_driver->order_by($orderby, $direction, $escape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrder_by4()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $direction = m::mock('UntypedParameter_direction_');
    $escape = m::mock('UntypedParameter_escape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($direction === 'RANDOM') == true (line 490)
    // if (!\is_float($orderby) && \ctype_digit((string) $orderby)) == true (line 492)
    // if (\is_float($orderby)) == true (line 499)

    $actual = $this->cI_DB_postgre_driver->order_by($orderby, $direction, $escape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
