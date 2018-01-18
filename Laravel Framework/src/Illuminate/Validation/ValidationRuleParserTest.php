<?php

namespace tests\Illuminate\Validation;

use Illuminate\Validation\ValidationRuleParser;
use Mockery as m;

class ValidationRuleParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_data = [];
/**
* @var \Illuminate\Validation\ValidationRuleParser
*/
protected $validationRuleParser;

public function setUp()
{
    parent::setUp();

    $this->_data = [];
    $this->validationRuleParser = new \Illuminate\Validation\ValidationRuleParser($this->_data);
}

public function testExplode0()
{
    $rules = m::mock('UntypedParameter_rules_');

    // TODO: Your mock expectations here

    $actual = $this->validationRuleParser->explode($rules);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMergeRules0()
{
    $results = m::mock('UntypedParameter_results_');
    $attribute = m::mock('UntypedParameter_attribute_');
    $rules = m::mock('UntypedParameter_rules_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($attribute)) == false (line 154)

    $actual = $this->validationRuleParser->mergeRules($results, $attribute, $rules);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMergeRules1()
{
    $results = m::mock('UntypedParameter_results_');
    $attribute = m::mock('UntypedParameter_attribute_');
    $rules = m::mock('UntypedParameter_rules_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($attribute)) == true (line 154)

    $actual = $this->validationRuleParser->mergeRules($results, $attribute, $rules);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMergeRules2()
{
    $results = m::mock('UntypedParameter_results_');
    $attribute = m::mock('UntypedParameter_attribute_');
    $rules = m::mock('UntypedParameter_rules_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($attribute)) == true (line 154)

    $actual = $this->validationRuleParser->mergeRules($results, $attribute, $rules);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    $rules = m::mock('UntypedParameter_rules_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($rules instanceof \Illuminate\Contracts\Validation\Rule) == false (line 194)
    // if (is_array($rules)) == false (line 198)

    $actual = $this->validationRuleParser->parse($rules);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $rules = m::mock('UntypedParameter_rules_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($rules instanceof \Illuminate\Contracts\Validation\Rule) == false (line 194)
    // if (is_array($rules)) == true (line 198)

    $actual = $this->validationRuleParser->parse($rules);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $rules = m::mock('UntypedParameter_rules_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($rules instanceof \Illuminate\Contracts\Validation\Rule) == true (line 194)

    $actual = $this->validationRuleParser->parse($rules);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
