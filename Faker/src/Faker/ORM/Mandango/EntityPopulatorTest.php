<?php

namespace tests\Faker\ORM\Mandango;

use Faker\ORM\Mandango\EntityPopulator;
use Mockery as m;

class EntityPopulatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var \Faker\ORM\Mandango\EntityPopulator
*/
protected $entityPopulator;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->entityPopulator = new \Faker\ORM\Mandango\EntityPopulator($this->_class);
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
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters1()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($reference['class'])) == false (line 79)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters2()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($reference['class'])) == true (line 79)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters3()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 67)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == false (line 71)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters4()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 67)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == false (line 71)
    // if (!isset($reference['class'])) == false (line 79)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters5()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 67)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == false (line 71)
    // if (!isset($reference['class'])) == true (line 79)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters6()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 67)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == true (line 71)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters7()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 67)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == true (line 71)
    // if (!isset($reference['class'])) == false (line 79)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters8()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 67)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == true (line 71)
    // if (!isset($reference['class'])) == true (line 79)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters9()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == true (line 67)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters10()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == true (line 67)
    // if (!isset($reference['class'])) == false (line 79)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters11()
{
    $generator = m::mock(\Faker\Generator::class);
    $mandango = m::mock(\Mandango\Mandango::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == true (line 67)
    // if (!isset($reference['class'])) == true (line 79)

    $actual = $this->entityPopulator->guessColumnFormatters($generator, $mandango);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    $mandango = m::mock(\Mandango\Mandango::class);
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->execute($mandango, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    $mandango = m::mock(\Mandango\Mandango::class);
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $format) == false (line 104)

    $actual = $this->entityPopulator->execute($mandango, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute2()
{
    $mandango = m::mock(\Mandango\Mandango::class);
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $format) == true (line 104)
    // if (isset($metadata['fields'][$column]) || isset($metadata['referencesOne'][$column])) == false (line 107)
    // if (isset($metadata['referencesMany'][$column])) == false (line 112)

    $actual = $this->entityPopulator->execute($mandango, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute3()
{
    $mandango = m::mock(\Mandango\Mandango::class);
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $format) == true (line 104)
    // if (isset($metadata['fields'][$column]) || isset($metadata['referencesOne'][$column])) == false (line 107)
    // if (isset($metadata['referencesMany'][$column])) == true (line 112)

    $actual = $this->entityPopulator->execute($mandango, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute4()
{
    $mandango = m::mock(\Mandango\Mandango::class);
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $format) == true (line 104)
    // if (isset($metadata['fields'][$column]) || isset($metadata['referencesOne'][$column])) == true (line 107)
    // if (isset($metadata['referencesMany'][$column])) == false (line 112)

    $actual = $this->entityPopulator->execute($mandango, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute5()
{
    $mandango = m::mock(\Mandango\Mandango::class);
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $format) == true (line 104)
    // if (isset($metadata['fields'][$column]) || isset($metadata['referencesOne'][$column])) == true (line 107)
    // if (isset($metadata['referencesMany'][$column])) == true (line 112)

    $actual = $this->entityPopulator->execute($mandango, $insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
