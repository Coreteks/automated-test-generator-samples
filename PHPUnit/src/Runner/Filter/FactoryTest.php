<?php

namespace tests\PHPUnit\Runner\Filter;

use Mockery as m;
use PHPUnit\Runner\Filter\Factory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Runner\Filter\Factory
*/
protected $factory;

public function setUp()
{
    parent::setUp();

    $this->factory = new \PHPUnit\Runner\Filter\Factory();
}

public function testAddFilter0()
{
    $filter = m::mock(\ReflectionClass::class);
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$filter->isSubclassOf(\RecursiveFilterIterator::class)) == false (line 33)

    $actual = $this->factory->addFilter($filter, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testAddFilter1()
{
    $filter = m::mock(\ReflectionClass::class);
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$filter->isSubclassOf(\RecursiveFilterIterator::class)) == true (line 33)
    // throw new \InvalidArgumentException(\sprintf('Class "%s" does not extend RecursiveFilterIterator', $filter->name)) -> exception (line 34)

    $actual = $this->factory->addFilter($filter, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFactory0()
{
    $iterator = m::mock(\Iterator::class);
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    $actual = $this->factory->factory($iterator, $suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFactory1()
{
    $iterator = m::mock(\Iterator::class);
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    $actual = $this->factory->factory($iterator, $suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
