<?php

namespace tests;

use CI_DB_mysql_result;
use Mockery as m;

class CI_DB_mysql_resultTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_driver_object = null;
/**
* @var \CI_DB_mysql_result
*/
protected $cI_DB_mysql_result;

public function setUp()
{
    parent::setUp();

    $this->_driver_object = null;
    $this->cI_DB_mysql_result = new \CI_DB_mysql_result($this->_driver_object);
}

public function testNum_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysql_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysql_result->num_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($field = \mysql_fetch_field($this->result_id)) == false (line 103)

    $actual = $this->cI_DB_mysql_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($field = \mysql_fetch_field($this->result_id)) == true (line 103)
    // while ($field = \mysql_fetch_field($this->result_id)) == false (line 103)

    $actual = $this->cI_DB_mysql_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 123)

    $actual = $this->cI_DB_mysql_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 123)
    // for (...) == false (line 123)

    $actual = $this->cI_DB_mysql_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == false (line 144)

    $actual = $this->cI_DB_mysql_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == true (line 144)

    $actual = $this->cI_DB_mysql_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData_seek0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysql_result->data_seek($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
