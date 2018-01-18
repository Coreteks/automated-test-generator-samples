<?php

namespace tests\Illuminate\Database\Query\Grammars;

use Illuminate\Database\Query\Grammars\MySqlGrammar;
use Mockery as m;

class MySqlGrammarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Query\Grammars\MySqlGrammar
*/
protected $mySqlGrammar;

public function setUp()
{
    parent::setUp();

    $this->mySqlGrammar = new \Illuminate\Database\Query\Grammars\MySqlGrammar();
}

public function testCompileSelect0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($query->unions) == false (line 41)

    $actual = $this->mySqlGrammar->compileSelect($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSelect1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($query->unions) == true (line 41)

    $actual = $this->mySqlGrammar->compileSelect($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileRandom0()
{
    $seed = m::mock('UntypedParameter_seed_');

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileRandom($seed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == false (line 109)
    // if (!empty($query->orders)) == false (line 123)
    // if (isset($query->limit)) == false (line 130)

    $actual = $this->mySqlGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == false (line 109)
    // if (!empty($query->orders)) == false (line 123)
    // if (isset($query->limit)) == true (line 130)

    $actual = $this->mySqlGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate2()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == false (line 109)
    // if (!empty($query->orders)) == true (line 123)
    // if (isset($query->limit)) == false (line 130)

    $actual = $this->mySqlGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate3()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == false (line 109)
    // if (!empty($query->orders)) == true (line 123)
    // if (isset($query->limit)) == true (line 130)

    $actual = $this->mySqlGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate4()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == true (line 109)
    // if (!empty($query->orders)) == false (line 123)
    // if (isset($query->limit)) == false (line 130)

    $actual = $this->mySqlGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate5()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == true (line 109)
    // if (!empty($query->orders)) == false (line 123)
    // if (isset($query->limit)) == true (line 130)

    $actual = $this->mySqlGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate6()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == true (line 109)
    // if (!empty($query->orders)) == true (line 123)
    // if (isset($query->limit)) == false (line 130)

    $actual = $this->mySqlGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate7()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == true (line 109)
    // if (!empty($query->orders)) == true (line 123)
    // if (isset($query->limit)) == true (line 130)

    $actual = $this->mySqlGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBindingsForUpdate0()
{
    $bindings = [];
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->prepareBindingsForUpdate($bindings, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDelete0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDelete($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBindingsForDelete0()
{
    $bindings = [];

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->prepareBindingsForDelete($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
