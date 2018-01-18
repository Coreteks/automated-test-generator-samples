<?php

namespace tests\Illuminate\Database\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\MySqlGrammar;
use Mockery as m;

class MySqlGrammarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Schema\Grammars\MySqlGrammar
*/
protected $mySqlGrammar;

public function setUp()
{
    parent::setUp();

    $this->mySqlGrammar = new \Illuminate\Database\Schema\Grammars\MySqlGrammar();
}

public function testCompileTableExists0()
{
    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileTableExists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileColumnListing0()
{
    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileColumnListing();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileCreate0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);
    $connection = m::mock(\Illuminate\Database\Connection::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileCreate($blueprint, $command, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileAdd0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileAdd($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompilePrimary0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compilePrimary($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUnique0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileUnique($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSpatialIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileSpatialIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDrop0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDrop($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropIfExists0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDropIfExists($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropColumn0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDropColumn($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropPrimary0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDropPrimary($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropUnique0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDropUnique($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDropIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropSpatialIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDropSpatialIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropForeign0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDropForeign($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileRename0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileRename($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropAllTables0()
{
    $tables = m::mock('UntypedParameter_tables_');

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDropAllTables($tables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileGetAllTables0()
{
    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileGetAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileEnableForeignKeyConstraints0()
{
    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileEnableForeignKeyConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDisableForeignKeyConstraints0()
{
    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->compileDisableForeignKeyConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeGeometry0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->typeGeometry($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypePoint0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->typePoint($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeLineString0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->typeLineString($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypePolygon0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->typePolygon($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeGeometryCollection0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->typeGeometryCollection($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeMultiPoint0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->typeMultiPoint($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeMultiLineString0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->typeMultiLineString($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeMultiPolygon0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->mySqlGrammar->typeMultiPolygon($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
