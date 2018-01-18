<?php

namespace tests\Faker;

use Faker\Generator;
use Faker\ValidGenerator;
use Mockery as m;

class ValidGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var mixed
*/
protected $_validator = null;
/**
* @var mixed
*/
protected $_maxRetries = null;
/**
* @var \Faker\ValidGenerator
*/
protected $validGenerator;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->_validator = null;
    $this->_maxRetries = null;
    $this->validGenerator = new \Faker\ValidGenerator($this->_generator, $this->_validator, $this->_maxRetries);
}

public function test__get0()
{
    $attribute = m::mock('UntypedParameter_attribute_');

    // TODO: Your mock expectations here

    $actual = $this->validGenerator->__get($attribute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i > $this->maxRetries) == false (line 58)
    // PhpParser\Node\Stmt\Do_ == false (line 55)

    $actual = $this->validGenerator->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \OverflowException
 */
public function test__call1()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i > $this->maxRetries) == true (line 58)
    // throw new \OverflowException(sprintf('Maximum retries of %d reached without finding a valid value', $this->maxRetries)) -> exception (line 59)

    $actual = $this->validGenerator->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
