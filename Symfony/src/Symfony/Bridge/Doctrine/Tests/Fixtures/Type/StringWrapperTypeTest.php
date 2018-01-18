<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures\Type;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\Type\StringWrapperType;

class StringWrapperTypeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\Type\StringWrapperType
*/
protected $stringWrapperType;

public function setUp()
{
    parent::setUp();

    $this->stringWrapperType = new \Symfony\Bridge\Doctrine\Tests\Fixtures\Type\StringWrapperType();
}

public function testConvertToDatabaseValue0()
{
    $value = m::mock('UntypedParameter_value_');
    $platform = m::mock(\Doctrine\DBAL\Platforms\AbstractPlatform::class);

    // TODO: Your mock expectations here

    $actual = $this->stringWrapperType->convertToDatabaseValue($value, $platform);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvertToPHPValue0()
{
    $value = m::mock('UntypedParameter_value_');
    $platform = m::mock(\Doctrine\DBAL\Platforms\AbstractPlatform::class);

    // TODO: Your mock expectations here

    $actual = $this->stringWrapperType->convertToPHPValue($value, $platform);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->stringWrapperType->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
