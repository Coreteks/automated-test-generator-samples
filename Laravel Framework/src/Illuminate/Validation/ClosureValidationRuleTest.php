<?php

namespace tests\Illuminate\Validation;

use Illuminate\Validation\ClosureValidationRule;
use Mockery as m;

class ClosureValidationRuleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_callback = null;
/**
* @var \Illuminate\Validation\ClosureValidationRule
*/
protected $closureValidationRule;

public function setUp()
{
    parent::setUp();

    $this->_callback = null;
    $this->closureValidationRule = new \Illuminate\Validation\ClosureValidationRule($this->_callback);
}

public function testPasses0()
{
    $attribute = m::mock('UntypedParameter_attribute_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->closureValidationRule->passes($attribute, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->closureValidationRule->message();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
