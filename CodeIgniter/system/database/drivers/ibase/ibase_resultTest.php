<?php

namespace tests;

use CI_DB_ibase_result;
use Mockery as m;

class CI_DB_ibase_resultTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_ibase_result
*/
protected $cI_DB_ibase_result;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_ibase_result = new \CI_DB_ibase_result();
}

public function testNum_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_ibase_result->num_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 73)

    $actual = $this->cI_DB_ibase_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 73)
    // for (...) == false (line 73)

    $actual = $this->cI_DB_ibase_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 94)

    $actual = $this->cI_DB_ibase_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 94)
    // for (...) == false (line 94)

    $actual = $this->cI_DB_ibase_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_ibase_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
