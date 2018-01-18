<?php

namespace tests\Illuminate\Validation;

use Illuminate\Contracts\Translation\Translator;
use Illuminate\Validation\Validator;
use Mockery as m;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_translator;
/**
* @var array
*/
protected $_data = [];
/**
* @var array
*/
protected $_rules = [];
/**
* @var array
*/
protected $_messages = [];
/**
* @var array
*/
protected $_customAttributes = [];
/**
* @var \Illuminate\Validation\Validator
*/
protected $validator;

public function setUp()
{
    parent::setUp();

    $this->_translator = m::mock(\Illuminate\Contracts\Translation\Translator::class);
    $this->_data = [];
    $this->_rules = [];
    $this->_messages = [];
    $this->_customAttributes = [];
    $this->validator = new \Illuminate\Validation\Validator($this->_translator, $this->_data, $this->_rules, $this->_messages, $this->_customAttributes);
}

public function testParseData0()
{
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->parseData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseData1()
{
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($value)) == false (line 220)
    // if (\Illuminate\Support\Str::contains($key, '.')) == false (line 227)

    $actual = $this->validator->parseData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseData2()
{
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($value)) == false (line 220)
    // if (\Illuminate\Support\Str::contains($key, '.')) == true (line 227)

    $actual = $this->validator->parseData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseData3()
{
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($value)) == true (line 220)
    // if (\Illuminate\Support\Str::contains($key, '.')) == false (line 227)

    $actual = $this->validator->parseData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseData4()
{
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($value)) == true (line 220)
    // if (\Illuminate\Support\Str::contains($key, '.')) == true (line 227)

    $actual = $this->validator->parseData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfter0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->validator->after($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPasses0()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->passes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPasses1()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->passes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPasses2()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->passes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPasses3()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->passes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPasses4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldStopValidating($attribute)) == false (line 270)

    $actual = $this->validator->passes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPasses5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldStopValidating($attribute)) == false (line 270)

    $actual = $this->validator->passes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPasses6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldStopValidating($attribute)) == true (line 270)

    $actual = $this->validator->passes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPasses7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldStopValidating($attribute)) == true (line 270)

    $actual = $this->validator->passes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFails0()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->fails();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->fails()) == false (line 305)

    $actual = $this->validator->validate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Validation\ValidationException
 */
