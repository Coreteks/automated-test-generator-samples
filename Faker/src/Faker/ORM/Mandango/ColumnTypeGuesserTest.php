<?php

namespace tests\Faker\ORM\Mandango;

use Faker\Generator;
use Faker\ORM\Mandango\ColumnTypeGuesser;
use Mockery as m;

class ColumnTypeGuesserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\ORM\Mandango\ColumnTypeGuesser
*/
protected $columnTypeGuesser;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->columnTypeGuesser = new \Faker\ORM\Mandango\ColumnTypeGuesser($this->_generator);
}

public function testGuessFormat0()
{
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($field['type']) (line 23)
    // Case 'boolean' == false (line 24)
    // Case 'integer' == false (line 28)
    // Case 'float' == false (line 32)
    // Case 'string' == false (line 36)
    // Case 'date' == false (line 40)
    // Default (line 44)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat1()
{
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($field['type']) (line 23)
    // Case 'boolean' == false (line 24)
    // Case 'integer' == false (line 28)
    // Case 'float' == false (line 32)
    // Case 'string' == false (line 36)
    // Case 'date' == true (line 40)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat2()
{
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($field['type']) (line 23)
    // Case 'boolean' == false (line 24)
    // Case 'integer' == false (line 28)
    // Case 'float' == false (line 32)
    // Case 'string' == true (line 36)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat3()
{
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($field['type']) (line 23)
    // Case 'boolean' == false (line 24)
    // Case 'integer' == false (line 28)
    // Case 'float' == true (line 32)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat4()
{
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($field['type']) (line 23)
    // Case 'boolean' == false (line 24)
    // Case 'integer' == true (line 28)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat5()
{
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($field['type']) (line 23)
    // Case 'boolean' == true (line 24)

    $actual = $this->columnTypeGuesser->guessFormat($field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
