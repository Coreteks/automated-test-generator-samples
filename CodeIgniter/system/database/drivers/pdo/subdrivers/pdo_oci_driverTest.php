<?php

namespace tests;

use CI_DB_pdo_oci_driver;
use Mockery as m;

class CI_DB_pdo_oci_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_oci_driver
*/
protected $cI_DB_pdo_oci_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_oci_driver = new \CI_DB_pdo_oci_driver($this->_params);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 139)
    // if (\preg_match('#Release\\s(?<version>\\d+(?:\\.\\d+)+)#', $version_string, $match)) == false (line 145)

    $actual = $this->cI_DB_pdo_oci_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 139)
    // if (\preg_match('#Release\\s(?<version>\\d+(?:\\.\\d+)+)#', $version_string, $match)) == true (line 145)

    $actual = $this->cI_DB_pdo_oci_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 139)

    $actual = $this->cI_DB_pdo_oci_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 226)
    // for (...) == false (line 233)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 226)
    // for (...) == true (line 233)
    // if ($length === \NULL) == false (line 241)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == false (line 248)
    // for (...) == false (line 233)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 226)
    // for (...) == true (line 233)
    // if ($length === \NULL) == false (line 241)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == true (line 248)
    // for (...) == false (line 233)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data3()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 226)
    // for (...) == true (line 233)
    // if ($length === \NULL) == true (line 241)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == false (line 248)
    // for (...) == false (line 233)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data4()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 226)
    // for (...) == true (line 233)
    // if ($length === \NULL) == true (line 241)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == true (line 248)
    // for (...) == false (line 233)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data5()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == false (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == true (line 226)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data6()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 226)
    // for (...) == false (line 233)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data7()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 226)
    // for (...) == true (line 233)
    // if ($length === \NULL) == false (line 241)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == false (line 248)
    // for (...) == false (line 233)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data8()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 226)
    // for (...) == true (line 233)
    // if ($length === \NULL) == false (line 241)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == true (line 248)
    // for (...) == false (line 233)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data9()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 226)
    // for (...) == true (line 233)
    // if ($length === \NULL) == true (line 241)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == false (line 248)
    // for (...) == false (line 233)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data10()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == false (line 226)
    // for (...) == true (line 233)
    // if ($length === \NULL) == true (line 241)
    // if ($default === \NULL && $query[$i]->NULLABLE === 'N') == true (line 248)
    // for (...) == false (line 233)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data11()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($table, '.') !== \FALSE) == true (line 212)
    // if (($query = $this->query($sql)) === \FALSE) == true (line 226)

    $actual = $this->cI_DB_pdo_oci_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
