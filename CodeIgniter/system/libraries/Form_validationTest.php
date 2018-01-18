<?php

namespace tests;

use CI_Form_validation;
use Mockery as m;

class CI_Form_validationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_rules = null;
/**
* @var \CI_Form_validation
*/
protected $cI_Form_validation;

public function setUp()
{
    parent::setUp();

    $this->_rules = null;
    $this->cI_Form_validation = new \CI_Form_validation($this->_rules);
}

public function testSet_rules0()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == false (line 193)
    // if (!\is_string($field) or $field === '' or empty($rules)) == false (line 199)
    // if (!\is_array($rules)) == false (line 203)
    // if (($is_array = (bool) \preg_match_all('/\\[(.*?)\\]/', $field, $matches)) === \TRUE) == false (line 221)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules1()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == false (line 193)
    // if (!\is_string($field) or $field === '' or empty($rules)) == false (line 199)
    // if (!\is_array($rules)) == false (line 203)
    // if (($is_array = (bool) \preg_match_all('/\\[(.*?)\\]/', $field, $matches)) === \TRUE) == true (line 221)
    // for (...) == false (line 225)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules2()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == false (line 193)
    // if (!\is_string($field) or $field === '' or empty($rules)) == false (line 199)
    // if (!\is_array($rules)) == false (line 203)
    // if (($is_array = (bool) \preg_match_all('/\\[(.*?)\\]/', $field, $matches)) === \TRUE) == true (line 221)
    // for (...) == true (line 225)
    // if ($matches[1][$i] !== '') == false (line 227)
    // for (...) == false (line 225)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules3()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == false (line 193)
    // if (!\is_string($field) or $field === '' or empty($rules)) == false (line 199)
    // if (!\is_array($rules)) == false (line 203)
    // if (($is_array = (bool) \preg_match_all('/\\[(.*?)\\]/', $field, $matches)) === \TRUE) == true (line 221)
    // for (...) == true (line 225)
    // if ($matches[1][$i] !== '') == true (line 227)
    // for (...) == false (line 225)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules4()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == false (line 193)
    // if (!\is_string($field) or $field === '' or empty($rules)) == false (line 199)
    // if (!\is_array($rules)) == true (line 203)
    // if (!\is_string($rules)) == false (line 206)
    // if (($is_array = (bool) \preg_match_all('/\\[(.*?)\\]/', $field, $matches)) === \TRUE) == false (line 221)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules5()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == false (line 193)
    // if (!\is_string($field) or $field === '' or empty($rules)) == false (line 199)
    // if (!\is_array($rules)) == true (line 203)
    // if (!\is_string($rules)) == false (line 206)
    // if (($is_array = (bool) \preg_match_all('/\\[(.*?)\\]/', $field, $matches)) === \TRUE) == true (line 221)
    // for (...) == false (line 225)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules6()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == false (line 193)
    // if (!\is_string($field) or $field === '' or empty($rules)) == false (line 199)
    // if (!\is_array($rules)) == true (line 203)
    // if (!\is_string($rules)) == false (line 206)
    // if (($is_array = (bool) \preg_match_all('/\\[(.*?)\\]/', $field, $matches)) === \TRUE) == true (line 221)
    // for (...) == true (line 225)
    // if ($matches[1][$i] !== '') == false (line 227)
    // for (...) == false (line 225)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules7()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == false (line 193)
    // if (!\is_string($field) or $field === '' or empty($rules)) == false (line 199)
    // if (!\is_array($rules)) == true (line 203)
    // if (!\is_string($rules)) == false (line 206)
    // if (($is_array = (bool) \preg_match_all('/\\[(.*?)\\]/', $field, $matches)) === \TRUE) == true (line 221)
    // for (...) == true (line 225)
    // if ($matches[1][$i] !== '') == true (line 227)
    // for (...) == false (line 225)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules8()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == false (line 193)
    // if (!\is_string($field) or $field === '' or empty($rules)) == false (line 199)
    // if (!\is_array($rules)) == true (line 203)
    // if (!\is_string($rules)) == true (line 206)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules9()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == false (line 193)
    // if (!\is_string($field) or $field === '' or empty($rules)) == true (line 199)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function testSet_rules10()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == false (line 171)
    // if (!isset($rules)) == true (line 193)
    // throw new \BadMethodCallException('Form_validation: set_rules() called without a $rules parameter') -> exception (line 195)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules11()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == true (line 171)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules12()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == true (line 171)
    // if (!isset($row['field'], $row['rules'])) == false (line 176)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules13()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == false (line 164)
    // if (\is_array($field)) == true (line 171)
    // if (!isset($row['field'], $row['rules'])) == true (line 176)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_rules14()
{
    $field = m::mock('UntypedParameter_field_');
    $label = m::mock('UntypedParameter_label_');
    $rules = m::mock('UntypedParameter_rules_');
    $errors = m::mock('UntypedParameter_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->CI->input->method() !== 'post' && empty($this->validation_data)) == true (line 164)

    $actual = $this->cI_Form_validation->set_rules($field, $label, $rules, $errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_data0()
{
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == false (line 266)

    $actual = $this->cI_Form_validation->set_data($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_data1()
{
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == true (line 266)

    $actual = $this->cI_Form_validation->set_data($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_message0()
{
    $lang = m::mock('UntypedParameter_lang_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($lang)) == false (line 288)

    $actual = $this->cI_Form_validation->set_message($lang, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_message1()
{
    $lang = m::mock('UntypedParameter_lang_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($lang)) == true (line 288)

    $actual = $this->cI_Form_validation->set_message($lang, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_error_delimiters0()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->set_error_delimiters($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    $field = m::mock('UntypedParameter_field_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_field_data[$field]['error'])) == false (line 329)
    // if ($prefix === '') == false (line 334)
    // if ($suffix === '') == false (line 339)

    $actual = $this->cI_Form_validation->error($field, $prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError1()
{
    $field = m::mock('UntypedParameter_field_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_field_data[$field]['error'])) == false (line 329)
    // if ($prefix === '') == false (line 334)
    // if ($suffix === '') == true (line 339)

    $actual = $this->cI_Form_validation->error($field, $prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError2()
{
    $field = m::mock('UntypedParameter_field_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_field_data[$field]['error'])) == false (line 329)
    // if ($prefix === '') == true (line 334)
    // if ($suffix === '') == false (line 339)

    $actual = $this->cI_Form_validation->error($field, $prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError3()
{
    $field = m::mock('UntypedParameter_field_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_field_data[$field]['error'])) == false (line 329)
    // if ($prefix === '') == true (line 334)
    // if ($suffix === '') == true (line 339)

    $actual = $this->cI_Form_validation->error($field, $prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError4()
{
    $field = m::mock('UntypedParameter_field_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_field_data[$field]['error'])) == true (line 329)

    $actual = $this->cI_Form_validation->error($field, $prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_array0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->error_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string0()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == false (line 380)
    // if ($suffix === '') == false (line 385)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string1()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == false (line 380)
    // if ($suffix === '') == false (line 385)
    // if ($val !== '') == false (line 394)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string2()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == false (line 380)
    // if ($suffix === '') == false (line 385)
    // if ($val !== '') == true (line 394)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string3()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == false (line 380)
    // if ($suffix === '') == true (line 385)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string4()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == false (line 380)
    // if ($suffix === '') == true (line 385)
    // if ($val !== '') == false (line 394)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string5()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == false (line 380)
    // if ($suffix === '') == true (line 385)
    // if ($val !== '') == true (line 394)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string6()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == true (line 380)
    // if ($suffix === '') == false (line 385)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string7()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == true (line 380)
    // if ($suffix === '') == false (line 385)
    // if ($val !== '') == false (line 394)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string8()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == true (line 380)
    // if ($suffix === '') == false (line 385)
    // if ($val !== '') == true (line 394)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string9()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == true (line 380)
    // if ($suffix === '') == true (line 385)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string10()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == true (line 380)
    // if ($suffix === '') == true (line 385)
    // if ($val !== '') == false (line 394)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string11()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == false (line 375)
    // if ($prefix === '') == true (line 380)
    // if ($suffix === '') == true (line 385)
    // if ($val !== '') == true (line 394)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_string12()
{
    $prefix = m::mock('UntypedParameter_prefix_');
    $suffix = m::mock('UntypedParameter_suffix_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_error_array) === 0) == true (line 375)

    $actual = $this->cI_Form_validation->error_string($prefix, $suffix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun0()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun1()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun2()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun3()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun4()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun5()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun6()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun7()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun8()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun9()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun10()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun11()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun12()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun13()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun14()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun15()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun16()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun17()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun18()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun19()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun20()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun21()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun22()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun23()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun24()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun25()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun26()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun27()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun28()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun29()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun30()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun31()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun32()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun33()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun34()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun35()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == false (line 422)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun36()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun37()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun38()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun39()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun40()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun41()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun42()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun43()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun44()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun45()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun46()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun47()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun48()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun49()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun50()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun51()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun52()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun53()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun54()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun55()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun56()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun57()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun58()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun59()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun60()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun61()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun62()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun63()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun64()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun65()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun66()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun67()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun68()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun69()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun70()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun71()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun72()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == false (line 430)
    // if (\count($this->_field_data) === 0) == true (line 440)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun73()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun74()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun75()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun76()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun77()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun78()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun79()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun80()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun81()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun82()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun83()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun84()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun85()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun86()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun87()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun88()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun89()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun90()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == false (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun91()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun92()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun93()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun94()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun95()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun96()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun97()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun98()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun99()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == false (line 455)
    // if (isset($validation_array[$field])) == true (line 459)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun100()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun101()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun102()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun103()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun104()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun105()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == false (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun106()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == false (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun107()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == false (line 479)
    // if (\func_num_args() >= 2) == true (line 486)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun108()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == false (line 440)
    // if ($row['is_array'] === \TRUE) == true (line 455)
    // if (empty($row['rules'])) == true (line 471)
    // if (!empty($this->_error_array)) == true (line 479)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun109()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == false (line 425)
    // if (empty($config)) == true (line 430)
    // if (\count($this->_field_data) === 0) == true (line 440)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun110()
{
    $config = m::mock('UntypedParameter_config_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($this->_field_data) === 0) == true (line 422)
    // if (empty($this->_config_rules)) == true (line 425)

    $actual = $this->cI_Form_validation->run($config, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_rule0()
{
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->has_rule($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_value0()
{
    $field = m::mock('UntypedParameter_field_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 933)
    // if (\is_array($this->_field_data[$field]['postdata'])) == false (line 940)

    $actual = $this->cI_Form_validation->set_value($field, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_value1()
{
    $field = m::mock('UntypedParameter_field_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 933)
    // if (\is_array($this->_field_data[$field]['postdata'])) == true (line 940)

    $actual = $this->cI_Form_validation->set_value($field, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_value2()
{
    $field = m::mock('UntypedParameter_field_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == true (line 933)

    $actual = $this->cI_Form_validation->set_value($field, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_select0()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 963)
    // if (\is_array($field)) == false (line 970)
    // if ($field === '' or $value === '' or $field !== $value) == false (line 983)

    $actual = $this->cI_Form_validation->set_select($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_select1()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 963)
    // if (\is_array($field)) == false (line 970)
    // if ($field === '' or $value === '' or $field !== $value) == true (line 983)

    $actual = $this->cI_Form_validation->set_select($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_select2()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 963)
    // if (\is_array($field)) == true (line 970)

    $actual = $this->cI_Form_validation->set_select($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_select3()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 963)
    // if (\is_array($field)) == true (line 970)
    // if ($value === $v) == false (line 975)

    $actual = $this->cI_Form_validation->set_select($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_select4()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 963)
    // if (\is_array($field)) == true (line 970)
    // if ($value === $v) == true (line 975)

    $actual = $this->cI_Form_validation->set_select($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_select5()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == true (line 963)

    $actual = $this->cI_Form_validation->set_select($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_radio0()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 1006)
    // if (\is_array($field)) == false (line 1013)
    // if ($field === '' or $value === '' or $field !== $value) == false (line 1026)

    $actual = $this->cI_Form_validation->set_radio($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_radio1()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 1006)
    // if (\is_array($field)) == false (line 1013)
    // if ($field === '' or $value === '' or $field !== $value) == true (line 1026)

    $actual = $this->cI_Form_validation->set_radio($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_radio2()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 1006)
    // if (\is_array($field)) == true (line 1013)

    $actual = $this->cI_Form_validation->set_radio($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_radio3()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 1006)
    // if (\is_array($field)) == true (line 1013)
    // if ($value === $v) == false (line 1018)

    $actual = $this->cI_Form_validation->set_radio($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_radio4()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == false (line 1006)
    // if (\is_array($field)) == true (line 1013)
    // if ($value === $v) == true (line 1018)

    $actual = $this->cI_Form_validation->set_radio($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_radio5()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])) == true (line 1006)

    $actual = $this->cI_Form_validation->set_radio($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_checkbox0()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->set_checkbox($field, $value, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequired0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->required($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegex_match0()
{
    $str = m::mock('UntypedParameter_str_');
    $regex = m::mock('UntypedParameter_regex_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->regex_match($str, $regex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatches0()
{
    $str = m::mock('UntypedParameter_str_');
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->matches($str, $field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffers0()
{
    $str = m::mock('UntypedParameter_str_');
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->differs($str, $field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_unique0()
{
    $str = m::mock('UntypedParameter_str_');
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->is_unique($str, $field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMin_length0()
{
    $str = m::mock('UntypedParameter_str_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($val)) == false (line 1143)

    $actual = $this->cI_Form_validation->min_length($str, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMin_length1()
{
    $str = m::mock('UntypedParameter_str_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($val)) == true (line 1143)

    $actual = $this->cI_Form_validation->min_length($str, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMax_length0()
{
    $str = m::mock('UntypedParameter_str_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($val)) == false (line 1162)

    $actual = $this->cI_Form_validation->max_length($str, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMax_length1()
{
    $str = m::mock('UntypedParameter_str_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($val)) == true (line 1162)

    $actual = $this->cI_Form_validation->max_length($str, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExact_length0()
{
    $str = m::mock('UntypedParameter_str_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($val)) == false (line 1181)

    $actual = $this->cI_Form_validation->exact_length($str, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExact_length1()
{
    $str = m::mock('UntypedParameter_str_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_numeric($val)) == true (line 1181)

    $actual = $this->cI_Form_validation->exact_length($str, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_url0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($str)) == false (line 1199)
    // if (\preg_match('/^(?:([^:]*)\\:)?\\/\\/(.+)$/', $str, $matches)) == false (line 1203)
    // if (\preg_match('/^\\[([^\\]]+)\\]/', $str, $matches) && !\is_php('7') && \filter_var($matches[1], \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV6) !== \FALSE) == false (line 1220)

    $actual = $this->cI_Form_validation->valid_url($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_url1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($str)) == false (line 1199)
    // if (\preg_match('/^(?:([^:]*)\\:)?\\/\\/(.+)$/', $str, $matches)) == false (line 1203)
    // if (\preg_match('/^\\[([^\\]]+)\\]/', $str, $matches) && !\is_php('7') && \filter_var($matches[1], \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV6) !== \FALSE) == true (line 1220)

    $actual = $this->cI_Form_validation->valid_url($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_url2()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($str)) == false (line 1199)
    // if (\preg_match('/^(?:([^:]*)\\:)?\\/\\/(.+)$/', $str, $matches)) == true (line 1203)
    // if (empty($matches[2])) == false (line 1205)
    // if (!\in_array(\strtolower($matches[1]), array('http', 'https'), \TRUE)) == false (line 1209)
    // if (\preg_match('/^\\[([^\\]]+)\\]/', $str, $matches) && !\is_php('7') && \filter_var($matches[1], \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV6) !== \FALSE) == false (line 1220)

    $actual = $this->cI_Form_validation->valid_url($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_url3()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($str)) == false (line 1199)
    // if (\preg_match('/^(?:([^:]*)\\:)?\\/\\/(.+)$/', $str, $matches)) == true (line 1203)
    // if (empty($matches[2])) == false (line 1205)
    // if (!\in_array(\strtolower($matches[1]), array('http', 'https'), \TRUE)) == false (line 1209)
    // if (\preg_match('/^\\[([^\\]]+)\\]/', $str, $matches) && !\is_php('7') && \filter_var($matches[1], \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV6) !== \FALSE) == true (line 1220)

    $actual = $this->cI_Form_validation->valid_url($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_url4()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($str)) == false (line 1199)
    // if (\preg_match('/^(?:([^:]*)\\:)?\\/\\/(.+)$/', $str, $matches)) == true (line 1203)
    // if (empty($matches[2])) == false (line 1205)
    // if (!\in_array(\strtolower($matches[1]), array('http', 'https'), \TRUE)) == true (line 1209)

    $actual = $this->cI_Form_validation->valid_url($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_url5()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($str)) == false (line 1199)
    // if (\preg_match('/^(?:([^:]*)\\:)?\\/\\/(.+)$/', $str, $matches)) == true (line 1203)
    // if (empty($matches[2])) == true (line 1205)

    $actual = $this->cI_Form_validation->valid_url($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_url6()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($str)) == true (line 1199)

    $actual = $this->cI_Form_validation->valid_url($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_email0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('idn_to_ascii') && \preg_match('#\\A([^@]+)@(.+)\\z#', $str, $matches)) == false (line 1238)

    $actual = $this->cI_Form_validation->valid_email($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_email1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('idn_to_ascii') && \preg_match('#\\A([^@]+)@(.+)\\z#', $str, $matches)) == true (line 1238)

    $actual = $this->cI_Form_validation->valid_email($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_emails0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($str, ',') === \FALSE) == false (line 1256)

    $actual = $this->cI_Form_validation->valid_emails($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_emails1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($str, ',') === \FALSE) == false (line 1256)
    // if (\trim($email) !== '' && $this->valid_email(\trim($email)) === \FALSE) == false (line 1263)

    $actual = $this->cI_Form_validation->valid_emails($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_emails2()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($str, ',') === \FALSE) == false (line 1256)
    // if (\trim($email) !== '' && $this->valid_email(\trim($email)) === \FALSE) == true (line 1263)

    $actual = $this->cI_Form_validation->valid_emails($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_emails3()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($str, ',') === \FALSE) == true (line 1256)

    $actual = $this->cI_Form_validation->valid_emails($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_ip0()
{
    $ip = m::mock('UntypedParameter_ip_');
    $which = m::mock('UntypedParameter_which_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->valid_ip($ip, $which);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_mac0()
{
    $mac = m::mock('UntypedParameter_mac_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_php('5.5')) == false (line 1296)

    $actual = $this->cI_Form_validation->valid_mac($mac);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_mac1()
{
    $mac = m::mock('UntypedParameter_mac_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_php('5.5')) == true (line 1296)
    // if (\preg_match('#\\A[0-9a-f]{2}(?<delimiter>[:-])([0-9a-f]{2}(?P=delimiter)){4}[0-9a-f]{2}\\z#i', $mac)) == false (line 1299)

    $actual = $this->cI_Form_validation->valid_mac($mac);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_mac2()
{
    $mac = m::mock('UntypedParameter_mac_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_php('5.5')) == true (line 1296)
    // if (\preg_match('#\\A[0-9a-f]{2}(?<delimiter>[:-])([0-9a-f]{2}(?P=delimiter)){4}[0-9a-f]{2}\\z#i', $mac)) == true (line 1299)

    $actual = $this->cI_Form_validation->valid_mac($mac);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlpha0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->alpha($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlpha_numeric0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->alpha_numeric($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlpha_numeric_spaces0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->alpha_numeric_spaces($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlpha_dash0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->alpha_dash($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumeric0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->numeric($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInteger0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->integer($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecimal0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->decimal($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGreater_than0()
{
    $str = m::mock('UntypedParameter_str_');
    $min = m::mock('UntypedParameter_min_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->greater_than($str, $min);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGreater_than_equal_to0()
{
    $str = m::mock('UntypedParameter_str_');
    $min = m::mock('UntypedParameter_min_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->greater_than_equal_to($str, $min);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLess_than0()
{
    $str = m::mock('UntypedParameter_str_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->less_than($str, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLess_than_equal_to0()
{
    $str = m::mock('UntypedParameter_str_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->less_than_equal_to($str, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIn_list0()
{
    $value = m::mock('UntypedParameter_value_');
    $list = m::mock('UntypedParameter_list_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->in_list($value, $list);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_natural0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->is_natural($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_natural_no_zero0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->is_natural_no_zero($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_base640()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->valid_base64($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrep_url0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($str !== '' && \stripos($str, 'http://') !== 0 && \stripos($str, 'https://') !== 0) == false (line 1525)

    $actual = $this->cI_Form_validation->prep_url($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrep_url1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($str !== '' && \stripos($str, 'http://') !== 0 && \stripos($str, 'https://') !== 0) == true (line 1525)

    $actual = $this->cI_Form_validation->prep_url($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStrip_image_tags0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->strip_image_tags($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode_php_tags0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->encode_php_tags($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset_validation0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Form_validation->reset_validation();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
