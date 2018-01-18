<?php

namespace tests;

use CI_Unit_test;
use Mockery as m;

class CI_Unit_testTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Unit_test
*/
protected $cI_Unit_test;

public function setUp()
{
    parent::setUp();

    $this->cI_Unit_test = new \CI_Unit_test();
}

public function testSet_test_items0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($items) && \is_array($items)) == false (line 129)

    $actual = $this->cI_Unit_test->set_test_items($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_test_items1()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($items) && \is_array($items)) == true (line 129)

    $actual = $this->cI_Unit_test->set_test_items($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun0()
{
    $test = m::mock('UntypedParameter_test_');
    $expected = m::mock('UntypedParameter_expected_');
    $test_name = m::mock('UntypedParameter_test_name_');
    $notes = m::mock('UntypedParameter_notes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->active === \FALSE) == false (line 150)
    // if (\in_array($expected, array('is_object', 'is_string', 'is_bool', 'is_true', 'is_false', 'is_int', 'is_numeric', 'is_float', 'is_double', 'is_array', 'is_null', 'is_resource'), \TRUE)) == false (line 155)

    $actual = $this->cI_Unit_test->run($test, $expected, $test_name, $notes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun1()
{
    $test = m::mock('UntypedParameter_test_');
    $expected = m::mock('UntypedParameter_expected_');
    $test_name = m::mock('UntypedParameter_test_name_');
    $notes = m::mock('UntypedParameter_notes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->active === \FALSE) == false (line 150)
    // if (\in_array($expected, array('is_object', 'is_string', 'is_bool', 'is_true', 'is_false', 'is_int', 'is_numeric', 'is_float', 'is_double', 'is_array', 'is_null', 'is_resource'), \TRUE)) == true (line 155)

    $actual = $this->cI_Unit_test->run($test, $expected, $test_name, $notes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun2()
{
    $test = m::mock('UntypedParameter_test_');
    $expected = m::mock('UntypedParameter_expected_');
    $test_name = m::mock('UntypedParameter_test_name_');
    $notes = m::mock('UntypedParameter_notes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->active === \FALSE) == true (line 150)

    $actual = $this->cI_Unit_test->run($test, $expected, $test_name, $notes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport0()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 195)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport1()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 195)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport2()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 195)
    // if ($key === $CI->lang->line('ut_result')) == false (line 212)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport3()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 195)
    // if ($key === $CI->lang->line('ut_result')) == true (line 212)
    // if ($val === $CI->lang->line('ut_passed')) == false (line 214)
    // if ($val === $CI->lang->line('ut_failed')) == false (line 218)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport4()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 195)
    // if ($key === $CI->lang->line('ut_result')) == true (line 212)
    // if ($val === $CI->lang->line('ut_passed')) == false (line 214)
    // if ($val === $CI->lang->line('ut_failed')) == true (line 218)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport5()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 195)
    // if ($key === $CI->lang->line('ut_result')) == true (line 212)
    // if ($val === $CI->lang->line('ut_passed')) == true (line 214)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport6()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == true (line 195)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport7()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == true (line 195)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport8()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == true (line 195)
    // if ($key === $CI->lang->line('ut_result')) == false (line 212)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport9()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == true (line 195)
    // if ($key === $CI->lang->line('ut_result')) == true (line 212)
    // if ($val === $CI->lang->line('ut_passed')) == false (line 214)
    // if ($val === $CI->lang->line('ut_failed')) == false (line 218)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport10()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == true (line 195)
    // if ($key === $CI->lang->line('ut_result')) == true (line 212)
    // if ($val === $CI->lang->line('ut_passed')) == false (line 214)
    // if ($val === $CI->lang->line('ut_failed')) == true (line 218)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport11()
{
    $result = m::mock('UntypedParameter_result_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == true (line 195)
    // if ($key === $CI->lang->line('ut_result')) == true (line 212)
    // if ($val === $CI->lang->line('ut_passed')) == true (line 214)

    $actual = $this->cI_Unit_test->report($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUse_strict0()
{
    $state = m::mock('UntypedParameter_state_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Unit_test->use_strict($state);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActive0()
{
    $state = m::mock('UntypedParameter_state_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Unit_test->active($state);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult0()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == false (line 278)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult1()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == false (line 278)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult2()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == false (line 278)
    // if (!\in_array($key, $this->_test_items_visible)) == false (line 289)
    // if (\in_array($key, array('test_name', 'test_datatype', 'res_datatype', 'result'), \TRUE)) == false (line 293)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult3()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == false (line 278)
    // if (!\in_array($key, $this->_test_items_visible)) == false (line 289)
    // if (\in_array($key, array('test_name', 'test_datatype', 'res_datatype', 'result'), \TRUE)) == true (line 293)
    // if (\FALSE !== ($line = $CI->lang->line(\strtolower('ut_' . $val), \FALSE))) == false (line 295)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult4()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == false (line 278)
    // if (!\in_array($key, $this->_test_items_visible)) == false (line 289)
    // if (\in_array($key, array('test_name', 'test_datatype', 'res_datatype', 'result'), \TRUE)) == true (line 293)
    // if (\FALSE !== ($line = $CI->lang->line(\strtolower('ut_' . $val), \FALSE))) == true (line 295)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult5()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == false (line 278)
    // if (!\in_array($key, $this->_test_items_visible)) == true (line 289)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult6()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == true (line 278)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult7()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == true (line 278)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult8()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == true (line 278)
    // if (!\in_array($key, $this->_test_items_visible)) == false (line 289)
    // if (\in_array($key, array('test_name', 'test_datatype', 'res_datatype', 'result'), \TRUE)) == false (line 293)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult9()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == true (line 278)
    // if (!\in_array($key, $this->_test_items_visible)) == false (line 289)
    // if (\in_array($key, array('test_name', 'test_datatype', 'res_datatype', 'result'), \TRUE)) == true (line 293)
    // if (\FALSE !== ($line = $CI->lang->line(\strtolower('ut_' . $val), \FALSE))) == false (line 295)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult10()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == true (line 278)
    // if (!\in_array($key, $this->_test_items_visible)) == false (line 289)
    // if (\in_array($key, array('test_name', 'test_datatype', 'res_datatype', 'result'), \TRUE)) == true (line 293)
    // if (\FALSE !== ($line = $CI->lang->line(\strtolower('ut_' . $val), \FALSE))) == true (line 295)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult11()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($results) === 0) == true (line 278)
    // if (!\in_array($key, $this->_test_items_visible)) == true (line 289)

    $actual = $this->cI_Unit_test->result($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_template0()
{
    $template = m::mock('UntypedParameter_template_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Unit_test->set_template($template);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
