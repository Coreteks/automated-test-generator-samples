<?php

namespace tests\Illuminate\Database\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\SqlServerGrammar;
use Mockery as m;

class SqlServerGrammarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Schema\Grammars\SqlServerGrammar
*/
protected $sqlServerGrammar;

public function setUp()
{
    parent::setUp();

    $this->sqlServerGrammar = new \Illuminate\Database\Schema\Grammars\SqlServerGrammar();
}

public function testCompileTableExists0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileTableExists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileColumnListing0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileColumnListing($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileCreate0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileCreate($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileAdd0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileAdd($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompilePrimary0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compilePrimary($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUnique0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileUnique($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSpatialIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileSpatialIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDrop0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDrop($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropIfExists0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDropIfExists($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropAllTables0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropColumn0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDropColumn($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropPrimary0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDropPrimary($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropUnique0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDropUnique($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDropIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropSpatialIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDropSpatialIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropForeign0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDropForeign($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileRename0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileRename($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileEnableForeignKeyConstraints0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileEnableForeignKeyConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDisableForeignKeyConstraints0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->compileDisableForeignKeyConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeGeometry0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->typeGeometry($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypePoint0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->typePoint($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeLineString0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->typeLineString($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypePolygon0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->typePolygon($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeGeometryCollection0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->typeGeometryCollection($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeMultiPoint0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->typeMultiPoint($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeMultiLineString0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->typeMultiLineString($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeMultiPolygon0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sqlServerGrammar->typeMultiPolygon($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrapTable0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($table instanceof \Illuminate\Database\Schema\Blueprint && $table->temporary) == false (line 779)

    $actual = $this->sqlServerGrammar->wrapTable($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrapTable1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($table instanceof \Illuminate\Database\Schema\Blueprint && $table->temporary) == true (line 779)

    $actual = $this->sqlServerGrammar->wrapTable($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
