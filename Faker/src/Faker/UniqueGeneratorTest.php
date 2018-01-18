<?php

namespace tests\Faker;

use Faker\Generator;
use Faker\UniqueGenerator;
use Mockery as m;

class UniqueGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var mixed
*/
protected $_maxRetries = null;
/**
* @var \Faker\UniqueGenerator
*/
protected $uniqueGenerator;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->_maxRetries = null;
    $this->uniqueGenerator = new \Faker\UniqueGenerator($this->_generator, $this->_maxRetries);
}

public function test__get0()
{
    $attribute = m::mock('UntypedParameter_attribute_');

    // TODO: Your mock expectations here

    $actual = $this->uniqueGenerator->__get($attribute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->uniques[$name])) == false (line 43)
    // if ($i > $this->maxRetries) == false (line 50)
    // PhpParser\Node\Stmt\Do_ == false (line 47)

    $actual = $this->uniqueGenerator->__call($name, $arguments);
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
    // if (!isset($this->uniques[$name])) == false (line 43)
    // if ($i > $this->maxRetries) == true (line 50)
    // throw new \OverflowException(sprintf('Maximum retries of %d reached without finding a unique value', $this->maxRetries)) -> exception (line 51)

    $actual = $this->uniqueGenerator->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call2()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->uniques[$name])) == true (line 43)
    // if ($i > $this->maxRetries) == false (line 50)
    // PhpParser\Node\Stmt\Do_ == false (line 47)

    $actual = $this->uniqueGenerator->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \OverflowException
 */
public function test__call3()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->uniques[$name])) == true (line 43)
    // if ($i > $this->maxRetries) == true (line 50)
    // throw new \OverflowException(sprintf('Maximum retries of %d reached without finding a unique value', $this->maxRetries)) -> exception (line 51)

    $actual = $this->uniqueGenerator->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
