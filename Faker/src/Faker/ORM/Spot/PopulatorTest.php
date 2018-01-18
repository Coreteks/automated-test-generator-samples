<?php

namespace tests\Faker\ORM\Spot;

use Faker\Generator;
use Faker\ORM\Spot\Populator;
use Mockery as m;
use Spot\Locator;

class PopulatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Mockery\MockInterface
*/
protected $_locator;
/**
* @var \Faker\ORM\Spot\Populator
*/
protected $populator;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->_locator = m::mock(\Spot\Locator::class);
    $this->populator = new \Faker\ORM\Spot\Populator($this->_generator, $this->_locator);
}

public function testAddEntity0()
{
    $entityName = m::mock('UntypedParameter_entityName_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');
    $useExistingData = m::mock('UntypedParameter_useExistingData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $mapper) == false (line 46)
    // if ($customColumnFormatters) == false (line 52)

    $actual = $this->populator->addEntity($entityName, $number, $customColumnFormatters, $customModifiers, $useExistingData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity1()
{
    $entityName = m::mock('UntypedParameter_entityName_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');
    $useExistingData = m::mock('UntypedParameter_useExistingData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $mapper) == false (line 46)
    // if ($customColumnFormatters) == true (line 52)

    $actual = $this->populator->addEntity($entityName, $number, $customColumnFormatters, $customModifiers, $useExistingData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testAddEntity2()
{
    $entityName = m::mock('UntypedParameter_entityName_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');
    $useExistingData = m::mock('UntypedParameter_useExistingData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $mapper) == true (line 46)
    // throw new \InvalidArgumentException("No mapper can be found for entity " . $entityName) -> exception (line 47)

    $actual = $this->populator->addEntity($entityName, $number, $customColumnFormatters, $customModifiers, $useExistingData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    $locator = m::mock('UntypedParameter_locator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $locator) == false (line 70)
    // if (null === $locator) == false (line 73)

    $actual = $this->populator->execute($locator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    $locator = m::mock('UntypedParameter_locator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $locator) == false (line 70)
    // if (null === $locator) == false (line 73)
    // for (...) == false (line 79)

    $actual = $this->populator->execute($locator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute2()
{
    $locator = m::mock('UntypedParameter_locator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $locator) == false (line 70)
    // if (null === $locator) == false (line 73)
    // for (...) == true (line 79)
    // for (...) == false (line 79)

    $actual = $this->populator->execute($locator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testExecute3()
{
    $locator = m::mock('UntypedParameter_locator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $locator) == false (line 70)
    // if (null === $locator) == true (line 73)
    // throw new \InvalidArgumentException("No entity manager passed to Spot Populator.") -> exception (line 74)

    $actual = $this->populator->execute($locator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute4()
{
    $locator = m::mock('UntypedParameter_locator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $locator) == true (line 70)
    // if (null === $locator) == false (line 73)

    $actual = $this->populator->execute($locator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute5()
{
    $locator = m::mock('UntypedParameter_locator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $locator) == true (line 70)
    // if (null === $locator) == false (line 73)
    // for (...) == false (line 79)

    $actual = $this->populator->execute($locator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute6()
{
    $locator = m::mock('UntypedParameter_locator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $locator) == true (line 70)
    // if (null === $locator) == false (line 73)
    // for (...) == true (line 79)
    // for (...) == false (line 79)

    $actual = $this->populator->execute($locator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testExecute7()
{
    $locator = m::mock('UntypedParameter_locator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $locator) == true (line 70)
    // if (null === $locator) == true (line 73)
    // throw new \InvalidArgumentException("No entity manager passed to Spot Populator.") -> exception (line 74)

    $actual = $this->populator->execute($locator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
