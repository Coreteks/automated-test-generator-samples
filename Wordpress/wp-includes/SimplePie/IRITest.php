<?php

namespace tests;

use Mockery as m;
use SimplePie_IRI;

class SimplePie_IRITest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_iri = null;
/**
* @var \SimplePie_IRI
*/
protected $simplePie_IRI;

public function setUp()
{
    parent::setUp();

    $this->_iri = null;
    $this->simplePie_IRI = new \SimplePie_IRI($this->_iri);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_IRI->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'set_' . $name)) == false (line 151)
    // if ($name === 'iauthority' || $name === 'iuserinfo' || $name === 'ihost' || $name === 'ipath' || $name === 'iquery' || $name === 'ifragment') == false (line 155)

    $actual = $this->simplePie_IRI->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set1()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'set_' . $name)) == false (line 151)
    // if ($name === 'iauthority' || $name === 'iuserinfo' || $name === 'ihost' || $name === 'ipath' || $name === 'iquery' || $name === 'ifragment') == true (line 155)

    $actual = $this->simplePie_IRI->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set2()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'set_' . $name)) == true (line 151)

    $actual = $this->simplePie_IRI->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 180)
    // if (\array_key_exists($name, $props)) == false (line 189)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == false (line 194)
    // if (($prop = \substr($name, 1)) && \array_key_exists($prop, $props)) == false (line 200)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == false (line 211)

    $actual = $this->simplePie_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 180)
    // if (\array_key_exists($name, $props)) == false (line 189)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == false (line 194)
    // if (($prop = \substr($name, 1)) && \array_key_exists($prop, $props)) == false (line 200)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == true (line 211)

    $actual = $this->simplePie_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 180)
    // if (\array_key_exists($name, $props)) == false (line 189)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == false (line 194)
    // if (($prop = \substr($name, 1)) && \array_key_exists($prop, $props)) == true (line 200)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == false (line 211)

    $actual = $this->simplePie_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 180)
    // if (\array_key_exists($name, $props)) == false (line 189)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == false (line 194)
    // if (($prop = \substr($name, 1)) && \array_key_exists($prop, $props)) == true (line 200)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == true (line 211)

    $actual = $this->simplePie_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 180)
    // if (\array_key_exists($name, $props)) == false (line 189)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == true (line 194)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == false (line 211)

    $actual = $this->simplePie_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get5()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 180)
    // if (\array_key_exists($name, $props)) == false (line 189)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == true (line 194)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == true (line 211)

    $actual = $this->simplePie_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get6()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 180)
    // if (\array_key_exists($name, $props)) == true (line 189)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == false (line 211)

    $actual = $this->simplePie_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get7()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 180)
    // if (\array_key_exists($name, $props)) == true (line 189)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == true (line 211)

    $actual = $this->simplePie_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get8()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == true (line 180)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == false (line 211)

    $actual = $this->simplePie_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get9()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == true (line 180)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == true (line 211)

    $actual = $this->simplePie_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'get_' . $name) || isset($this->{$name})) == false (line 229)

    $actual = $this->simplePie_IRI->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'get_' . $name) || isset($this->{$name})) == true (line 229)

    $actual = $this->simplePie_IRI->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'set_' . $name)) == false (line 246)

    $actual = $this->simplePie_IRI->__unset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'set_' . $name)) == true (line 246)

    $actual = $this->simplePie_IRI->__unset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize0()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == false (line 291)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize1()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == false (line 293)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize2()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == false (line 331)
    // if ($base->iquery !== \null) == false (line 335)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize3()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == false (line 331)
    // if ($base->iquery !== \null) == true (line 335)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize4()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == true (line 331)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize5()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 313)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == false (line 317)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize6()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 313)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == true (line 317)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize7()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == true (line 313)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize8()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == true (line 309)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize9()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == true (line 295)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize10()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == false (line 291)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize11()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == false (line 293)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize12()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == false (line 331)
    // if ($base->iquery !== \null) == false (line 335)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize13()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == false (line 331)
    // if ($base->iquery !== \null) == true (line 335)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize14()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == true (line 331)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize15()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 313)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == false (line 317)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize16()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 313)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == true (line 317)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize17()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == true (line 313)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize18()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == true (line 309)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize19()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == true (line 295)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize20()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == true (line 281)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize21()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == false (line 273)
    // if (!$relative->is_valid()) == true (line 277)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize22()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == false (line 291)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize23()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == false (line 293)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize24()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == false (line 331)
    // if ($base->iquery !== \null) == false (line 335)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize25()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == false (line 331)
    // if ($base->iquery !== \null) == true (line 335)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize26()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == true (line 331)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize27()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 313)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == false (line 317)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize28()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 313)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == true (line 317)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize29()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == true (line 313)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize30()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == true (line 309)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize31()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == false (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == true (line 295)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize32()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == false (line 291)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize33()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == false (line 293)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize34()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == false (line 331)
    // if ($base->iquery !== \null) == false (line 335)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize35()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == false (line 331)
    // if ($base->iquery !== \null) == true (line 335)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize36()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == false (line 307)
    // if ($relative->iquery !== \null) == true (line 331)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize37()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 313)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == false (line 317)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize38()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 313)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == true (line 317)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize39()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == false (line 309)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == true (line 313)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize40()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 295)
    // if ($relative->ipath !== '') == true (line 307)
    // if ($relative->ipath[0] === '/') == true (line 309)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize41()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == false (line 281)
    // if (!$base instanceof \SimplePie_IRI) == true (line 287)
    // if ($base->scheme !== \null && $base->is_valid()) == true (line 291)
    // if ($relative->get_iri() !== '') == true (line 293)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == true (line 295)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize42()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == false (line 277)
    // if ($relative->scheme !== \null) == true (line 281)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize43()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \SimplePie_IRI) == true (line 273)
    // if (!$relative->is_valid()) == true (line 277)

    $actual = $this->simplePie_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_valid0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ipath !== '' && ($isauthority && ($this->ipath[0] !== '/' || \substr($this->ipath, 0, 2) === '//') || $this->scheme === \null && !$isauthority && \strpos($this->ipath, ':') !== \false && (\strpos($this->ipath, '/') === \false ? \true : \strpos($this->ipath, ':') < \strpos($this->ipath, '/')))) == false (line 772)

    $actual = $this->simplePie_IRI->is_valid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_valid1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ipath !== '' && ($isauthority && ($this->ipath[0] !== '/' || \substr($this->ipath, 0, 2) === '//') || $this->scheme === \null && !$isauthority && \strpos($this->ipath, ':') !== \false && (\strpos($this->ipath, '/') === \false ? \true : \strpos($this->ipath, ':') < \strpos($this->ipath, '/')))) == true (line 772)

    $actual = $this->simplePie_IRI->is_valid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_iri0()
{
    $iri = m::mock('UntypedParameter_iri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 803)
    // if ($iri === \null) == false (line 808)
    // if (isset($cache[$iri])) == false (line 812)
    // if (!$parsed) == false (line 827)

    $actual = $this->simplePie_IRI->set_iri($iri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_iri1()
{
    $iri = m::mock('UntypedParameter_iri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 803)
    // if ($iri === \null) == false (line 808)
    // if (isset($cache[$iri])) == false (line 812)
    // if (!$parsed) == true (line 827)

    $actual = $this->simplePie_IRI->set_iri($iri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_iri2()
{
    $iri = m::mock('UntypedParameter_iri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 803)
    // if ($iri === \null) == false (line 808)
    // if (isset($cache[$iri])) == true (line 812)

    $actual = $this->simplePie_IRI->set_iri($iri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_iri3()
{
    $iri = m::mock('UntypedParameter_iri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 803)
    // if ($iri === \null) == true (line 808)

    $actual = $this->simplePie_IRI->set_iri($iri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_iri4()
{
    $iri = m::mock('UntypedParameter_iri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 803)
    // if ($iri === \null) == false (line 808)
    // if (isset($cache[$iri])) == false (line 812)
    // if (!$parsed) == false (line 827)

    $actual = $this->simplePie_IRI->set_iri($iri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_iri5()
{
    $iri = m::mock('UntypedParameter_iri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 803)
    // if ($iri === \null) == false (line 808)
    // if (isset($cache[$iri])) == false (line 812)
    // if (!$parsed) == true (line 827)

    $actual = $this->simplePie_IRI->set_iri($iri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_iri6()
{
    $iri = m::mock('UntypedParameter_iri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 803)
    // if ($iri === \null) == false (line 808)
    // if (isset($cache[$iri])) == true (line 812)

    $actual = $this->simplePie_IRI->set_iri($iri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_iri7()
{
    $iri = m::mock('UntypedParameter_iri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 803)
    // if ($iri === \null) == true (line 808)

    $actual = $this->simplePie_IRI->set_iri($iri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_scheme0()
{
    $scheme = m::mock('UntypedParameter_scheme_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($scheme === \null) == false (line 859)
    // if (!\preg_match('/^[A-Za-z][0-9A-Za-z+\\-.]*$/', $scheme)) == false (line 863)

    $actual = $this->simplePie_IRI->set_scheme($scheme);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_scheme1()
{
    $scheme = m::mock('UntypedParameter_scheme_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($scheme === \null) == false (line 859)
    // if (!\preg_match('/^[A-Za-z][0-9A-Za-z+\\-.]*$/', $scheme)) == true (line 863)

    $actual = $this->simplePie_IRI->set_scheme($scheme);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_scheme2()
{
    $scheme = m::mock('UntypedParameter_scheme_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($scheme === \null) == true (line 859)

    $actual = $this->simplePie_IRI->set_scheme($scheme);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority0()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == false (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == false (line 916)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority1()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == false (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == true (line 916)
    // if (($port = \substr($remaining, $port_start + 1)) === \false) == false (line 918)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority2()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == false (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == true (line 916)
    // if (($port = \substr($remaining, $port_start + 1)) === \false) == true (line 918)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority3()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == true (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == false (line 916)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority4()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == true (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == true (line 916)
    // if (($port = \substr($remaining, $port_start + 1)) === \false) == false (line 918)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority5()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == true (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == true (line 916)
    // if (($port = \substr($remaining, $port_start + 1)) === \false) == true (line 918)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority6()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == true (line 895)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority7()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 885)
    // if ($authority === \null) == true (line 888)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority8()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == false (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == false (line 916)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority9()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == false (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == true (line 916)
    // if (($port = \substr($remaining, $port_start + 1)) === \false) == false (line 918)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority10()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == false (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == true (line 916)
    // if (($port = \substr($remaining, $port_start + 1)) === \false) == true (line 918)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority11()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == true (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == false (line 916)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority12()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == true (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == true (line 916)
    // if (($port = \substr($remaining, $port_start + 1)) === \false) == false (line 918)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority13()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == false (line 895)
    // if (($iuserinfo_end = \strrpos($remaining, '@')) !== \false) == true (line 907)
    // if (($port_start = \strpos($remaining, ':', \strpos($remaining, ']'))) !== \false) == true (line 916)
    // if (($port = \substr($remaining, $port_start + 1)) === \false) == true (line 918)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority14()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 885)
    // if ($authority === \null) == false (line 888)
    // if (isset($cache[$authority])) == true (line 895)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_authority15()
{
    $authority = m::mock('UntypedParameter_authority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 885)
    // if ($authority === \null) == true (line 888)

    $actual = $this->simplePie_IRI->set_authority($authority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_userinfo0()
{
    $iuserinfo = m::mock('UntypedParameter_iuserinfo_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($iuserinfo === \null) == false (line 950)

    $actual = $this->simplePie_IRI->set_userinfo($iuserinfo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_userinfo1()
{
    $iuserinfo = m::mock('UntypedParameter_iuserinfo_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($iuserinfo === \null) == true (line 950)

    $actual = $this->simplePie_IRI->set_userinfo($iuserinfo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_host0()
{
    $ihost = m::mock('UntypedParameter_ihost_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ihost === \null) == false (line 972)
    // if (\substr($ihost, 0, 1) === '[' && \substr($ihost, -1) === ']') == false (line 977)
    // while (($position += \strcspn($ihost, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ%', $position)) < $strlen) == false (line 998)

    $actual = $this->simplePie_IRI->set_host($ihost);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_host1()
{
    $ihost = m::mock('UntypedParameter_ihost_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ihost === \null) == false (line 972)
    // if (\substr($ihost, 0, 1) === '[' && \substr($ihost, -1) === ']') == false (line 977)
    // while (($position += \strcspn($ihost, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ%', $position)) < $strlen) == true (line 998)
    // if ($ihost[$position] === '%') == false (line 1000)
    // while (($position += \strcspn($ihost, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ%', $position)) < $strlen) == false (line 998)

    $actual = $this->simplePie_IRI->set_host($ihost);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_host2()
{
    $ihost = m::mock('UntypedParameter_ihost_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ihost === \null) == false (line 972)
    // if (\substr($ihost, 0, 1) === '[' && \substr($ihost, -1) === ']') == false (line 977)
    // while (($position += \strcspn($ihost, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ%', $position)) < $strlen) == true (line 998)
    // if ($ihost[$position] === '%') == true (line 1000)
    // while (($position += \strcspn($ihost, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ%', $position)) < $strlen) == false (line 998)

    $actual = $this->simplePie_IRI->set_host($ihost);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_host3()
{
    $ihost = m::mock('UntypedParameter_ihost_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ihost === \null) == false (line 972)
    // if (\substr($ihost, 0, 1) === '[' && \substr($ihost, -1) === ']') == true (line 977)
    // if (\SimplePie_Net_IPv6::check_ipv6(\substr($ihost, 1, -1))) == false (line 979)

    $actual = $this->simplePie_IRI->set_host($ihost);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_host4()
{
    $ihost = m::mock('UntypedParameter_ihost_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ihost === \null) == false (line 972)
    // if (\substr($ihost, 0, 1) === '[' && \substr($ihost, -1) === ']') == true (line 977)
    // if (\SimplePie_Net_IPv6::check_ipv6(\substr($ihost, 1, -1))) == true (line 979)

    $actual = $this->simplePie_IRI->set_host($ihost);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_host5()
{
    $ihost = m::mock('UntypedParameter_ihost_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ihost === \null) == true (line 972)

    $actual = $this->simplePie_IRI->set_host($ihost);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_port0()
{
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($port === \null) == false (line 1028)
    // if (\strspn($port, '0123456789') === \strlen($port)) == false (line 1033)

    $actual = $this->simplePie_IRI->set_port($port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_port1()
{
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($port === \null) == false (line 1028)
    // if (\strspn($port, '0123456789') === \strlen($port)) == true (line 1033)

    $actual = $this->simplePie_IRI->set_port($port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_port2()
{
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($port === \null) == true (line 1028)

    $actual = $this->simplePie_IRI->set_port($port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_path0()
{
    $ipath = m::mock('UntypedParameter_ipath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 1055)
    // if (isset($cache[$ipath])) == false (line 1062)

    $actual = $this->simplePie_IRI->set_path($ipath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_path1()
{
    $ipath = m::mock('UntypedParameter_ipath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == false (line 1055)
    // if (isset($cache[$ipath])) == true (line 1062)

    $actual = $this->simplePie_IRI->set_path($ipath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_path2()
{
    $ipath = m::mock('UntypedParameter_ipath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 1055)
    // if (isset($cache[$ipath])) == false (line 1062)

    $actual = $this->simplePie_IRI->set_path($ipath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_path3()
{
    $ipath = m::mock('UntypedParameter_ipath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cache) == true (line 1055)
    // if (isset($cache[$ipath])) == true (line 1062)

    $actual = $this->simplePie_IRI->set_path($ipath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_query0()
{
    $iquery = m::mock('UntypedParameter_iquery_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($iquery === \null) == false (line 1087)

    $actual = $this->simplePie_IRI->set_query($iquery);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_query1()
{
    $iquery = m::mock('UntypedParameter_iquery_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($iquery === \null) == true (line 1087)

    $actual = $this->simplePie_IRI->set_query($iquery);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_fragment0()
{
    $ifragment = m::mock('UntypedParameter_ifragment_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ifragment === \null) == false (line 1107)

    $actual = $this->simplePie_IRI->set_fragment($ifragment);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_fragment1()
{
    $ifragment = m::mock('UntypedParameter_ifragment_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ifragment === \null) == true (line 1107)

    $actual = $this->simplePie_IRI->set_fragment($ifragment);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_uri0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$non_ascii) == false (line 1127)
    // while (($position += \strcspn($string, $non_ascii, $position)) < $strlen) == false (line 1134)

    $actual = $this->simplePie_IRI->to_uri($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_uri1()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$non_ascii) == false (line 1127)
    // while (($position += \strcspn($string, $non_ascii, $position)) < $strlen) == true (line 1134)
    // while (($position += \strcspn($string, $non_ascii, $position)) < $strlen) == false (line 1134)

    $actual = $this->simplePie_IRI->to_uri($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_uri2()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$non_ascii) == true (line 1127)
    // while (($position += \strcspn($string, $non_ascii, $position)) < $strlen) == false (line 1134)

    $actual = $this->simplePie_IRI->to_uri($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_uri3()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$non_ascii) == true (line 1127)
    // while (($position += \strcspn($string, $non_ascii, $position)) < $strlen) == true (line 1134)
    // while (($position += \strcspn($string, $non_ascii, $position)) < $strlen) == false (line 1134)

    $actual = $this->simplePie_IRI->to_uri($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == false (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == false (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == false (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == false (line 1165)
    // if (!empty($this->normalization[$this->scheme]['ipath']) && $iauthority !== \null && $iauthority !== '') == true (line 1169)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == false (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == false (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == false (line 1151)
    // if ($this->scheme !== \null) == true (line 1157)
    // if (($iauthority = $this->get_iauthority()) !== \null) == true (line 1161)
    // if ($this->ipath !== '') == true (line 1165)
    // if ($this->iquery !== \null) == true (line 1173)
    // if ($this->ifragment !== \null) == true (line 1177)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_iri48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_valid()) == true (line 1151)

    $actual = $this->simplePie_IRI->get_iri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_uri0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_IRI->get_uri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
