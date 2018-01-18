<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineFooType;

class DoctrineFooTypeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineFooType
*/
protected $doctrineFooType;

public function setUp()
{
    parent::setUp();

    $this->doctrineFooType = new \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\DoctrineFooType();
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineFooType->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSQLDeclaration0()
{
    $fieldDeclaration = [];
    $platform = m::mock(\Doctrine\DBAL\Platforms\AbstractPlatform::class);

    // TODO: Your mock expectations here

    $actual = $this->doctrineFooType->getSQLDeclaration($fieldDeclaration, $platform);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvertToDatabaseValue0()
{
    $value = m::mock('UntypedParameter_value_');
    $platform = m::mock(\Doctrine\DBAL\Platforms\AbstractPlatform::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $value) == false (line 49)
    // if (!$value instanceof \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\Foo) == false (line 52)

    $actual = $this->doctrineFooType->convertToDatabaseValue($value, $platform);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Doctrine\DBAL\Types\ConversionException
 */
public function testConvertToDatabaseValue1()
{
    $value = m::mock('UntypedParameter_value_');
    $platform = m::mock(\Doctrine\DBAL\Platforms\AbstractPlatform::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $value) == false (line 49)
    // if (!$value instanceof \Symfony\Bridge\Doctrine\Tests\PropertyInfo\Fixtures\Foo) == true (line 52)
    // throw new \Doctrine\DBAL\Types\ConversionException(sprintf('Expected %s, got %s', 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\Foo', gettype($value))) -> exception (line 53)

    $actual = $this->doctrineFooType->convertToDatabaseValue($value, $platform);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvertToDatabaseValue2()
{
    $value = m::mock('UntypedParameter_value_');
    $platform = m::mock(\Doctrine\DBAL\Platforms\AbstractPlatform::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $value) == true (line 49)

    $actual = $this->doctrineFooType->convertToDatabaseValue($value, $platform);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvertToPHPValue0()
{
    $value = m::mock('UntypedParameter_value_');
    $platform = m::mock(\Doctrine\DBAL\Platforms\AbstractPlatform::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $value) == false (line 64)
    // if (!is_string($value)) == false (line 67)

    $actual = $this->doctrineFooType->convertToPHPValue($value, $platform);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testConvertToPHPValue1()
{
    $value = m::mock('UntypedParameter_value_');
    $platform = m::mock(\Doctrine\DBAL\Platforms\AbstractPlatform::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $value) == false (line 64)
    // if (!is_string($value)) == true (line 67)
    // throw \Doctrine\DBAL\Types\ConversionException::conversionFailed($value, self::NAME) -> exception (line 68)

    $actual = $this->doctrineFooType->convertToPHPValue($value, $platform);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvertToPHPValue2()
{
    $value = m::mock('UntypedParameter_value_');
    $platform = m::mock(\Doctrine\DBAL\Platforms\AbstractPlatform::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $value) == true (line 64)

    $actual = $this->doctrineFooType->convertToPHPValue($value, $platform);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequiresSQLCommentHint0()
{
    $platform = m::mock(\Doctrine\DBAL\Platforms\AbstractPlatform::class);

    // TODO: Your mock expectations here

    $actual = $this->doctrineFooType->requiresSQLCommentHint($platform);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
