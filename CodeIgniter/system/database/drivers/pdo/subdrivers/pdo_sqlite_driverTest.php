<?php

namespace tests;

use CI_DB_pdo_sqlite_driver;
use Mockery as m;

class CI_DB_pdo_sqlite_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_sqlite_driver
*/
protected $cI_DB_pdo_sqlite_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_sqlite_driver = new \CI_DB_pdo_sqlite_driver($this->_params);
}

public function testList_fields0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['field_names'][$table])) == false (line 132)
    // if (($result = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == false (line 137)

    $actual = $this->cI_DB_pdo_sqlite_driver->list_fields($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['field_names'][$table])) == false (line 132)
    // if (($result = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == false (line 137)

    $actual = $this->cI_DB_pdo_sqlite_driver->list_fields($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['field_names'][$table])) == false (line 132)
    // if (($result = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == true (line 137)

    $actual = $this->cI_DB_pdo_sqlite_driver->list_fields($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields3()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['field_names'][$table])) == true (line 132)

    $actual = $this->cI_DB_pdo_sqlite_driver->list_fields($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == false (line 161)
    // if (empty($query)) == false (line 167)
    // for (...) == false (line 173)

    $actual = $this->cI_DB_pdo_sqlite_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == false (line 161)
    // if (empty($query)) == false (line 167)
    // for (...) == true (line 173)
    // for (...) == false (line 173)

    $actual = $this->cI_DB_pdo_sqlite_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == false (line 161)
    // if (empty($query)) == true (line 167)

    $actual = $this->cI_DB_pdo_sqlite_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data3()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('PRAGMA TABLE_INFO(' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE) . ')')) === \FALSE) == true (line 161)

    $actual = $this->cI_DB_pdo_sqlite_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
