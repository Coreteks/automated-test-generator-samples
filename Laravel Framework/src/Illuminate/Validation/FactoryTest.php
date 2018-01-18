<?php

namespace tests\Illuminate\Validation;

use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Validation\Factory;
use Mockery as m;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_translator;
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Validation\Factory
*/
protected $factory;

public function setUp()
{
    parent::setUp();

    $this->_translator = m::mock(\Illuminate\Contracts\Translation\Translator::class);
    $this->_container = m::mock(\Illuminate\Contracts\Container\Container::class);
    $this->factory = new \Illuminate\Validation\Factory($this->_translator, $this->_container);
}

public function testMake0()
{
    $data = [];
    $rules = [];
    $messages = [];
    $customAttributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->verifier)) == false (line 107)
    // if (!is_null($this->container)) == false (line 114)

    $actual = $this->factory->make($data, $rules, $messages, $customAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake1()
{
    $data = [];
    $rules = [];
    $messages = [];
    $customAttributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->verifier)) == false (line 107)
    // if (!is_null($this->container)) == true (line 114)

    $actual = $this->factory->make($data, $rules, $messages, $customAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake2()
{
    $data = [];
    $rules = [];
    $messages = [];
    $customAttributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->verifier)) == true (line 107)
    // if (!is_null($this->container)) == false (line 114)

    $actual = $this->factory->make($data, $rules, $messages, $customAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake3()
{
    $data = [];
    $rules = [];
    $messages = [];
    $customAttributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->verifier)) == true (line 107)
    // if (!is_null($this->container)) == true (line 114)

    $actual = $this->factory->make($data, $rules, $messages, $customAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate0()
{
    $data = [];
    $rules = [];
    $messages = [];
    $customAttributes = [];

    // TODO: Your mock expectations here

    $actual = $this->factory->validate($data, $rules, $messages, $customAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend0()
{
    $rule = m::mock('UntypedParameter_rule_');
    $extension = m::mock('UntypedParameter_extension_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message) == false (line 191)

    $actual = $this->factory->extend($rule, $extension, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend1()
{
    $rule = m::mock('UntypedParameter_rule_');
    $extension = m::mock('UntypedParameter_extension_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message) == true (line 191)

    $actual = $this->factory->extend($rule, $extension, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtendImplicit0()
{
    $rule = m::mock('UntypedParameter_rule_');
    $extension = m::mock('UntypedParameter_extension_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message) == false (line 208)

    $actual = $this->factory->extendImplicit($rule, $extension, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtendImplicit1()
{
    $rule = m::mock('UntypedParameter_rule_');
    $extension = m::mock('UntypedParameter_extension_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message) == true (line 208)

    $actual = $this->factory->extendImplicit($rule, $extension, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtendDependent0()
{
    $rule = m::mock('UntypedParameter_rule_');
    $extension = m::mock('UntypedParameter_extension_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message) == false (line 225)

    $actual = $this->factory->extendDependent($rule, $extension, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtendDependent1()
{
    $rule = m::mock('UntypedParameter_rule_');
    $extension = m::mock('UntypedParameter_extension_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message) == true (line 225)

    $actual = $this->factory->extendDependent($rule, $extension, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplacer0()
{
    $rule = m::mock('UntypedParameter_rule_');
    $replacer = m::mock('UntypedParameter_replacer_');

    // TODO: Your mock expectations here

    $actual = $this->factory->replacer($rule, $replacer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolver0()
{
    $resolver = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->factory->resolver($resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTranslator0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->getTranslator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPresenceVerifier0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->getPresenceVerifier();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPresenceVerifier0()
{
    $presenceVerifier = m::mock(\Illuminate\Validation\PresenceVerifierInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->factory->setPresenceVerifier($presenceVerifier);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
