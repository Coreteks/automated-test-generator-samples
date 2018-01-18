<?php

namespace tests;

use CI_DB_cubrid_result;
use Mockery as m;

class CI_DB_cubrid_resultTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_cubrid_result
*/
protected $cI_DB_cubrid_result;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_cubrid_result = new \CI_DB_cubrid_result();
}

public function testNum_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_cubrid_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_cubrid_result->num_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_cubrid_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 102)

    $actual = $this->cI_DB_cubrid_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 102)
    // for (...) == false (line 102)

    $actual = $this->cI_DB_cubrid_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id) or \get_resource_type($this->result_id) === 'Unknown' && \preg_match('/Resource id #/', \strval($this->result_id))) == false (line 123)

    $actual = $this->cI_DB_cubrid_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->result_id) or \get_resource_type($this->result_id) === 'Unknown' && \preg_match('/Resource id #/', \strval($this->result_id))) == true (line 123)

    $actual = $this->cI_DB_cubrid_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData_seek0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_cubrid_result->data_seek($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
