<?php

namespace tests;

use CI_DB_sqlsrv_result;
use Mockery as m;

class CI_DB_sqlsrv_resultTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_driver_object = null;
/**
* @var \CI_DB_sqlsrv_result
*/
protected $cI_DB_sqlsrv_result;

public function setUp()
{
    parent::setUp();

    $this->_driver_object = null;
    $this->cI_DB_sqlsrv_result = new \CI_DB_sqlsrv_result($this->_driver_object);
}

public function testNum_rows0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array($this->scrollable, array(\FALSE, \SQLSRV_CURSOR_FORWARD, \SQLSRV_CURSOR_DYNAMIC), \TRUE)) == false (line 83)

    $actual = $this->cI_DB_sqlsrv_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array($this->scrollable, array(\FALSE, \SQLSRV_CURSOR_FORWARD, \SQLSRV_CURSOR_DYNAMIC), \TRUE)) == true (line 83)

    $actual = $this->cI_DB_sqlsrv_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_sqlsrv_result->num_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_sqlsrv_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields1()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_sqlsrv_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_sqlsrv_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_sqlsrv_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == false (line 157)

    $actual = $this->cI_DB_sqlsrv_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == true (line 157)

    $actual = $this->cI_DB_sqlsrv_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
