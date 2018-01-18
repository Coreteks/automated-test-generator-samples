<?php

namespace tests\Faker\ORM\Propel2;

use Faker\Generator;
use Faker\ORM\Propel2\ColumnTypeGuesser;
use Mockery as m;

class ColumnTypeGuesserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\ORM\Propel2\ColumnTypeGuesser
*/
protected $columnTypeGuesser;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->columnTypeGuesser = new \Faker\ORM\Propel2\ColumnTypeGuesser($this->_generator);
}

public function testGuessFormat0()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == false (line 79)
    // Case \Propel\Generator\Model\PropelTypes::VARBINARY == false (line 80)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARCHAR == false (line 86)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARBINARY == false (line 87)
    // Case \Propel\Generator\Model\PropelTypes::CLOB == false (line 88)
    // Case \Propel\Generator\Model\PropelTypes::CLOB_EMU == false (line 89)
    // Case \Propel\Generator\Model\PropelTypes::BLOB == false (line 90)
    // Case \Propel\Generator\Model\PropelTypes::ENUM == false (line 94)
    // Case \Propel\Generator\Model\PropelTypes::OBJECT == false (line 100)
    // Case \Propel\Generator\Model\PropelTypes::PHP_ARRAY == false (line 101)
    // Default (line 102)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat1()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == false (line 79)
    // Case \Propel\Generator\Model\PropelTypes::VARBINARY == false (line 80)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARCHAR == false (line 86)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARBINARY == false (line 87)
    // Case \Propel\Generator\Model\PropelTypes::CLOB == false (line 88)
    // Case \Propel\Generator\Model\PropelTypes::CLOB_EMU == false (line 89)
    // Case \Propel\Generator\Model\PropelTypes::BLOB == false (line 90)
    // Case \Propel\Generator\Model\PropelTypes::ENUM == false (line 94)
    // Case \Propel\Generator\Model\PropelTypes::OBJECT == false (line 100)
    // Case \Propel\Generator\Model\PropelTypes::PHP_ARRAY == true (line 101)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat2()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == false (line 79)
    // Case \Propel\Generator\Model\PropelTypes::VARBINARY == false (line 80)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARCHAR == false (line 86)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARBINARY == false (line 87)
    // Case \Propel\Generator\Model\PropelTypes::CLOB == false (line 88)
    // Case \Propel\Generator\Model\PropelTypes::CLOB_EMU == false (line 89)
    // Case \Propel\Generator\Model\PropelTypes::BLOB == false (line 90)
    // Case \Propel\Generator\Model\PropelTypes::ENUM == false (line 94)
    // Case \Propel\Generator\Model\PropelTypes::OBJECT == true (line 100)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat3()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == false (line 79)
    // Case \Propel\Generator\Model\PropelTypes::VARBINARY == false (line 80)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARCHAR == false (line 86)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARBINARY == false (line 87)
    // Case \Propel\Generator\Model\PropelTypes::CLOB == false (line 88)
    // Case \Propel\Generator\Model\PropelTypes::CLOB_EMU == false (line 89)
    // Case \Propel\Generator\Model\PropelTypes::BLOB == false (line 90)
    // Case \Propel\Generator\Model\PropelTypes::ENUM == true (line 94)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat4()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == false (line 79)
    // Case \Propel\Generator\Model\PropelTypes::VARBINARY == false (line 80)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARCHAR == false (line 86)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARBINARY == false (line 87)
    // Case \Propel\Generator\Model\PropelTypes::CLOB == false (line 88)
    // Case \Propel\Generator\Model\PropelTypes::CLOB_EMU == false (line 89)
    // Case \Propel\Generator\Model\PropelTypes::BLOB == true (line 90)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat5()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == false (line 79)
    // Case \Propel\Generator\Model\PropelTypes::VARBINARY == false (line 80)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARCHAR == false (line 86)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARBINARY == false (line 87)
    // Case \Propel\Generator\Model\PropelTypes::CLOB == false (line 88)
    // Case \Propel\Generator\Model\PropelTypes::CLOB_EMU == true (line 89)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat6()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == false (line 79)
    // Case \Propel\Generator\Model\PropelTypes::VARBINARY == false (line 80)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARCHAR == false (line 86)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARBINARY == false (line 87)
    // Case \Propel\Generator\Model\PropelTypes::CLOB == true (line 88)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat7()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == false (line 79)
    // Case \Propel\Generator\Model\PropelTypes::VARBINARY == false (line 80)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARCHAR == false (line 86)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARBINARY == true (line 87)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat8()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == false (line 79)
    // Case \Propel\Generator\Model\PropelTypes::VARBINARY == false (line 80)
    // Case \Propel\Generator\Model\PropelTypes::LONGVARCHAR == true (line 86)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat9()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == false (line 79)
    // Case \Propel\Generator\Model\PropelTypes::VARBINARY == true (line 80)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat10()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == false (line 78)
    // Case \Propel\Generator\Model\PropelTypes::BINARY == true (line 79)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat11()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == false (line 77)
    // Case \Propel\Generator\Model\PropelTypes::VARCHAR == true (line 78)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat12()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == false (line 73)
    // Case \Propel\Generator\Model\PropelTypes::CHAR == true (line 77)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat13()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == false (line 72)
    // Case \Propel\Generator\Model\PropelTypes::REAL == true (line 73)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat14()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == false (line 68)
    // Case \Propel\Generator\Model\PropelTypes::DOUBLE == true (line 72)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat15()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == false (line 64)
    // Case \Propel\Generator\Model\PropelTypes::FLOAT == true (line 68)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat16()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == false (line 60)
    // Case \Propel\Generator\Model\PropelTypes::BIGINT == true (line 64)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat17()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == false (line 56)
    // Case \Propel\Generator\Model\PropelTypes::INTEGER == true (line 60)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat18()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == false (line 52)
    // Case \Propel\Generator\Model\PropelTypes::SMALLINT == true (line 56)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat19()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == false (line 46)
    // Case \Propel\Generator\Model\PropelTypes::TINYINT == true (line 52)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat20()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == false (line 45)
    // Case \Propel\Generator\Model\PropelTypes::DECIMAL == true (line 46)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat21()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == false (line 41)
    // Case \Propel\Generator\Model\PropelTypes::NUMERIC == true (line 45)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat22()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == false (line 40)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN_EMU == true (line 41)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat23()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \Propel\Generator\Model\PropelTypes::BOOLEAN == true (line 40)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat24()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == true (line 27)
    // if ($column->getType() == \Propel\Generator\Model\PropelTypes::BU_DATE || $column->getType() == \Propel\Generator\Model\PropelTypes::BU_TIMESTAMP) == false (line 28)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat25()
{
    $column = m::mock(\Propel\Runtime\Map\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == true (line 27)
    // if ($column->getType() == \Propel\Generator\Model\PropelTypes::BU_DATE || $column->getType() == \Propel\Generator\Model\PropelTypes::BU_TIMESTAMP) == true (line 28)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
