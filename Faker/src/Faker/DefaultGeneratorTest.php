<?php

namespace tests\Faker;

use Faker\DefaultGenerator;
use Mockery as m;

class DefaultGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_default = null;
/**
* @var \Faker\DefaultGenerator
*/
protected $defaultGenerator;

public function setUp()
{
    parent::setUp();

    $this->_default = null;
    $this->defaultGenerator = new \Faker\DefaultGenerator($this->_default);
}

public function test__get0()
{
    $attribute = m::mock('UntypedParameter_attribute_');

    // TODO: Your mock expectations here

    $actual = $this->defaultGenerator->__get($attribute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    $actual = $this->defaultGenerator->__call($method, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
