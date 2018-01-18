<?php

namespace tests\Faker\ORM\Propel2;

use Faker\Generator;
use Faker\ORM\Propel2\Populator;
use Mockery as m;

class PopulatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\ORM\Propel2\Populator
*/
protected $populator;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->populator = new \Faker\ORM\Propel2\Populator($this->_generator);
}

public function testAddEntity0()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Propel2\EntityPopulator) == false (line 34)
    // if ($customColumnFormatters) == false (line 38)
    // if ($customModifiers) == false (line 42)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity1()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Propel2\EntityPopulator) == false (line 34)
    // if ($customColumnFormatters) == false (line 38)
    // if ($customModifiers) == true (line 42)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity2()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Propel2\EntityPopulator) == false (line 34)
    // if ($customColumnFormatters) == true (line 38)
    // if ($customModifiers) == false (line 42)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity3()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Propel2\EntityPopulator) == false (line 34)
    // if ($customColumnFormatters) == true (line 38)
    // if ($customModifiers) == true (line 42)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity4()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Propel2\EntityPopulator) == true (line 34)
    // if ($customColumnFormatters) == false (line 38)
    // if ($customModifiers) == false (line 42)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity5()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Propel2\EntityPopulator) == true (line 34)
    // if ($customColumnFormatters) == false (line 38)
    // if ($customModifiers) == true (line 42)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity6()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Propel2\EntityPopulator) == true (line 34)
    // if ($customColumnFormatters) == true (line 38)
    // if ($customModifiers) == false (line 42)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity7()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Propel2\EntityPopulator) == true (line 34)
    // if ($customColumnFormatters) == true (line 38)
    // if ($customModifiers) == true (line 42)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == false (line 59)
    // if ($isInstancePoolingEnabled) == false (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == false (line 59)
    // if ($isInstancePoolingEnabled) == true (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute2()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == false (line 59)
    // for (...) == false (line 67)
    // if ($isInstancePoolingEnabled) == false (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute3()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == false (line 59)
    // for (...) == false (line 67)
    // if ($isInstancePoolingEnabled) == true (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute4()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == false (line 59)
    // for (...) == true (line 67)
    // for (...) == false (line 67)
    // if ($isInstancePoolingEnabled) == false (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute5()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == false (line 59)
    // for (...) == true (line 67)
    // for (...) == false (line 67)
    // if ($isInstancePoolingEnabled) == true (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute6()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == true (line 59)
    // if ($isInstancePoolingEnabled) == false (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute7()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == true (line 59)
    // if ($isInstancePoolingEnabled) == true (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute8()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == true (line 59)
    // for (...) == false (line 67)
    // if ($isInstancePoolingEnabled) == false (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute9()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == true (line 59)
    // for (...) == false (line 67)
    // if ($isInstancePoolingEnabled) == true (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute10()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == true (line 59)
    // for (...) == true (line 67)
    // for (...) == false (line 67)
    // if ($isInstancePoolingEnabled) == false (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute11()
{
    $con = m::mock('UntypedParameter_con_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $con) == true (line 59)
    // for (...) == true (line 67)
    // for (...) == false (line 67)
    // if ($isInstancePoolingEnabled) == true (line 72)

    $actual = $this->populator->execute($con);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
