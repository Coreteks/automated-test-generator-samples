<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\MessageBag;
use Mockery as m;

class MessageBagTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_messages = [];
/**
* @var \Illuminate\Support\MessageBag
*/
protected $messageBag;

public function setUp()
{
    parent::setUp();

    $this->_messages = [];
    $this->messageBag = new \Illuminate\Support\MessageBag($this->_messages);
}

public function testKeys0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->keys();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $key = m::mock('UntypedParameter_key_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isUnique($key, $message)) == false (line 61)

    $actual = $this->messageBag->add($key, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd1()
{
    $key = m::mock('UntypedParameter_key_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isUnique($key, $message)) == true (line 61)

    $actual = $this->messageBag->add($key, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMerge0()
{
    $messages = m::mock('UntypedParameter_messages_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($messages instanceof \Illuminate\Contracts\Support\MessageProvider) == false (line 90)

    $actual = $this->messageBag->merge($messages);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMerge1()
{
    $messages = m::mock('UntypedParameter_messages_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($messages instanceof \Illuminate\Contracts\Support\MessageProvider) == true (line 90)

    $actual = $this->messageBag->merge($messages);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 107)

    $actual = $this->messageBag->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 107)
    // if ($this->first($key) === '') == false (line 114)

    $actual = $this->messageBag->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 107)
    // if ($this->first($key) === '') == true (line 114)

    $actual = $this->messageBag->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == true (line 107)

    $actual = $this->messageBag->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasAny0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->messageBag->hasAny($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasAny1()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->has($key)) == false (line 133)

    $actual = $this->messageBag->hasAny($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasAny2()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->has($key)) == true (line 133)

    $actual = $this->messageBag->hasAny($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst0()
{
    $key = m::mock('UntypedParameter_key_');
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    $actual = $this->messageBag->first($key, $format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->messages)) == false (line 169)
    // if (\Illuminate\Support\Str::contains($key, '*')) == false (line 175)

    $actual = $this->messageBag->get($key, $format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->messages)) == false (line 169)
    // if (\Illuminate\Support\Str::contains($key, '*')) == true (line 175)

    $actual = $this->messageBag->get($key, $format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $key = m::mock('UntypedParameter_key_');
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->messages)) == true (line 169)

    $actual = $this->messageBag->get($key, $format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll0()
{
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    $actual = $this->messageBag->all($format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll1()
{
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    $actual = $this->messageBag->all($format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnique0()
{
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    $actual = $this->messageBag->unique($format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMessages0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->messages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMessages0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->getMessages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMessageBag0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->getMessageBag();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormat0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->getFormat();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFormat0()
{
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    $actual = $this->messageBag->setFormat($format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsEmpty0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->isEmpty();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsNotEmpty0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->isNotEmpty();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAny0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->any();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->toArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToJson0()
{
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->messageBag->toJson($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->messageBag->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
