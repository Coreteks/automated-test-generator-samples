<?php

namespace tests;

use CI_DB_pdo_dblib_driver;
use Mockery as m;

class CI_DB_pdo_dblib_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_dblib_driver
*/
protected $cI_DB_pdo_dblib_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_dblib_driver = new \CI_DB_pdo_dblib_driver($this->_params);
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == false (line 129)
    // if (!\is_object($this->conn_id)) == false (line 136)

    $actual = $this->cI_DB_pdo_dblib_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == false (line 129)
    // if (!\is_object($this->conn_id)) == true (line 136)

    $actual = $this->cI_DB_pdo_dblib_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect2()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == true (line 129)
    // if (!\is_object($this->conn_id)) == false (line 136)

    $actual = $this->cI_DB_pdo_dblib_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect3()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == true (line 129)
    // if (!\is_object($this->conn_id)) == true (line 136)

    $actual = $this->cI_DB_pdo_dblib_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 206)
    // for (...) == false (line 213)

    $actual = $this->cI_DB_pdo_dblib_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == false (line 206)
    // for (...) == true (line 213)
    // for (...) == false (line 213)

    $actual = $this->cI_DB_pdo_dblib_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query($sql)) === \FALSE) == true (line 206)

    $actual = $this->cI_DB_pdo_dblib_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 346)

    $actual = $this->cI_DB_pdo_dblib_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 346)

    $actual = $this->cI_DB_pdo_dblib_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
