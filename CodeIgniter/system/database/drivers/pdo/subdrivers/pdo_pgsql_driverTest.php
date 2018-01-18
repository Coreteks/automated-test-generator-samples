<?php

namespace tests;

use CI_DB_pdo_pgsql_driver;
use Mockery as m;

class CI_DB_pdo_pgsql_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_pgsql_driver
*/
protected $cI_DB_pdo_pgsql_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_pgsql_driver = new \CI_DB_pdo_pgsql_driver($this->_params);
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->conn_id) && !empty($this->schema)) == false (line 119)

    $actual = $this->cI_DB_pdo_pgsql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->conn_id) && !empty($this->schema)) == true (line 119)

    $actual = $this->cI_DB_pdo_pgsql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === \NULL && \version_compare($this->version(), '8.1', '>=')) == false (line 137)

    $actual = $this->cI_DB_pdo_pgsql_driver->insert_id($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === \NULL && \version_compare($this->version(), '8.1', '>=')) == true (line 137)

    $actual = $this->cI_DB_pdo_pgsql_driver->insert_id($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_write_type0()
{
    $sql = m::mock('UntypedParameter_sql_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#^(INSERT|UPDATE).*RETURNING\\s.+(\\,\\s?.+)*$#is', $sql)) == false (line 157)

    $actual = $this->cI_DB_pdo_pgsql_driver->is_write_type($sql);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_write_type1()
{
    $sql = m::mock('UntypedParameter_sql_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#^(INSERT|UPDATE).*RETURNING\\s.+(\\,\\s?.+)*$#is', $sql)) == true (line 157)

    $actual = $this->cI_DB_pdo_pgsql_driver->is_write_type($sql);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscape0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_bool($str)) == false (line 177)

    $actual = $this->cI_DB_pdo_pgsql_driver->escape($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscape1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_bool($str)) == true (line 177)

    $actual = $this->cI_DB_pdo_pgsql_driver->escape($str);
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
    // if ($direction === 'RANDOM') == false (line 198)

    $actual = $this->cI_DB_pdo_pgsql_driver->order_by($orderby, $direction, $escape);
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
    // if ($direction === 'RANDOM') == true (line 198)
    // if (!\is_float($orderby) && \ctype_digit((string) $orderby)) == false (line 200)
    // if (\is_float($orderby)) == false (line 207)

    $actual = $this->cI_DB_pdo_pgsql_driver->order_by($orderby, $direction, $escape);
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
    // if ($direction === 'RANDOM') == true (line 198)
    // if (!\is_float($orderby) && \ctype_digit((string) $orderby)) == false (line 200)
    // if (\is_float($orderby)) == true (line 207)

    $actual = $this->cI_DB_pdo_pgsql_driver->order_by($orderby, $direction, $escape);
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
    // if ($direction === 'RANDOM') == true (line 198)
    // if (!\is_float($orderby) && \ctype_digit((string) $orderby)) == true (line 200)
    // if (\is_float($orderby)) == false (line 207)

    $actual = $this->cI_DB_pdo_pgsql_driver->order_by($orderby, $direction, $escape);
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
    // if ($direction === 'RANDOM') == true (line 198)
    // if (!\is_float($orderby) && \ctype_digit((string) $orderby)) == true (line 200)
    // if (\is_float($orderby)) == true (line 207)

    $actual = $this->cI_DB_pdo_pgsql_driver->order_by($orderby, $direction, $escape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 275)
    // for (...) == false (line 282)

    $actual = $this->cI_DB_pdo_pgsql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 275)
    // for (...) == true (line 282)
    // for (...) == false (line 282)

    $actual = $this->cI_DB_pdo_pgsql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == true (line 275)

    $actual = $this->cI_DB_pdo_pgsql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
