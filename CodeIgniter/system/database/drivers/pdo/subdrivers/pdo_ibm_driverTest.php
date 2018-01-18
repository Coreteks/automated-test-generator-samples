<?php

namespace tests;

use CI_DB_pdo_ibm_driver;
use Mockery as m;

class CI_DB_pdo_ibm_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_ibm_driver
*/
protected $cI_DB_pdo_ibm_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_ibm_driver = new \CI_DB_pdo_ibm_driver($this->_params);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_pdo_ibm_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
