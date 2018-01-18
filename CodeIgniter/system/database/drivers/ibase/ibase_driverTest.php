<?php

namespace tests;

use CI_DB_ibase_driver;
use Mockery as m;

class CI_DB_ibase_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_ibase_driver
*/
protected $cI_DB_ibase_driver;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_ibase_driver = new \CI_DB_ibase_driver();
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_ibase_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 102)
    // if ($service = \ibase_service_attach($this->hostname, $this->username, $this->password)) == false (line 107)

    $actual = $this->cI_DB_ibase_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 102)
    // if ($service = \ibase_service_attach($this->hostname, $this->username, $this->password)) == true (line 107)

    $actual = $this->cI_DB_ibase_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 102)

    $actual = $this->cI_DB_ibase_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_ibase_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    $generator_name = m::mock('UntypedParameter_generator_name_');
    $inc_by = m::mock('UntypedParameter_inc_by_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_ibase_driver->insert_id($generator_name, $inc_by);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_ibase_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_ibase_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
