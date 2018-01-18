<?php

namespace tests;

use CI_DB_pdo_result;
use Mockery as m;

class CI_DB_pdo_resultTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_pdo_result
*/
protected $cI_DB_pdo_result;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_pdo_result = new \CI_DB_pdo_result();
}

public function testNum_rows0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 60)
    // if (\count($this->result_array) > 0) == false (line 64)
    // if (\count($this->result_object) > 0) == false (line 68)
    // if (($num_rows = $this->result_id->rowCount()) > 0) == false (line 72)

    $actual = $this->cI_DB_pdo_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 60)
    // if (\count($this->result_array) > 0) == false (line 64)
    // if (\count($this->result_object) > 0) == false (line 68)
    // if (($num_rows = $this->result_id->rowCount()) > 0) == true (line 72)

    $actual = $this->cI_DB_pdo_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 60)
    // if (\count($this->result_array) > 0) == false (line 64)
    // if (\count($this->result_object) > 0) == true (line 68)

    $actual = $this->cI_DB_pdo_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 60)
    // if (\count($this->result_array) > 0) == true (line 64)

    $actual = $this->cI_DB_pdo_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == true (line 60)

    $actual = $this->cI_DB_pdo_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_pdo_result->num_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 104)

    $actual = $this->cI_DB_pdo_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 104)
    // for (...) == false (line 104)

    $actual = $this->cI_DB_pdo_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testField_data0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->db->db_debug) == false (line 145)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->db->db_debug) == true (line 145)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 130)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testField_data4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 130)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 130)
    // if ($this->db->db_debug) == false (line 145)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 130)
    // if ($this->db->db_debug) == true (line 145)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testField_data7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 130)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 130)
    // if ($this->db->db_debug) == false (line 145)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 130)
    // if ($this->db->db_debug) == true (line 145)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testField_data10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 130)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 130)
    // if ($this->db->db_debug) == false (line 145)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 130)
    // if ($this->db->db_debug) == true (line 145)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 130)
    // for (...) == false (line 130)

    $actual = $this->cI_DB_pdo_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->result_id)) == false (line 163)

    $actual = $this->cI_DB_pdo_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->result_id)) == true (line 163)

    $actual = $this->cI_DB_pdo_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
