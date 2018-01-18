<?php

namespace tests\Faker\ORM\Doctrine;

use Faker\Generator;
use Faker\ORM\Doctrine\ColumnTypeGuesser;
use Mockery as m;

class ColumnTypeGuesserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\ORM\Doctrine\ColumnTypeGuesser
*/
protected $columnTypeGuesser;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->columnTypeGuesser = new \Faker\ORM\Doctrine\ColumnTypeGuesser($this->_generator);
}

public function testGuessFormat0()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == false (line 32)
    // Case 'smallint' == false (line 38)
    // Case 'integer' == false (line 42)
    // Case 'bigint' == false (line 46)
    // Case 'float' == false (line 50)
    // Case 'string' == false (line 54)
    // Case 'text' == false (line 60)
    // Case 'datetime' == false (line 64)
    // Case 'date' == false (line 65)
    // Case 'time' == false (line 66)
    // Default (line 70)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat1()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == false (line 32)
    // Case 'smallint' == false (line 38)
    // Case 'integer' == false (line 42)
    // Case 'bigint' == false (line 46)
    // Case 'float' == false (line 50)
    // Case 'string' == false (line 54)
    // Case 'text' == false (line 60)
    // Case 'datetime' == false (line 64)
    // Case 'date' == false (line 65)
    // Case 'time' == true (line 66)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat2()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == false (line 32)
    // Case 'smallint' == false (line 38)
    // Case 'integer' == false (line 42)
    // Case 'bigint' == false (line 46)
    // Case 'float' == false (line 50)
    // Case 'string' == false (line 54)
    // Case 'text' == false (line 60)
    // Case 'datetime' == false (line 64)
    // Case 'date' == true (line 65)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat3()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == false (line 32)
    // Case 'smallint' == false (line 38)
    // Case 'integer' == false (line 42)
    // Case 'bigint' == false (line 46)
    // Case 'float' == false (line 50)
    // Case 'string' == false (line 54)
    // Case 'text' == false (line 60)
    // Case 'datetime' == true (line 64)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat4()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == false (line 32)
    // Case 'smallint' == false (line 38)
    // Case 'integer' == false (line 42)
    // Case 'bigint' == false (line 46)
    // Case 'float' == false (line 50)
    // Case 'string' == false (line 54)
    // Case 'text' == true (line 60)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat5()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == false (line 32)
    // Case 'smallint' == false (line 38)
    // Case 'integer' == false (line 42)
    // Case 'bigint' == false (line 46)
    // Case 'float' == false (line 50)
    // Case 'string' == true (line 54)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat6()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == false (line 32)
    // Case 'smallint' == false (line 38)
    // Case 'integer' == false (line 42)
    // Case 'bigint' == false (line 46)
    // Case 'float' == true (line 50)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat7()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == false (line 32)
    // Case 'smallint' == false (line 38)
    // Case 'integer' == false (line 42)
    // Case 'bigint' == true (line 46)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat8()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == false (line 32)
    // Case 'smallint' == false (line 38)
    // Case 'integer' == true (line 42)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat9()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == false (line 32)
    // Case 'smallint' == true (line 38)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat10()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == false (line 28)
    // Case 'decimal' == true (line 32)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat11()
{
    $fieldName = m::mock('UntypedParameter_fieldName_');
    $class = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 27)
    // Case 'boolean' == true (line 28)

    $actual = $this->columnTypeGuesser->guessFormat($fieldName, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
