<?php

namespace tests\Faker\ORM\Doctrine;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Faker\ORM\Doctrine\EntityPopulator;
use Mockery as m;

class EntityPopulatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_class;
/**
* @var \Faker\ORM\Doctrine\EntityPopulator
*/
protected $entityPopulator;

public function setUp()
{
    parent::setUp();

    $this->_class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);
    $this->entityPopulator = new \Faker\ORM\Doctrine\EntityPopulator($this->_class);
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
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == false (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters2()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters3()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == false (line 136)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters4()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == true (line 136)
    // if ($mapping['type'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE && $mapping['association'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE) == false (line 137)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters5()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == true (line 136)
    // if ($mapping['type'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE && $mapping['association'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE) == true (line 137)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters6()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters7()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == false (line 125)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters8()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == true (line 125)
    // if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE) == false (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters9()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == true (line 125)
    // if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE) == true (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters10()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isCollectionValuedAssociation($assocName)) == true (line 115)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters11()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters12()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == false (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters13()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters14()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == false (line 136)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters15()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == true (line 136)
    // if ($mapping['type'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE && $mapping['association'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE) == false (line 137)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters16()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == true (line 136)
    // if ($mapping['type'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE && $mapping['association'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE) == true (line 137)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters17()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters18()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == false (line 125)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters19()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == true (line 125)
    // if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE) == false (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters20()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == true (line 125)
    // if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE) == true (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters21()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == false (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == true (line 115)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters22()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters23()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == false (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters24()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters25()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == false (line 136)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters26()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == true (line 136)
    // if ($mapping['type'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE && $mapping['association'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE) == false (line 137)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters27()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == true (line 136)
    // if ($mapping['type'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE && $mapping['association'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE) == true (line 137)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters28()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters29()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == false (line 125)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters30()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == true (line 125)
    // if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE) == false (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters31()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == true (line 125)
    // if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE) == true (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters32()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == false (line 104)
    // if ($formatter = $columnTypeGuesser->guessFormat($fieldName, $this->class)) == true (line 108)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == true (line 115)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters33()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters34()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == false (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters35()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters36()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == false (line 136)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters37()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == true (line 136)
    // if ($mapping['type'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE && $mapping['association'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE) == false (line 137)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters38()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == true (line 136)
    // if ($mapping['type'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE && $mapping['association'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE) == true (line 137)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters39()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters40()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == false (line 125)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters41()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == true (line 125)
    // if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE) == false (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters42()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == true (line 125)
    // if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE) == true (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters43()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == false (line 99)
    // if ($formatter = $nameGuesser->guessFormat($fieldName, $size)) == true (line 104)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == true (line 115)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters44()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters45()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == false (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters46()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters47()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == false (line 136)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters48()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == true (line 136)
    // if ($mapping['type'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE && $mapping['association'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE) == false (line 137)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters49()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == false (line 122)
    // if ($this->class instanceof \Doctrine\ODM\MongoDB\Mapping\ClassMetadata) == true (line 133)
    // if ($mapping['targetDocument'] == $relatedClass) == true (line 136)
    // if ($mapping['type'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::ONE && $mapping['association'] == \Doctrine\ODM\MongoDB\Mapping\ClassMetadata::REFERENCE_ONE) == true (line 137)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters50()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters51()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == false (line 125)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters52()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == true (line 125)
    // if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE) == false (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters53()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == false (line 115)
    // if ($this->class instanceof \Doctrine\ORM\Mapping\ClassMetadata) == true (line 122)
    // if ($mapping['targetEntity'] == $relatedClass) == true (line 125)
    // if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadata::ONE_TO_ONE) == true (line 126)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessColumnFormatters54()
{
    $generator = m::mock(\Faker\Generator::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->class->isIdentifier($fieldName) || !$this->class->hasField($fieldName)) == true (line 99)
    // if ($this->class->isCollectionValuedAssociation($assocName)) == true (line 115)

    $actual = $this->entityPopulator->guessColumnFormatters($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    $manager = m::mock(\Doctrine\Common\Persistence\ObjectManager::class);
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $generateId = m::mock('UntypedParameter_generateId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($generateId) == false (line 184)

    $actual = $this->entityPopulator->execute($manager, $insertedEntities, $generateId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    $manager = m::mock(\Doctrine\Common\Persistence\ObjectManager::class);
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $generateId = m::mock('UntypedParameter_generateId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($generateId) == true (line 184)

    $actual = $this->entityPopulator->execute($manager, $insertedEntities, $generateId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute2()
{
    $manager = m::mock(\Doctrine\Common\Persistence\ObjectManager::class);
    $insertedEntities = m::mock('UntypedParameter_insertedEntities_');
    $generateId = m::mock('UntypedParameter_generateId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($generateId) == true (line 184)

    $actual = $this->entityPopulator->execute($manager, $insertedEntities, $generateId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
