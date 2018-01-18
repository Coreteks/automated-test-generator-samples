<?php

namespace tests\Faker\ORM\Propel;

use Faker\Generator;
use Faker\ORM\Propel\ColumnTypeGuesser;
use Mockery as m;

class ColumnTypeGuesserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\ORM\Propel\ColumnTypeGuesser
*/
protected $columnTypeGuesser;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->columnTypeGuesser = new \Faker\ORM\Propel\ColumnTypeGuesser($this->_generator);
}

public function testGuessFormat0()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == false (line 79)
    // Case \PropelColumnTypes::VARBINARY == false (line 80)
    // Case \PropelColumnTypes::LONGVARCHAR == false (line 86)
    // Case \PropelColumnTypes::LONGVARBINARY == false (line 87)
    // Case \PropelColumnTypes::CLOB == false (line 88)
    // Case \PropelColumnTypes::CLOB_EMU == false (line 89)
    // Case \PropelColumnTypes::BLOB == false (line 90)
    // Case \PropelColumnTypes::ENUM == false (line 94)
    // Case \PropelColumnTypes::OBJECT == false (line 100)
    // Case \PropelColumnTypes::PHP_ARRAY == false (line 101)
    // Default (line 102)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat1()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == false (line 79)
    // Case \PropelColumnTypes::VARBINARY == false (line 80)
    // Case \PropelColumnTypes::LONGVARCHAR == false (line 86)
    // Case \PropelColumnTypes::LONGVARBINARY == false (line 87)
    // Case \PropelColumnTypes::CLOB == false (line 88)
    // Case \PropelColumnTypes::CLOB_EMU == false (line 89)
    // Case \PropelColumnTypes::BLOB == false (line 90)
    // Case \PropelColumnTypes::ENUM == false (line 94)
    // Case \PropelColumnTypes::OBJECT == false (line 100)
    // Case \PropelColumnTypes::PHP_ARRAY == true (line 101)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat2()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == false (line 79)
    // Case \PropelColumnTypes::VARBINARY == false (line 80)
    // Case \PropelColumnTypes::LONGVARCHAR == false (line 86)
    // Case \PropelColumnTypes::LONGVARBINARY == false (line 87)
    // Case \PropelColumnTypes::CLOB == false (line 88)
    // Case \PropelColumnTypes::CLOB_EMU == false (line 89)
    // Case \PropelColumnTypes::BLOB == false (line 90)
    // Case \PropelColumnTypes::ENUM == false (line 94)
    // Case \PropelColumnTypes::OBJECT == true (line 100)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat3()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == false (line 79)
    // Case \PropelColumnTypes::VARBINARY == false (line 80)
    // Case \PropelColumnTypes::LONGVARCHAR == false (line 86)
    // Case \PropelColumnTypes::LONGVARBINARY == false (line 87)
    // Case \PropelColumnTypes::CLOB == false (line 88)
    // Case \PropelColumnTypes::CLOB_EMU == false (line 89)
    // Case \PropelColumnTypes::BLOB == false (line 90)
    // Case \PropelColumnTypes::ENUM == true (line 94)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat4()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == false (line 79)
    // Case \PropelColumnTypes::VARBINARY == false (line 80)
    // Case \PropelColumnTypes::LONGVARCHAR == false (line 86)
    // Case \PropelColumnTypes::LONGVARBINARY == false (line 87)
    // Case \PropelColumnTypes::CLOB == false (line 88)
    // Case \PropelColumnTypes::CLOB_EMU == false (line 89)
    // Case \PropelColumnTypes::BLOB == true (line 90)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat5()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == false (line 79)
    // Case \PropelColumnTypes::VARBINARY == false (line 80)
    // Case \PropelColumnTypes::LONGVARCHAR == false (line 86)
    // Case \PropelColumnTypes::LONGVARBINARY == false (line 87)
    // Case \PropelColumnTypes::CLOB == false (line 88)
    // Case \PropelColumnTypes::CLOB_EMU == true (line 89)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat6()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == false (line 79)
    // Case \PropelColumnTypes::VARBINARY == false (line 80)
    // Case \PropelColumnTypes::LONGVARCHAR == false (line 86)
    // Case \PropelColumnTypes::LONGVARBINARY == false (line 87)
    // Case \PropelColumnTypes::CLOB == true (line 88)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat7()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == false (line 79)
    // Case \PropelColumnTypes::VARBINARY == false (line 80)
    // Case \PropelColumnTypes::LONGVARCHAR == false (line 86)
    // Case \PropelColumnTypes::LONGVARBINARY == true (line 87)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat8()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == false (line 79)
    // Case \PropelColumnTypes::VARBINARY == false (line 80)
    // Case \PropelColumnTypes::LONGVARCHAR == true (line 86)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat9()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == false (line 79)
    // Case \PropelColumnTypes::VARBINARY == true (line 80)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat10()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == false (line 78)
    // Case \PropelColumnTypes::BINARY == true (line 79)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat11()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == false (line 77)
    // Case \PropelColumnTypes::VARCHAR == true (line 78)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat12()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == false (line 73)
    // Case \PropelColumnTypes::CHAR == true (line 77)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat13()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == false (line 72)
    // Case \PropelColumnTypes::REAL == true (line 73)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat14()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == false (line 68)
    // Case \PropelColumnTypes::DOUBLE == true (line 72)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat15()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == false (line 64)
    // Case \PropelColumnTypes::FLOAT == true (line 68)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat16()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == false (line 60)
    // Case \PropelColumnTypes::BIGINT == true (line 64)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat17()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == false (line 56)
    // Case \PropelColumnTypes::INTEGER == true (line 60)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat18()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == false (line 52)
    // Case \PropelColumnTypes::SMALLINT == true (line 56)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat19()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == false (line 46)
    // Case \PropelColumnTypes::TINYINT == true (line 52)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat20()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == false (line 45)
    // Case \PropelColumnTypes::DECIMAL == true (line 46)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat21()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == false (line 41)
    // Case \PropelColumnTypes::NUMERIC == true (line 45)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat22()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == false (line 40)
    // Case \PropelColumnTypes::BOOLEAN_EMU == true (line 41)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat23()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == false (line 27)
    // switch ($type) (line 39)
    // Case \PropelColumnTypes::BOOLEAN == true (line 40)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat24()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == true (line 27)
    // if ($column->isEpochTemporal()) == false (line 28)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat25()
{
    $column = m::mock(\ColumnMap::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($column->isTemporal()) == true (line 27)
    // if ($column->isEpochTemporal()) == true (line 28)

    $actual = $this->columnTypeGuesser->guessFormat($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
