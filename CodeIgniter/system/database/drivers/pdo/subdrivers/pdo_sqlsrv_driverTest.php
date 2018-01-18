<?php

namespace tests;

use CI_DB_pdo_sqlsrv_driver;
use Mockery as m;

class CI_DB_pdo_sqlsrv_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_sqlsrv_driver
*/
protected $cI_DB_pdo_sqlsrv_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_sqlsrv_driver = new \CI_DB_pdo_sqlsrv_driver($this->_params);
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->char_set) && \preg_match('/utf[^8]*8/i', $this->char_set)) == false (line 153)
    // if (!\is_object($this->conn_id) or \is_bool($this->_quoted_identifier)) == false (line 160)

    $actual = $this->cI_DB_pdo_sqlsrv_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->char_set) && \preg_match('/utf[^8]*8/i', $this->char_set)) == false (line 153)
    // if (!\is_object($this->conn_id) or \is_bool($this->_quoted_identifier)) == true (line 160)

    $actual = $this->cI_DB_pdo_sqlsrv_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect2()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->char_set) && \preg_match('/utf[^8]*8/i', $this->char_set)) == true (line 153)
    // if (!\is_object($this->conn_id) or \is_bool($this->_quoted_identifier)) == false (line 160)

    $actual = $this->cI_DB_pdo_sqlsrv_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect3()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->char_set) && \preg_match('/utf[^8]*8/i', $this->char_set)) == true (line 153)
    // if (!\is_object($this->conn_id) or \is_bool($this->_quoted_identifier)) == true (line 160)

    $actual = $this->cI_DB_pdo_sqlsrv_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 230)
    // for (...) == false (line 237)

    $actual = $this->cI_DB_pdo_sqlsrv_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 230)
    // for (...) == true (line 237)
    // for (...) == false (line 237)

    $actual = $this->cI_DB_pdo_sqlsrv_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == true (line 230)

    $actual = $this->cI_DB_pdo_sqlsrv_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
