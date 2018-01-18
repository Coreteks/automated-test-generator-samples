<?php

namespace tests\Symfony\Bridge\Doctrine\Form;

use Doctrine\Common\Persistence\ManagerRegistry;
use Mockery as m;
use Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser;

class DoctrineOrmTypeGuesserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_registry;
/**
* @var \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
*/
protected $doctrineOrmTypeGuesser;

public function setUp()
{
    parent::setUp();

    $this->_registry = m::mock(\Doctrine\Common\Persistence\ManagerRegistry::class);
    $this->doctrineOrmTypeGuesser = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->_registry);
}

public function testGuessType0()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == false (line 63)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 65)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 67)
    // Case \Doctrine\DBAL\Types\Type::DECIMAL == false (line 69)
    // Case \Doctrine\DBAL\Types\Type::FLOAT == false (line 70)
    // Case \Doctrine\DBAL\Types\Type::INTEGER == false (line 72)
    // Case \Doctrine\DBAL\Types\Type::BIGINT == false (line 73)
    // Case \Doctrine\DBAL\Types\Type::SMALLINT == false (line 74)
    // Case \Doctrine\DBAL\Types\Type::STRING == false (line 76)
    // Case \Doctrine\DBAL\Types\Type::TEXT == false (line 78)
    // Default (line 80)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType1()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == false (line 63)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 65)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 67)
    // Case \Doctrine\DBAL\Types\Type::DECIMAL == false (line 69)
    // Case \Doctrine\DBAL\Types\Type::FLOAT == false (line 70)
    // Case \Doctrine\DBAL\Types\Type::INTEGER == false (line 72)
    // Case \Doctrine\DBAL\Types\Type::BIGINT == false (line 73)
    // Case \Doctrine\DBAL\Types\Type::SMALLINT == false (line 74)
    // Case \Doctrine\DBAL\Types\Type::STRING == false (line 76)
    // Case \Doctrine\DBAL\Types\Type::TEXT == true (line 78)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType2()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == false (line 63)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 65)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 67)
    // Case \Doctrine\DBAL\Types\Type::DECIMAL == false (line 69)
    // Case \Doctrine\DBAL\Types\Type::FLOAT == false (line 70)
    // Case \Doctrine\DBAL\Types\Type::INTEGER == false (line 72)
    // Case \Doctrine\DBAL\Types\Type::BIGINT == false (line 73)
    // Case \Doctrine\DBAL\Types\Type::SMALLINT == false (line 74)
    // Case \Doctrine\DBAL\Types\Type::STRING == true (line 76)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType3()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == false (line 63)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 65)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 67)
    // Case \Doctrine\DBAL\Types\Type::DECIMAL == false (line 69)
    // Case \Doctrine\DBAL\Types\Type::FLOAT == false (line 70)
    // Case \Doctrine\DBAL\Types\Type::INTEGER == false (line 72)
    // Case \Doctrine\DBAL\Types\Type::BIGINT == false (line 73)
    // Case \Doctrine\DBAL\Types\Type::SMALLINT == true (line 74)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType4()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == false (line 63)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 65)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 67)
    // Case \Doctrine\DBAL\Types\Type::DECIMAL == false (line 69)
    // Case \Doctrine\DBAL\Types\Type::FLOAT == false (line 70)
    // Case \Doctrine\DBAL\Types\Type::INTEGER == false (line 72)
    // Case \Doctrine\DBAL\Types\Type::BIGINT == true (line 73)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType5()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == false (line 63)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 65)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 67)
    // Case \Doctrine\DBAL\Types\Type::DECIMAL == false (line 69)
    // Case \Doctrine\DBAL\Types\Type::FLOAT == false (line 70)
    // Case \Doctrine\DBAL\Types\Type::INTEGER == true (line 72)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType6()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == false (line 63)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 65)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 67)
    // Case \Doctrine\DBAL\Types\Type::DECIMAL == false (line 69)
    // Case \Doctrine\DBAL\Types\Type::FLOAT == true (line 70)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType7()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == false (line 63)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 65)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 67)
    // Case \Doctrine\DBAL\Types\Type::DECIMAL == true (line 69)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType8()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == false (line 63)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 65)
    // Case \Doctrine\DBAL\Types\Type::TIME == true (line 67)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType9()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == false (line 63)
    // Case \Doctrine\DBAL\Types\Type::DATE == true (line 65)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType10()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == false (line 61)
    // Case 'dateinterval' == true (line 63)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType11()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 60)
    // Case 'vardatetime' == true (line 61)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType12()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 59)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == true (line 60)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType13()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == false (line 57)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == true (line 59)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType14()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 55)
    // Case \Doctrine\DBAL\Types\Type::BOOLEAN == true (line 57)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType15()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == false (line 47)
    // switch ($metadata->getTypeOfField($property)) (line 54)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == true (line 55)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType16()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == false (line 41)
    // if ($metadata->hasAssociation($property)) == true (line 47)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessType17()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($ret = $this->getMetadata($class))) == true (line 41)

    $actual = $this->doctrineOrmTypeGuesser->guessType($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessRequired0()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$classMetadatas) == false (line 92)
    // if ($classMetadata->hasField($property)) == false (line 100)
    // if ($classMetadata->isAssociationWithSingleJoinColumn($property)) == false (line 110)

    $actual = $this->doctrineOrmTypeGuesser->guessRequired($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessRequired1()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$classMetadatas) == false (line 92)
    // if ($classMetadata->hasField($property)) == false (line 100)
    // if ($classMetadata->isAssociationWithSingleJoinColumn($property)) == true (line 110)
    // if (!isset($mapping['joinColumns'][0]['nullable'])) == false (line 113)

    $actual = $this->doctrineOrmTypeGuesser->guessRequired($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessRequired2()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$classMetadatas) == false (line 92)
    // if ($classMetadata->hasField($property)) == false (line 100)
    // if ($classMetadata->isAssociationWithSingleJoinColumn($property)) == true (line 110)
    // if (!isset($mapping['joinColumns'][0]['nullable'])) == true (line 113)

    $actual = $this->doctrineOrmTypeGuesser->guessRequired($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessRequired3()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$classMetadatas) == false (line 92)
    // if ($classMetadata->hasField($property)) == true (line 100)
    // if (!$classMetadata->isNullable($property) && \Doctrine\DBAL\Types\Type::BOOLEAN !== $classMetadata->getTypeOfField($property)) == false (line 101)

    $actual = $this->doctrineOrmTypeGuesser->guessRequired($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessRequired4()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$classMetadatas) == false (line 92)
    // if ($classMetadata->hasField($property)) == true (line 100)
    // if (!$classMetadata->isNullable($property) && \Doctrine\DBAL\Types\Type::BOOLEAN !== $classMetadata->getTypeOfField($property)) == true (line 101)

    $actual = $this->doctrineOrmTypeGuesser->guessRequired($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessRequired5()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$classMetadatas) == true (line 92)

    $actual = $this->doctrineOrmTypeGuesser->guessRequired($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessMaxLength0()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret && $ret[0]->hasField($property) && !$ret[0]->hasAssociation($property)) == false (line 129)

    $actual = $this->doctrineOrmTypeGuesser->guessMaxLength($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessMaxLength1()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret && $ret[0]->hasField($property) && !$ret[0]->hasAssociation($property)) == true (line 129)
    // if (isset($mapping['length'])) == false (line 132)
    // if (in_array($ret[0]->getTypeOfField($property), array(\Doctrine\DBAL\Types\Type::DECIMAL, \Doctrine\DBAL\Types\Type::FLOAT))) == false (line 136)

    $actual = $this->doctrineOrmTypeGuesser->guessMaxLength($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessMaxLength2()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret && $ret[0]->hasField($property) && !$ret[0]->hasAssociation($property)) == true (line 129)
    // if (isset($mapping['length'])) == false (line 132)
    // if (in_array($ret[0]->getTypeOfField($property), array(\Doctrine\DBAL\Types\Type::DECIMAL, \Doctrine\DBAL\Types\Type::FLOAT))) == true (line 136)

    $actual = $this->doctrineOrmTypeGuesser->guessMaxLength($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessMaxLength3()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret && $ret[0]->hasField($property) && !$ret[0]->hasAssociation($property)) == true (line 129)
    // if (isset($mapping['length'])) == true (line 132)

    $actual = $this->doctrineOrmTypeGuesser->guessMaxLength($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessPattern0()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret && $ret[0]->hasField($property) && !$ret[0]->hasAssociation($property)) == false (line 148)

    $actual = $this->doctrineOrmTypeGuesser->guessPattern($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessPattern1()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret && $ret[0]->hasField($property) && !$ret[0]->hasAssociation($property)) == true (line 148)
    // if (in_array($ret[0]->getTypeOfField($property), array(\Doctrine\DBAL\Types\Type::DECIMAL, \Doctrine\DBAL\Types\Type::FLOAT))) == false (line 149)

    $actual = $this->doctrineOrmTypeGuesser->guessPattern($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessPattern2()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret && $ret[0]->hasField($property) && !$ret[0]->hasAssociation($property)) == true (line 148)
    // if (in_array($ret[0]->getTypeOfField($property), array(\Doctrine\DBAL\Types\Type::DECIMAL, \Doctrine\DBAL\Types\Type::FLOAT))) == true (line 149)

    $actual = $this->doctrineOrmTypeGuesser->guessPattern($class, $property);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
