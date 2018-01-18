<?php

namespace tests\Illuminate\Database\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\PostgresGrammar;
use Mockery as m;

class PostgresGrammarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Schema\Grammars\PostgresGrammar
*/
protected $postgresGrammar;

public function setUp()
{
    parent::setUp();

    $this->postgresGrammar = new \Illuminate\Database\Schema\Grammars\PostgresGrammar();
}

public function testCompileTableExists0()
{
    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileTableExists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileColumnListing0()
{
    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileColumnListing();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileCreate0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileCreate($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileAdd0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileAdd($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompilePrimary0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compilePrimary($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileUnique0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileUnique($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSpatialIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileSpatialIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileForeign0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($command->deferrable)) == false (line 155)
    // if ($command->deferrable && !is_null($command->initiallyImmediate)) == false (line 159)

    $actual = $this->postgresGrammar->compileForeign($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileForeign1()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($command->deferrable)) == false (line 155)
    // if ($command->deferrable && !is_null($command->initiallyImmediate)) == true (line 159)

    $actual = $this->postgresGrammar->compileForeign($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileForeign2()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($command->deferrable)) == true (line 155)
    // if ($command->deferrable && !is_null($command->initiallyImmediate)) == false (line 159)

    $actual = $this->postgresGrammar->compileForeign($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileForeign3()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($command->deferrable)) == true (line 155)
    // if ($command->deferrable && !is_null($command->initiallyImmediate)) == true (line 159)

    $actual = $this->postgresGrammar->compileForeign($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDrop0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDrop($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropIfExists0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDropIfExists($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropAllTables0()
{
    $tables = m::mock('UntypedParameter_tables_');

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDropAllTables($tables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileGetAllTables0()
{
    $schema = m::mock('UntypedParameter_schema_');

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileGetAllTables($schema);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropColumn0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDropColumn($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropPrimary0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDropPrimary($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropUnique0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDropUnique($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDropIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropSpatialIndex0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDropSpatialIndex($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDropForeign0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDropForeign($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileRename0()
{
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileRename($blueprint, $command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileEnableForeignKeyConstraints0()
{
    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileEnableForeignKeyConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileDisableForeignKeyConstraints0()
{
    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->compileDisableForeignKeyConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTypeMultiLineString0()
{
    $column = m::mock(\Illuminate\Support\Fluent::class);

    // TODO: Your mock expectations here

    $actual = $this->postgresGrammar->typeMultiLineString($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
