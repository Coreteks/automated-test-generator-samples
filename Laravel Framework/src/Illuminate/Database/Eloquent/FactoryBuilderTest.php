<?php

namespace tests\Illuminate\Database\Eloquent;

use Faker\Generator;
use Illuminate\Database\Eloquent\FactoryBuilder;
use Mockery as m;

class FactoryBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var array
*/
protected $_definitions = [];
/**
* @var array
*/
protected $_states = [];
/**
* @var \Mockery\MockInterface
*/
protected $_faker;
/**
* @var \Illuminate\Database\Eloquent\FactoryBuilder
*/
protected $factoryBuilder;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->_name = null;
    $this->_definitions = [];
    $this->_states = [];
    $this->_faker = m::mock(\Faker\Generator::class);
    $this->factoryBuilder = new \Illuminate\Database\Eloquent\FactoryBuilder($this->_class, $this->_name, $this->_definitions, $this->_states, $this->_faker);
}

public function testTimes0()
{
    $amount = m::mock('UntypedParameter_amount_');

    // TODO: Your mock expectations here

    $actual = $this->factoryBuilder->times($amount);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStates0()
{
    $states = m::mock('UntypedParameter_states_');

    // TODO: Your mock expectations here

    $actual = $this->factoryBuilder->states($states);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->factoryBuilder->connection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLazy0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->factoryBuilder->lazy($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($results instanceof \Illuminate\Database\Eloquent\Model) == false (line 150)

    $actual = $this->factoryBuilder->create($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate1()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($results instanceof \Illuminate\Database\Eloquent\Model) == true (line 150)

    $actual = $this->factoryBuilder->create($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->amount === null) == false (line 184)
    // if ($this->amount < 1) == false (line 188)

    $actual = $this->factoryBuilder->make($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake1()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->amount === null) == false (line 184)
    // if ($this->amount < 1) == true (line 188)

    $actual = $this->factoryBuilder->make($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake2()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->amount === null) == true (line 184)

    $actual = $this->factoryBuilder->make($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRaw0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->amount === null) == false (line 205)
    // if ($this->amount < 1) == false (line 209)

    $actual = $this->factoryBuilder->raw($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRaw1()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->amount === null) == false (line 205)
    // if ($this->amount < 1) == true (line 209)

    $actual = $this->factoryBuilder->raw($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRaw2()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->amount === null) == true (line 205)

    $actual = $this->factoryBuilder->raw($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
