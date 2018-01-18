<?php

namespace tests\Faker\ORM\Spot;

use Faker\ORM\Spot\EntityPopulator;
use Mockery as m;
use Spot\Locator;
use Spot\Mapper;

class EntityPopulatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_mapper;
/**
* @var \Mockery\MockInterface
*/
protected $_locator;
/**
* @var mixed
*/
protected $_useExistingData = null;
/**
* @var \Faker\ORM\Spot\EntityPopulator
*/
protected $entityPopulator;

public function setUp()
{
    parent::setUp();

    $this->_mapper = m::mock(\Spot\Mapper::class);
    $this->_locator = m::mock(\Spot\Locator::class);
    $this->_useExistingData = null;
    $this->entityPopulator = new \Faker\ORM\Spot\EntityPopulator($this->_mapper, $this->_locator, $this->_useExistingData);
}

public function testGetMapper0()
{
    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->getMapper();
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

public function testSetModifiers0()
{
    $modifiers = [];

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
    $modifiers = [];

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->mergeModifiersWith($modifiers);
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
    // if ($relation instanceof \Spot\Relation\BelongsTo) == false (line 143)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters2()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($relation instanceof \Spot\Relation\BelongsTo) == true (line 143)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters3()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == false (line 126)
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 129)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == false (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters4()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == false (line 126)
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 129)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == false (line 133)
    // if ($relation instanceof \Spot\Relation\BelongsTo) == false (line 143)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters5()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == false (line 126)
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 129)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == false (line 133)
    // if ($relation instanceof \Spot\Relation\BelongsTo) == true (line 143)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters6()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == false (line 126)
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 129)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == true (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters7()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == false (line 126)
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 129)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == true (line 133)
    // if ($relation instanceof \Spot\Relation\BelongsTo) == false (line 143)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters8()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == false (line 126)
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == false (line 129)
    // if ($formatter = $columnTypeGuesser->guessFormat($field)) == true (line 133)
    // if ($relation instanceof \Spot\Relation\BelongsTo) == true (line 143)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters9()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == false (line 126)
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == true (line 129)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters10()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == false (line 126)
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == true (line 129)
    // if ($relation instanceof \Spot\Relation\BelongsTo) == false (line 143)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters11()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == false (line 126)
    // if ($formatter = $nameGuesser->guessFormat($fieldName)) == true (line 129)
    // if ($relation instanceof \Spot\Relation\BelongsTo) == true (line 143)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters12()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == true (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters13()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == true (line 126)
    // if ($relation instanceof \Spot\Relation\BelongsTo) == false (line 143)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters14()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($field['primary'] === true) == true (line 126)
    // if ($relation instanceof \Spot\Relation\BelongsTo) == true (line 143)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');

    // TODO: Your mock expectations here

    $actual = $this->entityPopulator->execute($insertedEntities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
