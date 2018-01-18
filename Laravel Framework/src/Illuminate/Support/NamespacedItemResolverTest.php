<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\NamespacedItemResolver;
use Mockery as m;

class NamespacedItemResolverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\NamespacedItemResolver
*/
protected $namespacedItemResolver;

public function setUp()
{
    parent::setUp();

    $this->namespacedItemResolver = new \Illuminate\Support\NamespacedItemResolver();
}

public function testParseKey0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parsed[$key])) == false (line 25)
    // if (strpos($key, '::') === false) == false (line 32)

    $actual = $this->namespacedItemResolver->parseKey($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseKey1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parsed[$key])) == false (line 25)
    // if (strpos($key, '::') === false) == true (line 32)

    $actual = $this->namespacedItemResolver->parseKey($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseKey2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parsed[$key])) == true (line 25)

    $actual = $this->namespacedItemResolver->parseKey($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetParsedKey0()
{
    $key = m::mock('UntypedParameter_key_');
    $parsed = m::mock('UntypedParameter_parsed_');

    // TODO: Your mock expectations here

    $actual = $this->namespacedItemResolver->setParsedKey($key, $parsed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
