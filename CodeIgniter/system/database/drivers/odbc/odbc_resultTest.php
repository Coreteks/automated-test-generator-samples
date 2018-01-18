<?php

namespace tests;

use CI_DB_odbc_result;
use Mockery as m;

class CI_DB_odbc_resultTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_odbc_result
*/
protected $cI_DB_odbc_result;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_odbc_result = new \CI_DB_odbc_result();
}

public function testNum_rows0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 60)
    // if (($this->num_rows = \odbc_num_rows($this->result_id)) !== -1) == false (line 64)
    // if (\count($this->result_array) > 0) == false (line 70)
    // if (\count($this->result_object) > 0) == false (line 74)

    $actual = $this->cI_DB_odbc_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 60)
    // if (($this->num_rows = \odbc_num_rows($this->result_id)) !== -1) == false (line 64)
    // if (\count($this->result_array) > 0) == false (line 70)
    // if (\count($this->result_object) > 0) == true (line 74)

    $actual = $this->cI_DB_odbc_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 60)
    // if (($this->num_rows = \odbc_num_rows($this->result_id)) !== -1) == false (line 64)
    // if (\count($this->result_array) > 0) == true (line 70)

    $actual = $this->cI_DB_odbc_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 60)
    // if (($this->num_rows = \odbc_num_rows($this->result_id)) !== -1) == true (line 64)

    $actual = $this->cI_DB_odbc_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == true (line 60)

    $actual = $this->cI_DB_odbc_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_odbc_result->num_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($num_fields > 0) == false (line 108)

    $actual = $this->cI_DB_odbc_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($num_fields > 0) == true (line 108)
    // for (...) == false (line 110)

    $actual = $this->cI_DB_odbc_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($num_fields > 0) == true (line 108)
    // for (...) == true (line 110)
    // for (...) == false (line 110)

    $actual = $this->cI_DB_odbc_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 131)

    $actual = $this->cI_DB_odbc_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 131)
    // for (...) == false (line 131)

    $actual = $this->cI_DB_odbc_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == false (line 153)

    $actual = $this->cI_DB_odbc_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id)) == true (line 153)

    $actual = $this->cI_DB_odbc_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
