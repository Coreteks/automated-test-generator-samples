<?php

namespace tests\Illuminate\Database\Query\Grammars;

use Illuminate\Database\Query\Grammars\SqlServerGrammar;
use Mockery as m;

class SqlServerGrammarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Query\Grammars\SqlServerGrammar
*/
protected $sqlServerGrammar;

public function setUp()
{
    parent::setUp();

    $this->sqlServerGrammar = new \Illuminate\Database\Query\Grammars\SqlServerGrammar();
}

public function testCompileSelect0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$query->offset) == false (line 29)
    // if (is_null($query->columns)) == false (line 36)

    $actual = $this->sqlServerGrammar->compileSelect($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSelect1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$query->offset) == false (line 29)
    // if (is_null($query->columns)) == true (line 36)

    $actual = $this->sqlServerGrammar->compileSelect($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSelect2()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$query->offset) == true (line 29)

    $actual = $this->sqlServerGrammar->compileSelect($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileRandom0()
{
    $seed = m::mock('UntypedParameter_seed_');

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileRandom($seed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileExists0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileExists($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDelete0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDelete($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileTruncate0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileTruncate($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == false (line 312)
    // if (!empty($joins)) == false (line 321)

    $actual = $this->sqlServerGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == false (line 312)
    // if (!empty($joins)) == true (line 321)

    $actual = $this->sqlServerGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate2()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == true (line 312)
    // if (!empty($joins)) == false (line 321)

    $actual = $this->sqlServerGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUpdate3()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($query->joins)) == true (line 312)
    // if (!empty($joins)) == true (line 321)

    $actual = $this->sqlServerGrammar->compileUpdate($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBindingsForUpdate0()
{
    $bindings = [];
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->prepareBindingsForUpdate($bindings, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupportsSavepoints0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->supportsSavepoints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSavepoint0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileSavepoint($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSavepointRollBack0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileSavepointRollBack($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDateFormat0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->getDateFormat();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrapTable0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->wrapTable($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
