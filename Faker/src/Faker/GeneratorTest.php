<?php

namespace tests\Faker;

use Faker\Generator;
use Mockery as m;

class GeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Generator
*/
protected $generator;

public function setUp()
{
    parent::setUp();

    $this->generator = new \Faker\Generator();
}

public function testAddProvider0()
{
    $provider = m::mock('UntypedParameter_provider_');

    // TODO: Your mock expectations here

    $actual = $this->generator->addProvider($provider);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProviders0()
{
    // TODO: Your mock expectations here

    $actual = $this->generator->getProviders();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSeed0()
{
    $seed = m::mock('UntypedParameter_seed_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($seed === null) == false (line 209)
    // if (PHP_VERSION_ID < 70100) == false (line 212)

    $actual = $this->generator->seed($seed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSeed1()
{
    $seed = m::mock('UntypedParameter_seed_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($seed === null) == false (line 209)
    // if (PHP_VERSION_ID < 70100) == true (line 212)

    $actual = $this->generator->seed($seed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSeed2()
{
    $seed = m::mock('UntypedParameter_seed_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($seed === null) == true (line 209)

    $actual = $this->generator->seed($seed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat0()
{
    $formatter = m::mock('UntypedParameter_formatter_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->generator->format($formatter, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGetFormatter0()
{
    $formatter = m::mock('UntypedParameter_formatter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->formatters[$formatter])) == false (line 232)
    // throw new \InvalidArgumentException(sprintf('Unknown formatter "%s"', $formatter)) -> exception (line 242)

    $actual = $this->generator->getFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGetFormatter1()
{
    $formatter = m::mock('UntypedParameter_formatter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->formatters[$formatter])) == false (line 232)
    // if (method_exists($provider, $formatter)) == false (line 236)
    // throw new \InvalidArgumentException(sprintf('Unknown formatter "%s"', $formatter)) -> exception (line 242)

    $actual = $this->generator->getFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatter2()
{
    $formatter = m::mock('UntypedParameter_formatter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->formatters[$formatter])) == false (line 232)
    // if (method_exists($provider, $formatter)) == true (line 236)

    $actual = $this->generator->getFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatter3()
{
    $formatter = m::mock('UntypedParameter_formatter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->formatters[$formatter])) == true (line 232)

    $actual = $this->generator->getFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->generator->parse($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $attribute = m::mock('UntypedParameter_attribute_');

    // TODO: Your mock expectations here

    $actual = $this->generator->__get($attribute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    $actual = $this->generator->__call($method, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
