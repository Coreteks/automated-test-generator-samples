<?php

namespace tests;

use Mockery as m;
use Requests_IRI;

class Requests_IRITest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_iri = null;
/**
* @var \Requests_IRI
*/
protected $requests_IRI;

public function setUp()
{
    parent::setUp();

    $this->_iri = null;
    $this->requests_IRI = new \Requests_IRI($this->_iri);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_IRI->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'set_' . $name)) == false (line 156)
    // if ($name === 'iauthority' || $name === 'iuserinfo' || $name === 'ihost' || $name === 'ipath' || $name === 'iquery' || $name === 'ifragment') == false (line 159)

    $actual = $this->requests_IRI->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set1()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'set_' . $name)) == false (line 156)
    // if ($name === 'iauthority' || $name === 'iuserinfo' || $name === 'ihost' || $name === 'ipath' || $name === 'iquery' || $name === 'ifragment') == true (line 159)

    $actual = $this->requests_IRI->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set2()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'set_' . $name)) == true (line 156)

    $actual = $this->requests_IRI->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 182)
    // if (\array_key_exists($name, $props)) == false (line 191)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == false (line 195)
    // if (($prop = \substr($name, 1)) && \array_key_exists($prop, $props)) == false (line 200)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == false (line 209)

    $actual = $this->requests_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 182)
    // if (\array_key_exists($name, $props)) == false (line 191)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == false (line 195)
    // if (($prop = \substr($name, 1)) && \array_key_exists($prop, $props)) == false (line 200)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == true (line 209)

    $actual = $this->requests_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 182)
    // if (\array_key_exists($name, $props)) == false (line 191)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == false (line 195)
    // if (($prop = \substr($name, 1)) && \array_key_exists($prop, $props)) == true (line 200)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == false (line 209)

    $actual = $this->requests_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 182)
    // if (\array_key_exists($name, $props)) == false (line 191)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == false (line 195)
    // if (($prop = \substr($name, 1)) && \array_key_exists($prop, $props)) == true (line 200)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == true (line 209)

    $actual = $this->requests_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 182)
    // if (\array_key_exists($name, $props)) == false (line 191)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == true (line 195)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == false (line 209)

    $actual = $this->requests_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get5()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 182)
    // if (\array_key_exists($name, $props)) == false (line 191)
    // if (($prop = 'i' . $name) && \array_key_exists($prop, $props)) == true (line 195)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == true (line 209)

    $actual = $this->requests_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get6()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 182)
    // if (\array_key_exists($name, $props)) == true (line 191)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == false (line 209)

    $actual = $this->requests_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get7()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == false (line 182)
    // if (\array_key_exists($name, $props)) == true (line 191)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == true (line 209)

    $actual = $this->requests_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get8()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == true (line 182)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == false (line 209)

    $actual = $this->requests_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get9()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'iri' || $name === 'uri' || $name === 'iauthority' || $name === 'authority') == true (line 182)
    // if ($return === \null && isset($this->normalization[$this->scheme][$name])) == true (line 209)

    $actual = $this->requests_IRI->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->requests_IRI->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'set_' . $name)) == false (line 233)

    $actual = $this->requests_IRI->__unset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\method_exists($this, 'set_' . $name)) == true (line 233)

    $actual = $this->requests_IRI->__unset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize0()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == false (line 274)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize1()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == false (line 303)
    // if ($base->iquery !== \null) == false (line 306)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize2()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == false (line 303)
    // if ($base->iquery !== \null) == true (line 306)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize3()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == true (line 303)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize4()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 289)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == false (line 292)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize5()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 289)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == true (line 292)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize6()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == true (line 289)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize7()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == true (line 286)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize8()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == true (line 275)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize9()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == true (line 270)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize10()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == false (line 274)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize11()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == false (line 303)
    // if ($base->iquery !== \null) == false (line 306)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize12()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == false (line 303)
    // if ($base->iquery !== \null) == true (line 306)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize13()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == true (line 303)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize14()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 289)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == false (line 292)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize15()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 289)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == true (line 292)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize16()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == true (line 289)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize17()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == true (line 286)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize18()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == true (line 275)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize19()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == true (line 270)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize20()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == true (line 263)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize21()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == false (line 257)
    // if (!$relative->is_valid()) == true (line 260)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize22()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == false (line 274)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize23()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == false (line 303)
    // if ($base->iquery !== \null) == false (line 306)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize24()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == false (line 303)
    // if ($base->iquery !== \null) == true (line 306)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize25()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == true (line 303)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize26()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 289)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == false (line 292)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize27()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 289)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == true (line 292)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize28()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == true (line 289)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize29()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == true (line 286)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize30()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == true (line 275)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize31()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == false (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == true (line 270)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize32()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == false (line 274)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize33()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == false (line 303)
    // if ($base->iquery !== \null) == false (line 306)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize34()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == false (line 303)
    // if ($base->iquery !== \null) == true (line 306)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize35()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == false (line 285)
    // if ($relative->iquery !== \null) == true (line 303)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize36()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 289)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == false (line 292)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize37()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == false (line 289)
    // if (($last_segment = \strrpos($base->ipath, '/')) !== \false) == true (line 292)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize38()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == false (line 286)
    // if (($base->iuserinfo !== \null || $base->ihost !== \null || $base->port !== \null) && $base->ipath === '') == true (line 289)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize39()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == false (line 275)
    // if ($relative->ipath !== '') == true (line 285)
    // if ($relative->ipath[0] === '/') == true (line 286)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize40()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == false (line 270)
    // if ($relative->get_iri() !== '') == true (line 274)
    // if ($relative->iuserinfo !== \null || $relative->ihost !== \null || $relative->port !== \null) == true (line 275)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize41()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == false (line 263)
    // if (!$base instanceof \Requests_IRI) == true (line 267)
    // if ($base->scheme === \null || !$base->is_valid()) == true (line 270)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize42()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == false (line 260)
    // if ($relative->scheme !== \null) == true (line 263)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbsolutize43()
{
    $base = m::mock('UntypedParameter_base_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$relative instanceof \Requests_IRI) == true (line 257)
    // if (!$relative->is_valid()) == true (line 260)

    $actual = $this->requests_IRI->absolutize($base, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_valid0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ipath !== '' && ($isauthority && $this->ipath[0] !== '/' || $this->scheme === \null && !$isauthority && \strpos($this->ipath, ':') !== \false && (\strpos($this->ipath, '/') === \false ? \true : \strpos($this->ipath, ':') < \strpos($this->ipath, '/')))) == false (line 689)

    $actual = $this->requests_IRI->is_valid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_valid1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ipath !== '' && ($isauthority && $this->ipath[0] !== '/' || $this->scheme === \null && !$isauthority && \strpos($this->ipath, ':') !== \false && (\strpos($this->ipath, '/') === \false ? \true : \strpos($this->ipath, ':') < \strpos($this->ipath, '/')))) == true (line 689)

    $actual = $this->requests_IRI->is_valid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
