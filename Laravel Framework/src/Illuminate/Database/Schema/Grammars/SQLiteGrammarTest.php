<?php

namespace tests\Illuminate\Database\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\SQLiteGrammar;
use Mockery as m;

class SQLiteGrammarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Schema\Grammars\SQLiteGrammar
*/
protected $sQLiteGrammar;

public function setUp()
{
    parent::setUp();

    $this->sQLiteGrammar = new \Illuminate\Database\Schema\Grammars\SQLiteGrammar();
}

public function testCompileTableExists0()
{
    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileTableExists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileColumnListing0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileColumnListing($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileCreate0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileCreate($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileAdd0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileAdd($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUnique0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileUnique($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCompileSpatialIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \RuntimeException('The database driver in use does not support spatial indexes.') -> exception (line 184)

    $actual = $this->sQLiteGrammar->compileSpatialIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileForeign0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileForeign($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDrop0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileDrop($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropIfExists0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileDropIfExists($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropAllTables0()
{
    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileDropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropColumn0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);
    $connection = m::mock(\Illuminate\Database\Connection::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileDropColumn($blueprint, $command, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropColumn1()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);
    $connection = m::mock(\Illuminate\Database\Connection::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileDropColumn($blueprint, $command, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropUnique0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileDropUnique($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileDropIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCompileDropSpatialIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \RuntimeException('The database driver in use does not support spatial indexes.') -> exception (line 293)

    $actual = $this->sQLiteGrammar->compileDropSpatialIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileRename0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileRename($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileEnableForeignKeyConstraints0()
{
    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileEnableForeignKeyConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDisableForeignKeyConstraints0()
{
    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileDisableForeignKeyConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileEnableWriteableSchema0()
{
    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileEnableWriteableSchema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDisableWriteableSchema0()
{
    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileDisableWriteableSchema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeGeometry0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->typeGeometry($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypePoint0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->typePoint($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeLineString0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->typeLineString($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypePolygon0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->typePolygon($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeGeometryCollection0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->typeGeometryCollection($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeMultiPoint0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->typeMultiPoint($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeMultiLineString0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->typeMultiLineString($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeMultiPolygon0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->typeMultiPolygon($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
