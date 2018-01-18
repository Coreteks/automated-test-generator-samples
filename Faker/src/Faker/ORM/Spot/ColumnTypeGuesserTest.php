<?php

namespace tests\Faker\ORM\Spot;

use Faker\Generator;
use Faker\ORM\Spot\ColumnTypeGuesser;
use Mockery as m;

class ColumnTypeGuesserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\ORM\Spot\ColumnTypeGuesser
*/
protected $columnTypeGuesser;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->columnTypeGuesser = new \Faker\ORM\Spot\ColumnTypeGuesser($this->_generator);
}

public function testGuessFormat0()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == false (line 34)
    // Case 'smallint' == false (line 40)
    // Case 'integer' == false (line 44)
    // Case 'bigint' == false (line 48)
    // Case 'float' == false (line 52)
    // Case 'string' == false (line 56)
    // Case 'text' == false (line 62)
    // Case 'datetime' == false (line 66)
    // Case 'date' == false (line 67)
    // Case 'time' == false (line 68)
    // Default (line 72)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat1()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == false (line 34)
    // Case 'smallint' == false (line 40)
    // Case 'integer' == false (line 44)
    // Case 'bigint' == false (line 48)
    // Case 'float' == false (line 52)
    // Case 'string' == false (line 56)
    // Case 'text' == false (line 62)
    // Case 'datetime' == false (line 66)
    // Case 'date' == false (line 67)
    // Case 'time' == true (line 68)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat2()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == false (line 34)
    // Case 'smallint' == false (line 40)
    // Case 'integer' == false (line 44)
    // Case 'bigint' == false (line 48)
    // Case 'float' == false (line 52)
    // Case 'string' == false (line 56)
    // Case 'text' == false (line 62)
    // Case 'datetime' == false (line 66)
    // Case 'date' == true (line 67)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat3()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == false (line 34)
    // Case 'smallint' == false (line 40)
    // Case 'integer' == false (line 44)
    // Case 'bigint' == false (line 48)
    // Case 'float' == false (line 52)
    // Case 'string' == false (line 56)
    // Case 'text' == false (line 62)
    // Case 'datetime' == true (line 66)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat4()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == false (line 34)
    // Case 'smallint' == false (line 40)
    // Case 'integer' == false (line 44)
    // Case 'bigint' == false (line 48)
    // Case 'float' == false (line 52)
    // Case 'string' == false (line 56)
    // Case 'text' == true (line 62)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat5()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == false (line 34)
    // Case 'smallint' == false (line 40)
    // Case 'integer' == false (line 44)
    // Case 'bigint' == false (line 48)
    // Case 'float' == false (line 52)
    // Case 'string' == true (line 56)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat6()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == false (line 34)
    // Case 'smallint' == false (line 40)
    // Case 'integer' == false (line 44)
    // Case 'bigint' == false (line 48)
    // Case 'float' == true (line 52)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat7()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == false (line 34)
    // Case 'smallint' == false (line 40)
    // Case 'integer' == false (line 44)
    // Case 'bigint' == true (line 48)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat8()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == false (line 34)
    // Case 'smallint' == false (line 40)
    // Case 'integer' == true (line 44)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat9()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == false (line 34)
    // Case 'smallint' == true (line 40)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat10()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == false (line 30)
    // Case 'decimal' == true (line 34)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat11()
{
    $field = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 29)
    // Case 'boolean' == true (line 30)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
