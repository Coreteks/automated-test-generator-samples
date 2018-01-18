<?php

namespace tests\Faker\ORM\Doctrine;

use Doctrine\Common\Persistence\ObjectManager;
use Faker\Generator;
use Faker\ORM\Doctrine\Populator;
use Mockery as m;

class PopulatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Mockery\MockInterface
*/
protected $_manager;
/**
* @var \Faker\ORM\Doctrine\Populator
*/
protected $populator;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->_manager = m::mock(\Doctrine\Common\Persistence\ObjectManager::class);
    $this->populator = new \Faker\ORM\Doctrine\Populator($this->_generator, $this->_manager);
}

public function testAddEntity0()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');
    $generateId = m::mock('UntypedParameter_generateId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Doctrine\EntityPopulator) == false (line 37)
    // if ($customColumnFormatters) == false (line 44)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers, $generateId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity1()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');
    $generateId = m::mock('UntypedParameter_generateId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Doctrine\EntityPopulator) == false (line 37)
    // if ($customColumnFormatters) == true (line 44)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers, $generateId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity2()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');
    $generateId = m::mock('UntypedParameter_generateId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Doctrine\EntityPopulator) == true (line 37)
    // if (null === $this->manager) == false (line 38)
    // if ($customColumnFormatters) == false (line 44)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers, $generateId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity3()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');
    $generateId = m::mock('UntypedParameter_generateId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Doctrine\EntityPopulator) == true (line 37)
    // if (null === $this->manager) == false (line 38)
    // if ($customColumnFormatters) == true (line 44)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers, $generateId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testAddEntity4()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');
    $generateId = m::mock('UntypedParameter_generateId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Doctrine\EntityPopulator) == true (line 37)
    // if (null === $this->manager) == true (line 38)
    // throw new \InvalidArgumentException("No entity manager passed to Doctrine Populator.") -> exception (line 39)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers, $generateId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    $entityManager = m::mock('UntypedParameter_entityManager_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $entityManager) == false (line 64)
    // if (null === $entityManager) == false (line 67)

    $actual = $this->populator->execute($entityManager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    $entityManager = m::mock('UntypedParameter_entityManager_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $entityManager) == false (line 64)
    // if (null === $entityManager) == false (line 67)
    // for (...) == false (line 74)

    $actual = $this->populator->execute($entityManager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute2()
{
    $entityManager = m::mock('UntypedParameter_entityManager_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $entityManager) == false (line 64)
    // if (null === $entityManager) == false (line 67)
    // for (...) == true (line 74)
    // for (...) == false (line 74)

    $actual = $this->populator->execute($entityManager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testExecute3()
{
    $entityManager = m::mock('UntypedParameter_entityManager_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $entityManager) == false (line 64)
    // if (null === $entityManager) == true (line 67)
    // throw new \InvalidArgumentException("No entity manager passed to Doctrine Populator.") -> exception (line 68)

    $actual = $this->populator->execute($entityManager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute4()
{
    $entityManager = m::mock('UntypedParameter_entityManager_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $entityManager) == true (line 64)
    // if (null === $entityManager) == false (line 67)

    $actual = $this->populator->execute($entityManager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute5()
{
    $entityManager = m::mock('UntypedParameter_entityManager_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $entityManager) == true (line 64)
    // if (null === $entityManager) == false (line 67)
    // for (...) == false (line 74)

    $actual = $this->populator->execute($entityManager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute6()
{
    $entityManager = m::mock('UntypedParameter_entityManager_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $entityManager) == true (line 64)
    // if (null === $entityManager) == false (line 67)
    // for (...) == true (line 74)
    // for (...) == false (line 74)

    $actual = $this->populator->execute($entityManager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testExecute7()
{
    $entityManager = m::mock('UntypedParameter_entityManager_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $entityManager) == true (line 64)
    // if (null === $entityManager) == true (line 67)
    // throw new \InvalidArgumentException("No entity manager passed to Doctrine Populator.") -> exception (line 68)

    $actual = $this->populator->execute($entityManager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
