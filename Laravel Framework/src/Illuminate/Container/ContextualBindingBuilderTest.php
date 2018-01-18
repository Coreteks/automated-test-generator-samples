<?php

namespace tests\Illuminate\Container;

use Illuminate\Container\Container;
use Illuminate\Container\ContextualBindingBuilder;
use Mockery as m;

class ContextualBindingBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var mixed
*/
protected $_concrete = null;
/**
* @var \Illuminate\Container\ContextualBindingBuilder
*/
protected $contextualBindingBuilder;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Container\Container::class);
    $this->_concrete = null;
    $this->contextualBindingBuilder = new \Illuminate\Container\ContextualBindingBuilder($this->_container, $this->_concrete);
}

public function testNeeds0()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    $actual = $this->contextualBindingBuilder->needs($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGive0()
{
    $implementation = m::mock('UntypedParameter_implementation_');

    // TODO: Your mock expectations here

    $actual = $this->contextualBindingBuilder->give($implementation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