public function testValidate1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->fails()) == true (line 305)
    // throw new \Illuminate\Validation\ValidationException($this) -> exception (line 306)

    $actual = $this->validator->validate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->messages) == false (line 591)

    $actual = $this->validator->valid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->messages) == true (line 591)

    $actual = $this->validator->valid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInvalid0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->messages) == false (line 607)

    $actual = $this->validator->invalid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInvalid1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->messages) == true (line 607)

    $actual = $this->validator->invalid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailed0()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->failed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMessages0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->messages) == false (line 645)

    $actual = $this->validator->messages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMessages1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->messages) == true (line 645)

    $actual = $this->validator->messages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testErrors0()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->errors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMessageBag0()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->getMessageBag();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRule0()
{
    $attribute = m::mock('UntypedParameter_attribute_');
    $rules = m::mock('UntypedParameter_rules_');

    // TODO: Your mock expectations here

    $actual = $this->validator->hasRule($attribute, $rules);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttributes0()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->attributes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetData0()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->getData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetData0()
{
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->setData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRules0()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->getRules();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRules0()
{
    $rules = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->setRules($rules);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRules0()
{
    $rules = m::mock('UntypedParameter_rules_');

    // TODO: Your mock expectations here

    $actual = $this->validator->addRules($rules);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSometimes0()
{
    $attribute = m::mock('UntypedParameter_attribute_');
    $rules = m::mock('UntypedParameter_rules_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (call_user_func($callback, $payload)) == false (line 816)

    $actual = $this->validator->sometimes($attribute, $rules, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSometimes1()
{
    $attribute = m::mock('UntypedParameter_attribute_');
    $rules = m::mock('UntypedParameter_rules_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (call_user_func($callback, $payload)) == true (line 816)

    $actual = $this->validator->sometimes($attribute, $rules, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSometimes2()
{
    $attribute = m::mock('UntypedParameter_attribute_');
    $rules = m::mock('UntypedParameter_rules_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (call_user_func($callback, $payload)) == true (line 816)

    $actual = $this->validator->sometimes($attribute, $rules, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddExtensions0()
{
    $extensions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($extensions) == false (line 833)

    $actual = $this->validator->addExtensions($extensions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddExtensions1()
{
    $extensions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($extensions) == true (line 833)

    $actual = $this->validator->addExtensions($extensions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddImplicitExtensions0()
{
    $extensions = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->addImplicitExtensions($extensions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddImplicitExtensions1()
{
    $extensions = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->addImplicitExtensions($extensions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddDependentExtensions0()
{
    $extensions = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->addDependentExtensions($extensions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddDependentExtensions1()
{
    $extensions = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->addDependentExtensions($extensions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddExtension0()
{
    $rule = m::mock('UntypedParameter_rule_');
    $extension = m::mock('UntypedParameter_extension_');

    // TODO: Your mock expectations here

    $actual = $this->validator->addExtension($rule, $extension);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddImplicitExtension0()
{
    $rule = m::mock('UntypedParameter_rule_');
    $extension = m::mock('UntypedParameter_extension_');

    // TODO: Your mock expectations here

    $actual = $this->validator->addImplicitExtension($rule, $extension);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddDependentExtension0()
{
    $rule = m::mock('UntypedParameter_rule_');
    $extension = m::mock('UntypedParameter_extension_');

    // TODO: Your mock expectations here

    $actual = $this->validator->addDependentExtension($rule, $extension);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddReplacers0()
{
    $replacers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($replacers) == false (line 920)

    $actual = $this->validator->addReplacers($replacers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddReplacers1()
{
    $replacers = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($replacers) == true (line 920)

    $actual = $this->validator->addReplacers($replacers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddReplacer0()
{
    $rule = m::mock('UntypedParameter_rule_');
    $replacer = m::mock('UntypedParameter_replacer_');

    // TODO: Your mock expectations here

    $actual = $this->validator->addReplacer($rule, $replacer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCustomMessages0()
{
    $messages = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->setCustomMessages($messages);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAttributeNames0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->setAttributeNames($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCustomAttributes0()
{
    $customAttributes = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->addCustomAttributes($customAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetValueNames0()
{
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->setValueNames($values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCustomValues0()
{
    $customValues = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->addCustomValues($customValues);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFallbackMessages0()
{
    $messages = [];

    // TODO: Your mock expectations here

    $actual = $this->validator->setFallbackMessages($messages);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPresenceVerifier0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->presenceVerifier)) == false (line 1026)

    $actual = $this->validator->getPresenceVerifier();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetPresenceVerifier1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->presenceVerifier)) == true (line 1026)
    // throw new \RuntimeException('Presence verifier has not been set.') -> exception (line 1027)

    $actual = $this->validator->getPresenceVerifier();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPresenceVerifier0()
{
    $presenceVerifier = m::mock(\Illuminate\Validation\PresenceVerifierInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->validator->setPresenceVerifier($presenceVerifier);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTranslator0()
{
    // TODO: Your mock expectations here

    $actual = $this->validator->getTranslator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTranslator0()
{
    $translator = m::mock(\Illuminate\Contracts\Translation\Translator::class);

    // TODO: Your mock expectations here

    $actual = $this->validator->setTranslator($translator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetContainer0()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->validator->setContainer($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->extensions[$rule])) == false (line 1136)
    // throw new \BadMethodCallException("Method [{$method}] does not exist.") -> exception (line 1140)

    $actual = $this->validator->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->extensions[$rule])) == true (line 1136)

    $actual = $this->validator->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
