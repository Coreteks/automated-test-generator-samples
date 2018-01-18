<?php

namespace tests\Faker\ORM\CakePHP;

use Faker\ORM\CakePHP\EntityPopulator;
use Mockery as m;

class EntityPopulatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var \Faker\ORM\CakePHP\EntityPopulator
*/
protected $entityPopulator;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->entityPopulator = new \Faker\ORM\CakePHP\EntityPopulator($this->_class);
}

public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMergeColumnFormattersWith0()
{
    $columnFormatters = m::mock('UntypedParameter_columnFormatters_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->mergeColumnFormattersWith($columnFormatters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMergeModifiersWith0()
{
    $modifiers = m::mock('UntypedParameter_modifiers_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->mergeModifiersWith($modifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters0()
{
    $populator = m::mock('UntypedParameter_populator_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->guessColumnFormatters($populator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters1()
{
    $populator = m::mock('UntypedParameter_populator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column == $pk[0] || $isForeignKey($column)) == false (line 67)

    $actual = $this->entityPopulator->guessColumnFormatters($populator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters2()
{
    $populator = m::mock('UntypedParameter_populator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column == $pk[0] || $isForeignKey($column)) == false (line 67)
    // if ($formatter = $guesser->guessFormat($column, $table)) == false (line 72)

    $actual = $this->entityPopulator->guessColumnFormatters($populator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters3()
{
    $populator = m::mock('UntypedParameter_populator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column == $pk[0] || $isForeignKey($column)) == false (line 67)
    // if ($formatter = $guesser->guessFormat($column, $table)) == true (line 72)

    $actual = $this->entityPopulator->guessColumnFormatters($populator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters4()
{
    $populator = m::mock('UntypedParameter_populator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column == $pk[0] || $isForeignKey($column)) == true (line 67)

    $actual = $this->entityPopulator->guessColumnFormatters($populator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessModifiers0()
{
    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->guessModifiers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessModifiers1()
{
    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->guessModifiers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == false (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == true (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testExecute2()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($entity = $table->save($entity, $options))) == true (line 141)
    // throw new \RuntimeException("Failed saving {$class} record") -> exception (line 142)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute3()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == false (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute4()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == true (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testExecute5()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($entity = $table->save($entity, $options))) == true (line 141)
    // throw new \RuntimeException("Failed saving {$class} record") -> exception (line 142)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute6()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == false (line 132)
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == false (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute7()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == false (line 132)
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == true (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testExecute8()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == false (line 132)
    // if (!($entity = $table->save($entity, $options))) == true (line 141)
    // throw new \RuntimeException("Failed saving {$class} record") -> exception (line 142)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute9()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == false (line 132)
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == false (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute10()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == false (line 132)
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == true (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testExecute11()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == false (line 132)
    // if (!($entity = $table->save($entity, $options))) == true (line 141)
    // throw new \RuntimeException("Failed saving {$class} record") -> exception (line 142)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute12()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == true (line 132)
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == false (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute13()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == true (line 132)
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == true (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testExecute14()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == true (line 132)
    // if (!($entity = $table->save($entity, $options))) == true (line 141)
    // throw new \RuntimeException("Failed saving {$class} record") -> exception (line 142)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute15()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == true (line 132)
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == false (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute16()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == true (line 132)
    // if (!($entity = $table->save($entity, $options))) == false (line 141)
    // if (is_string($pk)) == true (line 146)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testExecute17()
{
    $class = m::mock('UntypedParameter_class_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($format)) == true (line 132)
    // if (!($entity = $table->save($entity, $options))) == true (line 141)
    // throw new \RuntimeException("Failed saving {$class} record") -> exception (line 142)

    $actual = $this->entityPopulator->execute($class, $insertedEntities, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->setConnection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
