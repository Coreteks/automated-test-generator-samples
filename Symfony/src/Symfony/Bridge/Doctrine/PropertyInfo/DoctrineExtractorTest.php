<?php

namespace tests\Symfony\Bridge\Doctrine\PropertyInfo;

use Doctrine\Common\Persistence\Mapping\ClassMetadataFactory;
use Mockery as m;
use Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor;

class DoctrineExtractorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_classMetadataFactory;
/**
* @var \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
*/
protected $doctrineExtractor;

public function setUp()
{
    parent::setUp();

    $this->_classMetadataFactory = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadataFactory::class);
    $this->doctrineExtractor = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->_classMetadataFactory);
}

/**
 * @expectedException \Exception
 */
public function testGetProperties0()
{
    $class = m::mock('UntypedParameter_class_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->doctrineExtractor->getProperties($class, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProperties1()
{
    $class = m::mock('UntypedParameter_class_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->doctrineExtractor->getProperties($class, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProperties2()
{
    $class = m::mock('UntypedParameter_class_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->doctrineExtractor->getProperties($class, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProperties3()
{
    $class = m::mock('UntypedParameter_class_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && $metadata->embeddedClasses) == false (line 52)

    $actual = $this->doctrineExtractor->getProperties($class, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProperties4()
{
    $class = m::mock('UntypedParameter_class_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && $metadata->embeddedClasses) == true (line 52)

    $actual = $this->doctrineExtractor->getProperties($class, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetTypes0()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes1()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes2()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes3()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == false (line 119)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes4()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == false (line 127)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 128)
    // Case 'date_immutable' == false (line 131)
    // Case 'datetime_immutable' == false (line 132)
    // Case 'datetimetz_immutable' == false (line 133)
    // Case 'time_immutable' == false (line 134)
    // Case 'dateinterval' == false (line 137)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 140)
    // Case \Doctrine\DBAL\Types\Type::SIMPLE_ARRAY == false (line 143)
    // Case \Doctrine\DBAL\Types\Type::JSON_ARRAY == false (line 146)
    // Default (line 149)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes5()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == false (line 127)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 128)
    // Case 'date_immutable' == false (line 131)
    // Case 'datetime_immutable' == false (line 132)
    // Case 'datetimetz_immutable' == false (line 133)
    // Case 'time_immutable' == false (line 134)
    // Case 'dateinterval' == false (line 137)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 140)
    // Case \Doctrine\DBAL\Types\Type::SIMPLE_ARRAY == false (line 143)
    // Case \Doctrine\DBAL\Types\Type::JSON_ARRAY == true (line 146)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes6()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == false (line 127)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 128)
    // Case 'date_immutable' == false (line 131)
    // Case 'datetime_immutable' == false (line 132)
    // Case 'datetimetz_immutable' == false (line 133)
    // Case 'time_immutable' == false (line 134)
    // Case 'dateinterval' == false (line 137)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == false (line 140)
    // Case \Doctrine\DBAL\Types\Type::SIMPLE_ARRAY == true (line 143)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes7()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == false (line 127)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 128)
    // Case 'date_immutable' == false (line 131)
    // Case 'datetime_immutable' == false (line 132)
    // Case 'datetimetz_immutable' == false (line 133)
    // Case 'time_immutable' == false (line 134)
    // Case 'dateinterval' == false (line 137)
    // Case \Doctrine\DBAL\Types\Type::TARRAY == true (line 140)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes8()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == false (line 127)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 128)
    // Case 'date_immutable' == false (line 131)
    // Case 'datetime_immutable' == false (line 132)
    // Case 'datetimetz_immutable' == false (line 133)
    // Case 'time_immutable' == false (line 134)
    // Case 'dateinterval' == true (line 137)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes9()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == false (line 127)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 128)
    // Case 'date_immutable' == false (line 131)
    // Case 'datetime_immutable' == false (line 132)
    // Case 'datetimetz_immutable' == false (line 133)
    // Case 'time_immutable' == true (line 134)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes10()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == false (line 127)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 128)
    // Case 'date_immutable' == false (line 131)
    // Case 'datetime_immutable' == false (line 132)
    // Case 'datetimetz_immutable' == true (line 133)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes11()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == false (line 127)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 128)
    // Case 'date_immutable' == false (line 131)
    // Case 'datetime_immutable' == true (line 132)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes12()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == false (line 127)
    // Case \Doctrine\DBAL\Types\Type::TIME == false (line 128)
    // Case 'date_immutable' == true (line 131)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes13()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == false (line 127)
    // Case \Doctrine\DBAL\Types\Type::TIME == true (line 128)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes14()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == false (line 126)
    // Case 'vardatetime' == true (line 127)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes15()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == false (line 125)
    // Case \Doctrine\DBAL\Types\Type::DATETIMETZ == true (line 126)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes16()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == false (line 124)
    // Case \Doctrine\DBAL\Types\Type::DATETIME == true (line 125)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes17()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == false (line 115)
    // if ($metadata->hasField($property)) == true (line 119)
    // switch ($typeOfField) (line 123)
    // Case \Doctrine\DBAL\Types\Type::DATE == true (line 124)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes18()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == false (line 76)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset($metadata->embeddedClasses[$property])) == true (line 115)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes19()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == true (line 76)
    // if ($metadata->isSingleValuedAssociation($property)) == false (line 79)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo) == false (line 93)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes20()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == true (line 76)
    // if ($metadata->isSingleValuedAssociation($property)) == false (line 79)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo) == true (line 93)
    // if (isset($associationMapping['indexBy'])) == false (line 96)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes21()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == true (line 76)
    // if ($metadata->isSingleValuedAssociation($property)) == false (line 79)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo) == true (line 93)
    // if (isset($associationMapping['indexBy'])) == true (line 96)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes22()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == true (line 76)
    // if ($metadata->isSingleValuedAssociation($property)) == true (line 79)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo) == false (line 80)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTypes23()
{
    $class = m::mock('UntypedParameter_class_');
    $property = m::mock('UntypedParameter_property_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($metadata->hasAssociation($property)) == true (line 76)
    // if ($metadata->isSingleValuedAssociation($property)) == true (line 79)
    // if ($metadata instanceof \Doctrine\ORM\Mapping\ClassMetadataInfo) == true (line 80)

    $actual = $this->doctrineExtractor->getTypes($class, $property, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
