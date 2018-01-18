<?php

namespace tests;

use CI_DB_result;
use Mockery as m;

class CI_DB_resultTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_driver_object = null;
/**
* @var \CI_DB_result
*/
protected $cI_DB_result;

public function setUp()
{
    parent::setUp();

    $this->_driver_object = null;
    $this->cI_DB_result = new \CI_DB_result($this->_driver_object);
}

public function testNum_rows0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 132)
    // if (\count($this->result_array) > 0) == false (line 136)
    // if (\count($this->result_object) > 0) == false (line 140)

    $actual = $this->cI_DB_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 132)
    // if (\count($this->result_array) > 0) == false (line 136)
    // if (\count($this->result_object) > 0) == true (line 140)

    $actual = $this->cI_DB_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == false (line 132)
    // if (\count($this->result_array) > 0) == true (line 136)

    $actual = $this->cI_DB_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_rows3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_int($this->num_rows)) == true (line 132)

    $actual = $this->cI_DB_result->num_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === 'array') == false (line 158)
    // if ($type === 'object') == false (line 162)

    $actual = $this->cI_DB_result->result($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult1()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === 'array') == false (line 158)
    // if ($type === 'object') == true (line 162)

    $actual = $this->cI_DB_result->result($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult2()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === 'array') == true (line 158)

    $actual = $this->cI_DB_result->result($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object0()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == false (line 191)
    // if (($c = \count($this->result_object)) > 0) == false (line 195)
    // if ($_data !== \NULL) == false (line 200)
    // while ($row = $this->_fetch_object($class_name)) == false (line 218)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object1()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == false (line 191)
    // if (($c = \count($this->result_object)) > 0) == false (line 195)
    // if ($_data !== \NULL) == false (line 200)
    // while ($row = $this->_fetch_object($class_name)) == true (line 218)
    // while ($row = $this->_fetch_object($class_name)) == false (line 218)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object2()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == false (line 191)
    // if (($c = \count($this->result_object)) > 0) == false (line 195)
    // if ($_data !== \NULL) == true (line 200)
    // for (...) == false (line 202)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object3()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == false (line 191)
    // if (($c = \count($this->result_object)) > 0) == false (line 195)
    // if ($_data !== \NULL) == true (line 200)
    // for (...) == true (line 202)
    // for (...) == false (line 202)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object4()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == false (line 191)
    // if (($c = \count($this->result_object)) > 0) == false (line 195)
    // if ($_data !== \NULL) == true (line 200)
    // for (...) == true (line 202)
    // for (...) == false (line 202)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object5()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == false (line 191)
    // if (($c = \count($this->result_object)) > 0) == true (line 195)
    // if ($_data !== \NULL) == false (line 200)
    // while ($row = $this->_fetch_object($class_name)) == false (line 218)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object6()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == false (line 191)
    // if (($c = \count($this->result_object)) > 0) == true (line 195)
    // if ($_data !== \NULL) == false (line 200)
    // while ($row = $this->_fetch_object($class_name)) == true (line 218)
    // while ($row = $this->_fetch_object($class_name)) == false (line 218)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object7()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == false (line 191)
    // if (($c = \count($this->result_object)) > 0) == true (line 195)
    // if ($_data !== \NULL) == true (line 200)
    // for (...) == false (line 202)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object8()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == false (line 191)
    // if (($c = \count($this->result_object)) > 0) == true (line 195)
    // if ($_data !== \NULL) == true (line 200)
    // for (...) == true (line 202)
    // for (...) == false (line 202)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object9()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == false (line 191)
    // if (($c = \count($this->result_object)) > 0) == true (line 195)
    // if ($_data !== \NULL) == true (line 200)
    // for (...) == true (line 202)
    // for (...) == false (line 202)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object10()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == true (line 191)
    // if ($_data !== \NULL) == false (line 200)
    // while ($row = $this->_fetch_object($class_name)) == false (line 218)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object11()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == true (line 191)
    // if ($_data !== \NULL) == false (line 200)
    // while ($row = $this->_fetch_object($class_name)) == true (line 218)
    // while ($row = $this->_fetch_object($class_name)) == false (line 218)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object12()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == true (line 191)
    // if ($_data !== \NULL) == true (line 200)
    // for (...) == false (line 202)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object13()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == true (line 191)
    // if ($_data !== \NULL) == true (line 200)
    // for (...) == true (line 202)
    // for (...) == false (line 202)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object14()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 184)
    // if (($c = \count($this->result_array)) > 0) == true (line 191)
    // if ($_data !== \NULL) == true (line 200)
    // for (...) == true (line 202)
    // for (...) == false (line 202)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object15()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == false (line 180)
    // if (!$this->result_id or $this->num_rows === 0) == true (line 184)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_result_object16()
{
    $class_name = m::mock('UntypedParameter_class_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->custom_result_object[$class_name])) == true (line 180)

    $actual = $this->cI_DB_result->custom_result_object($class_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_object0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_object) > 0) == false (line 235)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 243)
    // if (($c = \count($this->result_array)) > 0) == false (line 248)
    // while ($row = $this->_fetch_object()) == false (line 259)

    $actual = $this->cI_DB_result->result_object();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_object1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_object) > 0) == false (line 235)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 243)
    // if (($c = \count($this->result_array)) > 0) == false (line 248)
    // while ($row = $this->_fetch_object()) == true (line 259)
    // while ($row = $this->_fetch_object()) == false (line 259)

    $actual = $this->cI_DB_result->result_object();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_object2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_object) > 0) == false (line 235)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 243)
    // if (($c = \count($this->result_array)) > 0) == true (line 248)
    // for (...) == false (line 250)

    $actual = $this->cI_DB_result->result_object();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_object3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_object) > 0) == false (line 235)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 243)
    // if (($c = \count($this->result_array)) > 0) == true (line 248)
    // for (...) == true (line 250)
    // for (...) == false (line 250)

    $actual = $this->cI_DB_result->result_object();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_object4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_object) > 0) == false (line 235)
    // if (!$this->result_id or $this->num_rows === 0) == true (line 243)

    $actual = $this->cI_DB_result->result_object();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_object5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_object) > 0) == true (line 235)

    $actual = $this->cI_DB_result->result_object();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_array0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_array) > 0) == false (line 276)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 284)
    // if (($c = \count($this->result_object)) > 0) == false (line 289)
    // while ($row = $this->_fetch_assoc()) == false (line 300)

    $actual = $this->cI_DB_result->result_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_array1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_array) > 0) == false (line 276)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 284)
    // if (($c = \count($this->result_object)) > 0) == false (line 289)
    // while ($row = $this->_fetch_assoc()) == true (line 300)
    // while ($row = $this->_fetch_assoc()) == false (line 300)

    $actual = $this->cI_DB_result->result_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_array2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_array) > 0) == false (line 276)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 284)
    // if (($c = \count($this->result_object)) > 0) == true (line 289)
    // for (...) == false (line 291)

    $actual = $this->cI_DB_result->result_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_array3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_array) > 0) == false (line 276)
    // if (!$this->result_id or $this->num_rows === 0) == false (line 284)
    // if (($c = \count($this->result_object)) > 0) == true (line 289)
    // for (...) == true (line 291)
    // for (...) == false (line 291)

    $actual = $this->cI_DB_result->result_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_array4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_array) > 0) == false (line 276)
    // if (!$this->result_id or $this->num_rows === 0) == true (line 284)

    $actual = $this->cI_DB_result->result_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResult_array5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->result_array) > 0) == true (line 276)

    $actual = $this->cI_DB_result->result_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow0()
{
    $n = m::mock('UntypedParameter_n_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($n)) == false (line 321)
    // if ($type === 'object') == false (line 335)
    // if ($type === 'array') == false (line 336)

    $actual = $this->cI_DB_result->row($n, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow1()
{
    $n = m::mock('UntypedParameter_n_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($n)) == false (line 321)
    // if ($type === 'object') == false (line 335)
    // if ($type === 'array') == true (line 336)

    $actual = $this->cI_DB_result->row($n, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow2()
{
    $n = m::mock('UntypedParameter_n_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($n)) == false (line 321)
    // if ($type === 'object') == true (line 335)

    $actual = $this->cI_DB_result->row($n, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow3()
{
    $n = m::mock('UntypedParameter_n_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($n)) == true (line 321)
    // if (empty($this->row_data) or !\array_key_exists($n, $this->row_data)) == false (line 327)

    $actual = $this->cI_DB_result->row($n, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow4()
{
    $n = m::mock('UntypedParameter_n_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($n)) == true (line 321)
    // if (empty($this->row_data) or !\array_key_exists($n, $this->row_data)) == true (line 327)

    $actual = $this->cI_DB_result->row($n, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_row0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($this->row_data)) == false (line 353)
    // if (\is_array($key)) == false (line 358)
    // if ($key !== '' && $value !== \NULL) == false (line 367)

    $actual = $this->cI_DB_result->set_row($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_row1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($this->row_data)) == false (line 353)
    // if (\is_array($key)) == false (line 358)
    // if ($key !== '' && $value !== \NULL) == true (line 367)

    $actual = $this->cI_DB_result->set_row($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_row2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($this->row_data)) == false (line 353)
    // if (\is_array($key)) == true (line 358)

    $actual = $this->cI_DB_result->set_row($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_row3()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($this->row_data)) == false (line 353)
    // if (\is_array($key)) == true (line 358)

    $actual = $this->cI_DB_result->set_row($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_row4()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($this->row_data)) == true (line 353)
    // if (\is_array($key)) == false (line 358)
    // if ($key !== '' && $value !== \NULL) == false (line 367)

    $actual = $this->cI_DB_result->set_row($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_row5()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($this->row_data)) == true (line 353)
    // if (\is_array($key)) == false (line 358)
    // if ($key !== '' && $value !== \NULL) == true (line 367)

    $actual = $this->cI_DB_result->set_row($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_row6()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($this->row_data)) == true (line 353)
    // if (\is_array($key)) == true (line 358)

    $actual = $this->cI_DB_result->set_row($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_row7()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($this->row_data)) == true (line 353)
    // if (\is_array($key)) == true (line 358)

    $actual = $this->cI_DB_result->set_row($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_row_object0()
{
    $n = m::mock('UntypedParameter_n_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->custom_result_object[$type]) === 0) == false (line 386)
    // if ($n !== $this->current_row && isset($this->custom_result_object[$type][$n])) == false (line 391)

    $actual = $this->cI_DB_result->custom_row_object($n, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_row_object1()
{
    $n = m::mock('UntypedParameter_n_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->custom_result_object[$type]) === 0) == false (line 386)
    // if ($n !== $this->current_row && isset($this->custom_result_object[$type][$n])) == true (line 391)

    $actual = $this->cI_DB_result->custom_row_object($n, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCustom_row_object2()
{
    $n = m::mock('UntypedParameter_n_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->custom_result_object[$type]) === 0) == true (line 386)

    $actual = $this->cI_DB_result->custom_row_object($n, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow_object0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 410)
    // if ($n !== $this->current_row && isset($result[$n])) == false (line 415)

    $actual = $this->cI_DB_result->row_object($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow_object1()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 410)
    // if ($n !== $this->current_row && isset($result[$n])) == true (line 415)

    $actual = $this->cI_DB_result->row_object($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow_object2()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == true (line 410)

    $actual = $this->cI_DB_result->row_object($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow_array0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 434)
    // if ($n !== $this->current_row && isset($result[$n])) == false (line 439)

    $actual = $this->cI_DB_result->row_array($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow_array1()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 434)
    // if ($n !== $this->current_row && isset($result[$n])) == true (line 439)

    $actual = $this->cI_DB_result->row_array($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow_array2()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == true (line 434)

    $actual = $this->cI_DB_result->row_array($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst_row0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_result->first_row($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLast_row0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_result->last_row($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNext_row0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 486)

    $actual = $this->cI_DB_result->next_row($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNext_row1()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == true (line 486)

    $actual = $this->cI_DB_result->next_row($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrevious_row0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 507)
    // if (isset($result[$this->current_row - 1])) == false (line 512)

    $actual = $this->cI_DB_result->previous_row($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrevious_row1()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == false (line 507)
    // if (isset($result[$this->current_row - 1])) == true (line 512)

    $actual = $this->cI_DB_result->previous_row($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrevious_row2()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($result) === 0) == true (line 507)

    $actual = $this->cI_DB_result->previous_row($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnbuffered_row0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === 'array') == false (line 529)
    // if ($type === 'object') == false (line 533)

    $actual = $this->cI_DB_result->unbuffered_row($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnbuffered_row1()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === 'array') == false (line 529)
    // if ($type === 'object') == true (line 533)

    $actual = $this->cI_DB_result->unbuffered_row($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnbuffered_row2()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === 'array') == true (line 529)

    $actual = $this->cI_DB_result->unbuffered_row($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNum_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_result->num_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testList_fields0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_result->list_fields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_result->field_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFree_result0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_result->free_result();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData_seek0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_result->data_seek($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
