<?php

namespace tests\Illuminate\Database\Query\Grammars;

use Illuminate\Database\Query\Grammars\Grammar;
use Mockery as m;

class GrammarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Query\Grammars\Grammar
*/
protected $grammar;

public function setUp()
{
    parent::setUp();

    $this->grammar = new \Illuminate\Database\Query\Grammars\Grammar();
}

public function testCompileSelect0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($query->columns)) == false (line 52)

    $actual = $this->grammar->compileSelect($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSelect1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($query->columns)) == true (line 52)

    $actual = $this->grammar->compileSelect($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileRandom0()
{
    $seed = m::mock('UntypedParameter_seed_');

    // TODO: Your mock expectations here

    $actual = $this->grammar->compileRandom($seed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileExists0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->grammar->compileExists($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsert0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array(reset($values))) == false (line 671)

    $actual = $this->grammar->compileInsert($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsert1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array(reset($values))) == true (line 671)

    $actual = $this->grammar->compileInsert($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsertGetId0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');
    $sequence = m::mock('UntypedParameter_sequence_');

    // TODO: Your mock expectations here

    $actual = $this->grammar->compileInsertGetId($query, $values, $sequence);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == false (line 723)

    $actual = $this->grammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == true (line 723)

    $actual = $this->grammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBindingsForUpdate0()
{
    $bindings = [];
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->grammar->prepareBindingsForUpdate($bindings, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDelete0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->grammar->compileDelete($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBindingsForDelete0()
{
    $bindings = [];

    // TODO: Your mock expectations here

    $actual = $this->grammar->prepareBindingsForDelete($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileTruncate0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->grammar->compileTruncate($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupportsSavepoints0()
{
    // TODO: Your mock expectations here

    $actual = $this->grammar->supportsSavepoints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSavepoint0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->grammar->compileSavepoint($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSavepointRollBack0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->grammar->compileSavepointRollBack($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOperators0()
{
    // TODO: Your mock expectations here

    $actual = $this->grammar->getOperators();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
