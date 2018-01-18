<?php

namespace tests;

use CI_DB_pdo_cubrid_driver;
use Mockery as m;

class CI_DB_pdo_cubrid_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_cubrid_driver
*/
protected $cI_DB_pdo_cubrid_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_cubrid_driver = new \CI_DB_pdo_cubrid_driver($this->_params);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == false (line 147)
    // for (...) == false (line 154)

    $actual = $this->cI_DB_pdo_cubrid_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == false (line 147)
    // for (...) == true (line 154)
    // for (...) == false (line 154)

    $actual = $this->cI_DB_pdo_cubrid_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == true (line 147)

    $actual = $this->cI_DB_pdo_cubrid_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
