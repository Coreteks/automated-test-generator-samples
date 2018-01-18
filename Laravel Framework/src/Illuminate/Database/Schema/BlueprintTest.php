<?php

namespace tests\Illuminate\Database\Schema;

use Closure;
use Illuminate\Database\Schema\Blueprint;
use Mockery as m;

class BlueprintTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_table = null;
/**
* @var \Mockery\MockInterface
*/
protected $_callback;
/**
* @var \Illuminate\Database\Schema\Blueprint
*/
protected $blueprint;

public function setUp()
{
    parent::setUp();

    $this->_table = null;
    $this->_callback = m::mock(\Closure::class);
    $this->blueprint = new \Illuminate\Database\Schema\Blueprint($this->_table, $this->_callback);
}

public function testBuild0()
{
    $connection = m::mock(\Illuminate\Database\Connection::class);
    $grammar = m::mock(\Illuminate\Database\Schema\Grammars\Grammar::class);

    // TODO: Your mock expectations here

    $actual = $this->blueprint->build($connection, $grammar);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild1()
{
    $connection = m::mock(\Illuminate\Database\Connection::class);
    $grammar = m::mock(\Illuminate\Database\Schema\Grammars\Grammar::class);

    // TODO: Your mock expectations here

    $actual = $this->blueprint->build($connection, $grammar);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToSql0()
{
    $connection = m::mock(\Illuminate\Database\Connection::class);
    $grammar = m::mock(\Illuminate\Database\Schema\Grammars\Grammar::class);

    // TODO: Your mock expectations here

    $actual = $this->blueprint->toSql($connection, $grammar);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToSql1()
{
    $connection = m::mock(\Illuminate\Database\Connection::class);
    $grammar = m::mock(\Illuminate\Database\Schema\Grammars\Grammar::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($grammar, $method)) == false (line 109)

    $actual = $this->blueprint->toSql($connection, $grammar);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToSql2()
{
    $connection = m::mock(\Illuminate\Database\Connection::class);
    $grammar = m::mock(\Illuminate\Database\Schema\Grammars\Grammar::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($grammar, $method)) == true (line 109)
    // if (!is_null($sql = $grammar->{$method}($this, $command, $connection))) == false (line 110)

    $actual = $this->blueprint->toSql($connection, $grammar);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToSql3()
{
    $connection = m::mock(\Illuminate\Database\Connection::class);
    $grammar = m::mock(\Illuminate\Database\Schema\Grammars\Grammar::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($grammar, $method)) == true (line 109)
    // if (!is_null($sql = $grammar->{$method}($this, $command, $connection))) == true (line 110)

    $actual = $this->blueprint->toSql($connection, $grammar);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->create();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemporary0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->temporary();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDrop0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->drop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropIfExists0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropIfExists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropColumn0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropColumn($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenameColumn0()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->renameColumn($from, $to);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropPrimary0()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropPrimary($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropUnique0()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropUnique($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropIndex0()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropIndex($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropSpatialIndex0()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropSpatialIndex($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropForeign0()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropForeign($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropTimestamps0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropTimestamps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropTimestampsTz0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropTimestampsTz();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropSoftDeletes0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropSoftDeletes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropSoftDeletesTz0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropSoftDeletesTz();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDropRememberToken0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->dropRememberToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRename0()
{
    $to = m::mock('UntypedParameter_to_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->rename($to);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrimary0()
{
    $columns = m::mock('UntypedParameter_columns_');
    $name = m::mock('UntypedParameter_name_');
    $algorithm = m::mock('UntypedParameter_algorithm_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->primary($columns, $name, $algorithm);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnique0()
{
    $columns = m::mock('UntypedParameter_columns_');
    $name = m::mock('UntypedParameter_name_');
    $algorithm = m::mock('UntypedParameter_algorithm_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->unique($columns, $name, $algorithm);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIndex0()
{
    $columns = m::mock('UntypedParameter_columns_');
    $name = m::mock('UntypedParameter_name_');
    $algorithm = m::mock('UntypedParameter_algorithm_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->index($columns, $name, $algorithm);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSpatialIndex0()
{
    $columns = m::mock('UntypedParameter_columns_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->spatialIndex($columns, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForeign0()
{
    $columns = m::mock('UntypedParameter_columns_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->foreign($columns, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrements0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->increments($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTinyIncrements0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->tinyIncrements($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSmallIncrements0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->smallIncrements($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMediumIncrements0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->mediumIncrements($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBigIncrements0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->bigIncrements($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChar0()
{
    $column = m::mock('UntypedParameter_column_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->char($column, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testString0()
{
    $column = m::mock('UntypedParameter_column_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->string($column, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->text($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMediumText0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->mediumText($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLongText0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->longText($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInteger0()
{
    $column = m::mock('UntypedParameter_column_');
    $autoIncrement = m::mock('UntypedParameter_autoIncrement_');
    $unsigned = m::mock('UntypedParameter_unsigned_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->integer($column, $autoIncrement, $unsigned);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTinyInteger0()
{
    $column = m::mock('UntypedParameter_column_');
    $autoIncrement = m::mock('UntypedParameter_autoIncrement_');
    $unsigned = m::mock('UntypedParameter_unsigned_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->tinyInteger($column, $autoIncrement, $unsigned);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSmallInteger0()
{
    $column = m::mock('UntypedParameter_column_');
    $autoIncrement = m::mock('UntypedParameter_autoIncrement_');
    $unsigned = m::mock('UntypedParameter_unsigned_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->smallInteger($column, $autoIncrement, $unsigned);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMediumInteger0()
{
    $column = m::mock('UntypedParameter_column_');
    $autoIncrement = m::mock('UntypedParameter_autoIncrement_');
    $unsigned = m::mock('UntypedParameter_unsigned_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->mediumInteger($column, $autoIncrement, $unsigned);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBigInteger0()
{
    $column = m::mock('UntypedParameter_column_');
    $autoIncrement = m::mock('UntypedParameter_autoIncrement_');
    $unsigned = m::mock('UntypedParameter_unsigned_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->bigInteger($column, $autoIncrement, $unsigned);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnsignedInteger0()
{
    $column = m::mock('UntypedParameter_column_');
    $autoIncrement = m::mock('UntypedParameter_autoIncrement_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->unsignedInteger($column, $autoIncrement);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnsignedTinyInteger0()
{
    $column = m::mock('UntypedParameter_column_');
    $autoIncrement = m::mock('UntypedParameter_autoIncrement_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->unsignedTinyInteger($column, $autoIncrement);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnsignedSmallInteger0()
{
    $column = m::mock('UntypedParameter_column_');
    $autoIncrement = m::mock('UntypedParameter_autoIncrement_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->unsignedSmallInteger($column, $autoIncrement);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnsignedMediumInteger0()
{
    $column = m::mock('UntypedParameter_column_');
    $autoIncrement = m::mock('UntypedParameter_autoIncrement_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->unsignedMediumInteger($column, $autoIncrement);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnsignedBigInteger0()
{
    $column = m::mock('UntypedParameter_column_');
    $autoIncrement = m::mock('UntypedParameter_autoIncrement_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->unsignedBigInteger($column, $autoIncrement);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFloat0()
{
    $column = m::mock('UntypedParameter_column_');
    $total = m::mock('UntypedParameter_total_');
    $places = m::mock('UntypedParameter_places_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->float($column, $total, $places);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDouble0()
{
    $column = m::mock('UntypedParameter_column_');
    $total = m::mock('UntypedParameter_total_');
    $places = m::mock('UntypedParameter_places_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->double($column, $total, $places);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecimal0()
{
    $column = m::mock('UntypedParameter_column_');
    $total = m::mock('UntypedParameter_total_');
    $places = m::mock('UntypedParameter_places_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->decimal($column, $total, $places);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnsignedDecimal0()
{
    $column = m::mock('UntypedParameter_column_');
    $total = m::mock('UntypedParameter_total_');
    $places = m::mock('UntypedParameter_places_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->unsignedDecimal($column, $total, $places);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoolean0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->boolean($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnum0()
{
    $column = m::mock('UntypedParameter_column_');
    $allowed = [];

    // TODO: Your mock expectations here

    $actual = $this->blueprint->enum($column, $allowed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->json($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonb0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->jsonb($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->date($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDateTime0()
{
    $column = m::mock('UntypedParameter_column_');
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->dateTime($column, $precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDateTimeTz0()
{
    $column = m::mock('UntypedParameter_column_');
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->dateTimeTz($column, $precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTime0()
{
    $column = m::mock('UntypedParameter_column_');
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->time($column, $precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimeTz0()
{
    $column = m::mock('UntypedParameter_column_');
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->timeTz($column, $precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimestamp0()
{
    $column = m::mock('UntypedParameter_column_');
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->timestamp($column, $precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimestampTz0()
{
    $column = m::mock('UntypedParameter_column_');
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->timestampTz($column, $precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimestamps0()
{
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->timestamps($precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNullableTimestamps0()
{
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->nullableTimestamps($precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimestampsTz0()
{
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->timestampsTz($precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSoftDeletes0()
{
    $column = m::mock('UntypedParameter_column_');
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->softDeletes($column, $precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSoftDeletesTz0()
{
    $precision = m::mock('UntypedParameter_precision_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->softDeletesTz($precision);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testYear0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->year($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBinary0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->binary($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->uuid($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIpAddress0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->ipAddress($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMacAddress0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->macAddress($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGeometry0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->geometry($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPoint0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->point($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLineString0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->lineString($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPolygon0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->polygon($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGeometryCollection0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->geometryCollection($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMultiPoint0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->multiPoint($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMultiLineString0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->multiLineString($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMultiPolygon0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->multiPolygon($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMorphs0()
{
    $name = m::mock('UntypedParameter_name_');
    $indexName = m::mock('UntypedParameter_indexName_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->morphs($name, $indexName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNullableMorphs0()
{
    $name = m::mock('UntypedParameter_name_');
    $indexName = m::mock('UntypedParameter_indexName_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->nullableMorphs($name, $indexName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRememberToken0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->rememberToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddColumn0()
{
    $type = m::mock('UntypedParameter_type_');
    $name = m::mock('UntypedParameter_name_');
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->blueprint->addColumn($type, $name, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveColumn0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->blueprint->removeColumn($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTable0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->getTable();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetColumns0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->getColumns();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCommands0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->getCommands();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAddedColumns0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->getAddedColumns();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChangedColumns0()
{
    // TODO: Your mock expectations here

    $actual = $this->blueprint->getChangedColumns();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
