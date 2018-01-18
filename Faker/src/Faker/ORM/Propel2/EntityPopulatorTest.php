<?php

namespace tests\Faker\ORM\Propel2;

use Faker\ORM\Propel2\EntityPopulator;
use Mockery as m;

class EntityPopulatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var \Faker\ORM\Propel2\EntityPopulator
*/
protected $entityPopulator;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->entityPopulator = new \Faker\ORM\Propel2\EntityPopulator($this->_class);
}

public function testGetClass0()
{
    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->getClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetColumnFormatters0()
{
    $columnFormatters = m::mock('UntypedParameter_columnFormatters_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->setColumnFormatters($columnFormatters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetColumnFormatters0()
{
    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->getColumnFormatters();
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

public function testGuessColumnFormatters0()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters1()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isColumnBehavior($columnMap)) == false (line 67)
    // if ($columnMap->isForeignKey()) == false (line 70)
    // if ($columnMap->isPrimaryKey()) == false (line 78)
    // if ($formatter = $nameGuesser->guessFormat($columnMap->getPhpName(), $columnMap->getSize())) == false (line 81)
    // if ($formatter = $columnTypeGuesser->guessFormat($columnMap)) == false (line 85)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters2()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isColumnBehavior($columnMap)) == false (line 67)
    // if ($columnMap->isForeignKey()) == false (line 70)
    // if ($columnMap->isPrimaryKey()) == false (line 78)
    // if ($formatter = $nameGuesser->guessFormat($columnMap->getPhpName(), $columnMap->getSize())) == false (line 81)
    // if ($formatter = $columnTypeGuesser->guessFormat($columnMap)) == true (line 85)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters3()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isColumnBehavior($columnMap)) == false (line 67)
    // if ($columnMap->isForeignKey()) == false (line 70)
    // if ($columnMap->isPrimaryKey()) == false (line 78)
    // if ($formatter = $nameGuesser->guessFormat($columnMap->getPhpName(), $columnMap->getSize())) == true (line 81)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters4()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isColumnBehavior($columnMap)) == false (line 67)
    // if ($columnMap->isForeignKey()) == false (line 70)
    // if ($columnMap->isPrimaryKey()) == true (line 78)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters5()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isColumnBehavior($columnMap)) == false (line 67)
    // if ($columnMap->isForeignKey()) == true (line 70)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters6()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isColumnBehavior($columnMap)) == true (line 67)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetModifiers0()
{
    $modifiers = m::mock('UntypedParameter_modifiers_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->setModifiers($modifiers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetModifiers0()
{
    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->getModifiers();
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

public function testGuessModifiers0()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->guessModifiers($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessModifiers1()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 150)
    // Case 'nested_set' == false (line 151)
    // Case 'sortable' == false (line 162)

    $actual = $this->entityPopulator->guessModifiers($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessModifiers2()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 150)
    // Case 'nested_set' == false (line 151)
    // Case 'sortable' == true (line 162)

    $actual = $this->entityPopulator->guessModifiers($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessModifiers3()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 150)
    // Case 'nested_set' == true (line 151)

    $actual = $this->entityPopulator->guessModifiers($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    $con = m::mock('UntypedParameter_con_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->execute($con, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    $con = m::mock('UntypedParameter_con_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->execute($con, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute2()
{
    $con = m::mock('UntypedParameter_con_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $format) == false (line 181)

    $actual = $this->entityPopulator->execute($con, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute3()
{
    $con = m::mock('UntypedParameter_con_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $format) == false (line 181)

    $actual = $this->entityPopulator->execute($con, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute4()
{
    $con = m::mock('UntypedParameter_con_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $format) == true (line 181)

    $actual = $this->entityPopulator->execute($con, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute5()
{
    $con = m::mock('UntypedParameter_con_');
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $format) == true (line 181)

    $actual = $this->entityPopulator->execute($con, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
