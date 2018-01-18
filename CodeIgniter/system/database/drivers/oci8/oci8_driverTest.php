<?php

namespace tests;

use CI_DB_oci8_driver;
use Mockery as m;

class CI_DB_oci8_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_oci8_driver
*/
protected $cI_DB_oci8_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_oci8_driver = new \CI_DB_oci8_driver($this->_params);
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_oci8_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 250)
    // if (!$this->conn_id or ($version_string = \oci_server_version($this->conn_id)) === \FALSE) == false (line 255)
    // if (\preg_match('#Release\\s(\\d+(?:\\.\\d+)+)#', $version_string, $match)) == false (line 259)

    $actual = $this->cI_DB_oci8_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 250)
    // if (!$this->conn_id or ($version_string = \oci_server_version($this->conn_id)) === \FALSE) == false (line 255)
    // if (\preg_match('#Release\\s(\\d+(?:\\.\\d+)+)#', $version_string, $match)) == true (line 259)

    $actual = $this->cI_DB_oci8_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 250)
    // if (!$this->conn_id or ($version_string = \oci_server_version($this->conn_id)) === \FALSE) == true (line 255)

    $actual = $this->cI_DB_oci8_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 250)

    $actual = $this->cI_DB_oci8_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_cursor0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_oci8_driver->get_cursor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStored_procedure0()
{
    $package = m::mock('UntypedParameter_package_');
    $procedure = m::mock('UntypedParameter_procedure_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($package === '' or $procedure === '') == false (line 322)

    $actual = $this->cI_DB_oci8_driver->stored_procedure($package, $procedure, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStored_procedure1()
{
    $package = m::mock('UntypedParameter_package_');
    $procedure = m::mock('UntypedParameter_procedure_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($package === '' or $procedure === '') == false (line 322)
    // if (isset($param['type']) && $param['type'] === \OCI_B_CURSOR) == false (line 336)

    $actual = $this->cI_DB_oci8_driver->stored_procedure($package, $procedure, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStored_procedure2()
{
    $package = m::mock('UntypedParameter_package_');
    $procedure = m::mock('UntypedParameter_procedure_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($package === '' or $procedure === '') == false (line 322)
    // if (isset($param['type']) && $param['type'] === \OCI_B_CURSOR) == true (line 336)

    $actual = $this->cI_DB_oci8_driver->stored_procedure($package, $procedure, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStored_procedure3()
{
    $package = m::mock('UntypedParameter_package_');
    $procedure = m::mock('UntypedParameter_procedure_');
    $params = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($package === '' or $procedure === '') == true (line 322)

    $actual = $this->cI_DB_oci8_driver->stored_procedure($package, $procedure, $params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_oci8_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_oci8_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 518)
    // for (...) == false (line 525)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 518)
    // for (...) == true (line 525)
    // if ($length === \NULL) == false (line 533)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == false (line 540)
    // for (...) == false (line 525)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 518)
    // for (...) == true (line 525)
    // if ($length === \NULL) == false (line 533)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == true (line 540)
    // for (...) == false (line 525)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data3()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 518)
    // for (...) == true (line 525)
    // if ($length === \NULL) == true (line 533)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == false (line 540)
    // for (...) == false (line 525)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data4()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 518)
    // for (...) == true (line 525)
    // if ($length === \NULL) == true (line 533)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == true (line 540)
    // for (...) == false (line 525)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data5()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == true (line 518)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data6()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 518)
    // for (...) == false (line 525)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data7()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 518)
    // for (...) == true (line 525)
    // if ($length === \NULL) == false (line 533)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == false (line 540)
    // for (...) == false (line 525)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data8()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 518)
    // for (...) == true (line 525)
    // if ($length === \NULL) == false (line 533)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == true (line 540)
    // for (...) == false (line 525)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data9()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 518)
    // for (...) == true (line 525)
    // if ($length === \NULL) == true (line 533)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == false (line 540)
    // for (...) == false (line 525)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data10()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 518)
    // for (...) == true (line 525)
    // if ($length === \NULL) == true (line 533)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == true (line 540)
    // for (...) == false (line 525)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data11()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 504)
    // if (($query = $this->query($sql)) === \FALSE) == true (line 518)

    $actual = $this->cI_DB_oci8_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->curs_id)) == false (line 565)
    // if (\is_resource($this->stmt_id)) == false (line 569)
    // if (\is_resource($this->conn_id)) == false (line 573)

    $actual = $this->cI_DB_oci8_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->curs_id)) == false (line 565)
    // if (\is_resource($this->stmt_id)) == false (line 569)
    // if (\is_resource($this->conn_id)) == true (line 573)

    $actual = $this->cI_DB_oci8_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->curs_id)) == false (line 565)
    // if (\is_resource($this->stmt_id)) == true (line 569)

    $actual = $this->cI_DB_oci8_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->curs_id)) == true (line 565)

    $actual = $this->cI_DB_oci8_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
