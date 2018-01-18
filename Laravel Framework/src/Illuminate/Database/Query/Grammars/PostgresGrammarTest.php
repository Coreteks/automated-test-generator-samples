<?php

namespace tests\Illuminate\Database\Query\Grammars;

use Illuminate\Database\Query\Grammars\PostgresGrammar;
use Mockery as m;

class PostgresGrammarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Query\Grammars\PostgresGrammar
*/
protected $postgresGrammar;

public function setUp()
{
    parent::setUp();

    $this->postgresGrammar = new \Illuminate\Database\Query\Grammars\PostgresGrammar();
}

public function testCompileInsert0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileInsert($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsertGetId0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');
    $sequence = m::mock('UntypedParameter_sequence_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($sequence)) == false (line 90)

    $actual = $this->postgresGrammar->compileInsertGetId($query, $values, $sequence);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsertGetId1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');
    $sequence = m::mock('UntypedParameter_sequence_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($sequence)) == true (line 90)

    $actual = $this->postgresGrammar->compileInsertGetId($query, $values, $sequence);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBindingsForUpdate0()
{
    $bindings = [];
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->prepareBindingsForUpdate($bindings, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDelete0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDelete($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileTruncate0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileTruncate($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
