<?php

namespace tests;

use CI_DB_mysqli_result;
use Mockery as m;

class CI_DB_mysqli_resultTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_mysqli_result
*/
protected $cI_DB_mysqli_result;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_mysqli_result = new \CI_DB_mysqli_result();
}

public function testNum_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysqli_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysqli_result->num_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($field = $this->result_id->fetch_field()) == false (line 90)

    $actual = $this->cI_DB_mysqli_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($field = $this->result_id->fetch_field()) == true (line 90)
    // while ($field = $this->result_id->fetch_field()) == false (line 90)

    $actual = $this->cI_DB_mysqli_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 111)

    $actual = $this->cI_DB_mysqli_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 111)
    // for (...) == false (line 111)

    $actual = $this->cI_DB_mysqli_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->result_id)) == false (line 179)

    $actual = $this->cI_DB_mysqli_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->result_id)) == true (line 179)

    $actual = $this->cI_DB_mysqli_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData_seek0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysqli_result->data_seek($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
