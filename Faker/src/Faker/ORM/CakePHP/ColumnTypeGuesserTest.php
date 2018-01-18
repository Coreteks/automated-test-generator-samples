<?php

namespace tests\Faker\ORM\CakePHP;

use Faker\Generator;
use Faker\ORM\CakePHP\ColumnTypeGuesser;
use Mockery as m;

class ColumnTypeGuesserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\ORM\CakePHP\ColumnTypeGuesser
*/
protected $columnTypeGuesser;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->columnTypeGuesser = new \Faker\ORM\CakePHP\ColumnTypeGuesser($this->_generator);
}

public function testGuessFormat0()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == false (line 35)
    // Case 'float' == false (line 36)
    // Case 'uuid' == false (line 40)
    // Case 'string' == false (line 44)
    // Case 'text' == false (line 50)
    // Case 'date' == false (line 54)
    // Case 'datetime' == false (line 55)
    // Case 'timestamp' == false (line 56)
    // Case 'time' == false (line 57)
    // Case 'binary' == false (line 62)
    // Default (line 63)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat1()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == false (line 35)
    // Case 'float' == false (line 36)
    // Case 'uuid' == false (line 40)
    // Case 'string' == false (line 44)
    // Case 'text' == false (line 50)
    // Case 'date' == false (line 54)
    // Case 'datetime' == false (line 55)
    // Case 'timestamp' == false (line 56)
    // Case 'time' == false (line 57)
    // Case 'binary' == true (line 62)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat2()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == false (line 35)
    // Case 'float' == false (line 36)
    // Case 'uuid' == false (line 40)
    // Case 'string' == false (line 44)
    // Case 'text' == false (line 50)
    // Case 'date' == false (line 54)
    // Case 'datetime' == false (line 55)
    // Case 'timestamp' == false (line 56)
    // Case 'time' == true (line 57)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat3()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == false (line 35)
    // Case 'float' == false (line 36)
    // Case 'uuid' == false (line 40)
    // Case 'string' == false (line 44)
    // Case 'text' == false (line 50)
    // Case 'date' == false (line 54)
    // Case 'datetime' == false (line 55)
    // Case 'timestamp' == true (line 56)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat4()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == false (line 35)
    // Case 'float' == false (line 36)
    // Case 'uuid' == false (line 40)
    // Case 'string' == false (line 44)
    // Case 'text' == false (line 50)
    // Case 'date' == false (line 54)
    // Case 'datetime' == true (line 55)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat5()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == false (line 35)
    // Case 'float' == false (line 36)
    // Case 'uuid' == false (line 40)
    // Case 'string' == false (line 44)
    // Case 'text' == false (line 50)
    // Case 'date' == true (line 54)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat6()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == false (line 35)
    // Case 'float' == false (line 36)
    // Case 'uuid' == false (line 40)
    // Case 'string' == false (line 44)
    // Case 'text' == true (line 50)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat7()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == false (line 35)
    // Case 'float' == false (line 36)
    // Case 'uuid' == false (line 40)
    // Case 'string' == true (line 44)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat8()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == false (line 35)
    // Case 'float' == false (line 36)
    // Case 'uuid' == true (line 40)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat9()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == false (line 35)
    // Case 'float' == true (line 36)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat10()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == false (line 31)
    // Case 'decimal' == true (line 35)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat11()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == false (line 27)
    // Case 'biginteger' == true (line 31)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat12()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'integer' == true (line 27)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat13()
{
    $column = m::mock('UntypedParameter_column_');
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($schema->columnType($column)) (line 22)
    // Case 'boolean' == true (line 23)

    $actual = $this->columnTypeGuesser->guessFormat($column, $table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
