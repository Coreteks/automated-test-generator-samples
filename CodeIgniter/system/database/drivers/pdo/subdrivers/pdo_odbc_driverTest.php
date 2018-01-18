<?php

namespace tests;

use CI_DB_pdo_odbc_driver;
use Mockery as m;

class CI_DB_pdo_odbc_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_odbc_driver
*/
protected $cI_DB_pdo_odbc_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_odbc_driver = new \CI_DB_pdo_odbc_driver($this->_params);
}

public function testIs_write_type0()
{
    $sql = m::mock('UntypedParameter_sql_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#^(INSERT|UPDATE).*RETURNING\\s.+(\\,\\s?.+)*$#is', $sql)) == false (line 184)

    $actual = $this->cI_DB_pdo_odbc_driver->is_write_type($sql);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_write_type1()
{
    $sql = m::mock('UntypedParameter_sql_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#^(INSERT|UPDATE).*RETURNING\\s.+(\\,\\s?.+)*$#is', $sql)) == true (line 184)

    $actual = $this->cI_DB_pdo_odbc_driver->is_write_type($sql);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
