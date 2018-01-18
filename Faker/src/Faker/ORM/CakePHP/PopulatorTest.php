<?php

namespace tests\Faker\ORM\CakePHP;

use Faker\Generator;
use Faker\ORM\CakePHP\Populator;
use Mockery as m;

class PopulatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\ORM\CakePHP\Populator
*/
protected $populator;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->populator = new \Faker\ORM\CakePHP\Populator($this->_generator);
}

public function testGetGenerator0()
{
    // TODO: Your mock expectations here

    $actual = $this->populator->getGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGuessers0()
{
    // TODO: Your mock expectations here

    $actual = $this->populator->getGuessers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveGuesser0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->guessers[$name]) == false (line 42)

    $actual = $this->populator->removeGuesser($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveGuesser1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->guessers[$name]) == true (line 42)

    $actual = $this->populator->removeGuesser($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddGuesser0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($class)) == false (line 54)
    // if (!method_exists($class, 'guessFormat')) == false (line 58)

    $actual = $this->populator->addGuesser($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testAddGuesser1()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($class)) == false (line 54)
    // if (!method_exists($class, 'guessFormat')) == true (line 58)
    // throw new \Exception('Missing required custom guesser method: ' . get_class($class) . '::guessFormat()') -> exception (line 59)

    $actual = $this->populator->addGuesser($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddGuesser2()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($class)) == true (line 54)
    // if (!method_exists($class, 'guessFormat')) == false (line 58)

    $actual = $this->populator->addGuesser($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testAddGuesser3()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($class)) == true (line 54)
    // if (!method_exists($class, 'guessFormat')) == true (line 58)
    // throw new \Exception('Missing required custom guesser method: ' . get_class($class) . '::guessFormat()') -> exception (line 59)

    $actual = $this->populator->addGuesser($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity0()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');
    $customModifiers = m::mock('UntypedParameter_customModifiers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\CakePHP\EntityPopulator) == false (line 73)
    // if ($customColumnFormatters) == false (line 78)
    // if ($customModifiers) == false (line 83)

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
    // if (!$entity instanceof \Faker\ORM\CakePHP\EntityPopulator) == false (line 73)
    // if ($customColumnFormatters) == false (line 78)
    // if ($customModifiers) == true (line 83)

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
    // if (!$entity instanceof \Faker\ORM\CakePHP\EntityPopulator) == false (line 73)
    // if ($customColumnFormatters) == true (line 78)
    // if ($customModifiers) == false (line 83)

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
    // if (!$entity instanceof \Faker\ORM\CakePHP\EntityPopulator) == false (line 73)
    // if ($customColumnFormatters) == true (line 78)
    // if ($customModifiers) == true (line 83)

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
    // if (!$entity instanceof \Faker\ORM\CakePHP\EntityPopulator) == true (line 73)
    // if ($customColumnFormatters) == false (line 78)
    // if ($customModifiers) == false (line 83)

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
    // if (!$entity instanceof \Faker\ORM\CakePHP\EntityPopulator) == true (line 73)
    // if ($customColumnFormatters) == false (line 78)
    // if ($customModifiers) == true (line 83)

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
    // if (!$entity instanceof \Faker\ORM\CakePHP\EntityPopulator) == true (line 73)
    // if ($customColumnFormatters) == true (line 78)
    // if ($customModifiers) == false (line 83)

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
    // if (!$entity instanceof \Faker\ORM\CakePHP\EntityPopulator) == true (line 73)
    // if ($customColumnFormatters) == true (line 78)
    // if ($customModifiers) == true (line 83)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters, $customModifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->populator->execute($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 102)

    $actual = $this->populator->execute($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute2()
{
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 102)
    // for (...) == false (line 102)

    $actual = $this->populator->execute($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
