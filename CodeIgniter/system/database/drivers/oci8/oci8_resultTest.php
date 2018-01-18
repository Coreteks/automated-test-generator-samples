<?php

namespace tests;

use CI_DB_oci8_result;
use Mockery as m;

class CI_DB_oci8_resultTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_driver_object = null;
/**
* @var \CI_DB_oci8_result
*/
protected $cI_DB_oci8_result;

public function setUp()
{
    parent::setUp();

    $this->_driver_object = null;
    $this->cI_DB_oci8_result = new \CI_DB_oci8_result($this->_driver_object);
}

public function testNum_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_oci8_result->num_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 125)

    $actual = $this->cI_DB_oci8_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 125)
    // for (...) == false (line 125)

    $actual = $this->cI_DB_oci8_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 144)

    $actual = $this->cI_DB_oci8_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 144)
    // for (...) == false (line 144)

    $actual = $this->cI_DB_oci8_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == false (line 166)
    // if (\is_resource($this->stmt_id)) == false (line 172)
    // if (\is_resource($this->curs_id)) == false (line 177)

    $actual = $this->cI_DB_oci8_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == false (line 166)
    // if (\is_resource($this->stmt_id)) == false (line 172)
    // if (\is_resource($this->curs_id)) == true (line 177)

    $actual = $this->cI_DB_oci8_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == false (line 166)
    // if (\is_resource($this->stmt_id)) == true (line 172)
    // if (\is_resource($this->curs_id)) == false (line 177)

    $actual = $this->cI_DB_oci8_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == false (line 166)
    // if (\is_resource($this->stmt_id)) == true (line 172)
    // if (\is_resource($this->curs_id)) == true (line 177)

    $actual = $this->cI_DB_oci8_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == true (line 166)
    // if (\is_resource($this->stmt_id)) == false (line 172)
    // if (\is_resource($this->curs_id)) == false (line 177)

    $actual = $this->cI_DB_oci8_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == true (line 166)
    // if (\is_resource($this->stmt_id)) == false (line 172)
    // if (\is_resource($this->curs_id)) == true (line 177)

    $actual = $this->cI_DB_oci8_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == true (line 166)
    // if (\is_resource($this->stmt_id)) == true (line 172)
    // if (\is_resource($this->curs_id)) == false (line 177)

    $actual = $this->cI_DB_oci8_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == true (line 166)
    // if (\is_resource($this->stmt_id)) == true (line 172)
    // if (\is_resource($this->curs_id)) == true (line 177)

    $actual = $this->cI_DB_oci8_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
