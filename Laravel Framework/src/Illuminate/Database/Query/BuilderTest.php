<?php

namespace tests\Illuminate\Database\Query;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Database\Query\Processors\Processor;
use Mockery as m;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_connection;
/**
* @var \Mockery\MockInterface
*/
protected $_grammar;
/**
* @var \Mockery\MockInterface
*/
protected $_processor;
/**
* @var \Illuminate\Database\Query\Builder
*/
protected $builder;

public function setUp()
{
    parent::setUp();

    $this->_connection = m::mock(\Illuminate\Database\ConnectionInterface::class);
    $this->_grammar = m::mock(\Illuminate\Database\Query\Grammars\Grammar::class);
    $this->_processor = m::mock(\Illuminate\Database\Query\Processors\Processor::class);
    $this->builder = new \Illuminate\Database\Query\Builder($this->_connection, $this->_grammar, $this->_processor);
}

public function testSelect0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->builder->select($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSelectRaw0()
{
    $expression = m::mock('UntypedParameter_expression_');
    $bindings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($bindings) == false (line 236)

    $actual = $this->builder->selectRaw($expression, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSelectRaw1()
{
    $expression = m::mock('UntypedParameter_expression_');
    $bindings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($bindings) == true (line 236)

    $actual = $this->builder->selectRaw($expression, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSelectSub0()
{
    $query = m::mock('UntypedParameter_query_');
    $as = m::mock('UntypedParameter_as_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($query instanceof \Closure) == false (line 257)

    $actual = $this->builder->selectSub($query, $as);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSelectSub1()
{
    $query = m::mock('UntypedParameter_query_');
    $as = m::mock('UntypedParameter_as_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($query instanceof \Closure) == true (line 257)

    $actual = $this->builder->selectSub($query, $as);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSelect0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->addSelect($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDistinct0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->distinct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->builder->from($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJoin0()
{
    $table = m::mock('UntypedParameter_table_');
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');
    $type = m::mock('UntypedParameter_type_');
    $where = m::mock('UntypedParameter_where_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($first instanceof \Closure) == false (line 350)

    $actual = $this->builder->join($table, $first, $operator, $second, $type, $where);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJoin1()
{
    $table = m::mock('UntypedParameter_table_');
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');
    $type = m::mock('UntypedParameter_type_');
    $where = m::mock('UntypedParameter_where_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($first instanceof \Closure) == true (line 350)

    $actual = $this->builder->join($table, $first, $operator, $second, $type, $where);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJoinWhere0()
{
    $table = m::mock('UntypedParameter_table_');
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->builder->joinWhere($table, $first, $operator, $second, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeftJoin0()
{
    $table = m::mock('UntypedParameter_table_');
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');

    // TODO: Your mock expectations here

    $actual = $this->builder->leftJoin($table, $first, $operator, $second);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeftJoinWhere0()
{
    $table = m::mock('UntypedParameter_table_');
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');

    // TODO: Your mock expectations here

    $actual = $this->builder->leftJoinWhere($table, $first, $operator, $second);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRightJoin0()
{
    $table = m::mock('UntypedParameter_table_');
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');

    // TODO: Your mock expectations here

    $actual = $this->builder->rightJoin($table, $first, $operator, $second);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRightJoinWhere0()
{
    $table = m::mock('UntypedParameter_table_');
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');

    // TODO: Your mock expectations here

    $actual = $this->builder->rightJoinWhere($table, $first, $operator, $second);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrossJoin0()
{
    $table = m::mock('UntypedParameter_table_');
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($first) == false (line 454)

    $actual = $this->builder->crossJoin($table, $first, $operator, $second);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrossJoin1()
{
    $table = m::mock('UntypedParameter_table_');
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($first) == true (line 454)

    $actual = $this->builder->crossJoin($table, $first, $operator, $second);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMergeWheres0()
{
    $wheres = m::mock('UntypedParameter_wheres_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->builder->mergeWheres($wheres, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == false (line 514)
    // if ($value instanceof \Closure) == false (line 521)
    // if (is_null($value)) == false (line 528)
    // if (\Illuminate\Support\Str::contains($column, '->') && is_bool($value)) == false (line 535)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == false (line 548)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere1()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == false (line 514)
    // if ($value instanceof \Closure) == false (line 521)
    // if (is_null($value)) == false (line 528)
    // if (\Illuminate\Support\Str::contains($column, '->') && is_bool($value)) == false (line 535)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == true (line 548)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere2()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == false (line 514)
    // if ($value instanceof \Closure) == false (line 521)
    // if (is_null($value)) == false (line 528)
    // if (\Illuminate\Support\Str::contains($column, '->') && is_bool($value)) == true (line 535)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == false (line 548)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere3()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == false (line 514)
    // if ($value instanceof \Closure) == false (line 521)
    // if (is_null($value)) == false (line 528)
    // if (\Illuminate\Support\Str::contains($column, '->') && is_bool($value)) == true (line 535)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == true (line 548)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere4()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == false (line 514)
    // if ($value instanceof \Closure) == false (line 521)
    // if (is_null($value)) == true (line 528)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere5()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == false (line 514)
    // if ($value instanceof \Closure) == true (line 521)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere6()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == true (line 514)
    // if ($value instanceof \Closure) == false (line 521)
    // if (is_null($value)) == false (line 528)
    // if (\Illuminate\Support\Str::contains($column, '->') && is_bool($value)) == false (line 535)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == false (line 548)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere7()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == true (line 514)
    // if ($value instanceof \Closure) == false (line 521)
    // if (is_null($value)) == false (line 528)
    // if (\Illuminate\Support\Str::contains($column, '->') && is_bool($value)) == false (line 535)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == true (line 548)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere8()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == true (line 514)
    // if ($value instanceof \Closure) == false (line 521)
    // if (is_null($value)) == false (line 528)
    // if (\Illuminate\Support\Str::contains($column, '->') && is_bool($value)) == true (line 535)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == false (line 548)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere9()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == true (line 514)
    // if ($value instanceof \Closure) == false (line 521)
    // if (is_null($value)) == false (line 528)
    // if (\Illuminate\Support\Str::contains($column, '->') && is_bool($value)) == true (line 535)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == true (line 548)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere10()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == true (line 514)
    // if ($value instanceof \Closure) == false (line 521)
    // if (is_null($value)) == true (line 528)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere11()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == false (line 507)
    // if ($this->invalidOperator($operator)) == true (line 514)
    // if ($value instanceof \Closure) == true (line 521)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere12()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == false (line 493)
    // if ($column instanceof \Closure) == true (line 507)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere13()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($column)) == true (line 493)

    $actual = $this->builder->where($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhere0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhere($column, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereColumn0()
{
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($first)) == false (line 651)
    // if ($this->invalidOperator($operator)) == false (line 658)

    $actual = $this->builder->whereColumn($first, $operator, $second, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereColumn1()
{
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($first)) == false (line 651)
    // if ($this->invalidOperator($operator)) == true (line 658)

    $actual = $this->builder->whereColumn($first, $operator, $second, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereColumn2()
{
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($first)) == true (line 651)

    $actual = $this->builder->whereColumn($first, $operator, $second, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereColumn0()
{
    $first = m::mock('UntypedParameter_first_');
    $operator = m::mock('UntypedParameter_operator_');
    $second = m::mock('UntypedParameter_second_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereColumn($first, $operator, $second);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereRaw0()
{
    $sql = m::mock('UntypedParameter_sql_');
    $bindings = m::mock('UntypedParameter_bindings_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereRaw($sql, $bindings, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereRaw0()
{
    $sql = m::mock('UntypedParameter_sql_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereRaw($sql, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn0()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == false (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 752)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn1()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == false (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 752)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == false (line 762)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn2()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == false (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 752)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == true (line 762)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn3()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == false (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 752)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn4()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == false (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 752)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == false (line 762)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn5()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == false (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 752)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == true (line 762)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn6()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == false (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == true (line 745)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn7()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == false (line 729)
    // if ($values instanceof self) == true (line 736)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn8()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == true (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 752)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn9()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == true (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 752)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == false (line 762)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn10()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == true (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 752)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == true (line 762)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn11()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == true (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 752)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn12()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == true (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 752)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == false (line 762)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn13()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == true (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == false (line 745)
    // if ($values instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 752)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == true (line 762)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn14()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == true (line 729)
    // if ($values instanceof self) == false (line 736)
    // if ($values instanceof \Closure) == true (line 745)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn15()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Database\Eloquent\Builder) == true (line 729)
    // if ($values instanceof self) == true (line 736)

    $actual = $this->builder->whereIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereIn0()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereIn($column, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereNotIn0()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereNotIn($column, $values, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereNotIn0()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereNotIn($column, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereNull0()
{
    $column = m::mock('UntypedParameter_column_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereNull($column, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereNull0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereNull($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereNotNull0()
{
    $column = m::mock('UntypedParameter_column_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereNotNull($column, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereBetween0()
{
    $column = m::mock('UntypedParameter_column_');
    $values = [];
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereBetween($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereBetween0()
{
    $column = m::mock('UntypedParameter_column_');
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereBetween($column, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereNotBetween0()
{
    $column = m::mock('UntypedParameter_column_');
    $values = [];
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereNotBetween($column, $values, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereNotBetween0()
{
    $column = m::mock('UntypedParameter_column_');
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereNotBetween($column, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereNotNull0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereNotNull($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereDate0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereDate($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereDate0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereDate($column, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereTime0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereTime($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereTime0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereTime($column, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereDay0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereDay($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereMonth0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereMonth($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereYear0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereYear($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereNested0()
{
    $callback = m::mock(\Closure::class);
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereNested($callback, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForNestedWhere0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->forNestedWhere();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddNestedWhereQuery0()
{
    $query = m::mock('UntypedParameter_query_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($query->wheres)) == false (line 1126)

    $actual = $this->builder->addNestedWhereQuery($query, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddNestedWhereQuery1()
{
    $query = m::mock('UntypedParameter_query_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($query->wheres)) == true (line 1126)

    $actual = $this->builder->addNestedWhereQuery($query, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereExists0()
{
    $callback = m::mock(\Closure::class);
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereExists($callback, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereExists0()
{
    $callback = m::mock(\Closure::class);
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereExists($callback, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereNotExists0()
{
    $callback = m::mock(\Closure::class);
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->whereNotExists($callback, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWhereNotExists0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->builder->orWhereNotExists($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWhereExistsQuery0()
{
    $query = m::mock('UntypedParameter_query_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    $actual = $this->builder->addWhereExistsQuery($query, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDynamicWhere0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->builder->dynamicWhere($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDynamicWhere1()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($segment !== 'And' && $segment !== 'Or') == false (line 1264)

    $actual = $this->builder->dynamicWhere($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDynamicWhere2()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($segment !== 'And' && $segment !== 'Or') == true (line 1264)

    $actual = $this->builder->dynamicWhere($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy0()
{
    $groups = m::mock('UntypedParameter_groups_');

    // TODO: Your mock expectations here

    $actual = $this->builder->groupBy($groups);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy1()
{
    $groups = m::mock('UntypedParameter_groups_');

    // TODO: Your mock expectations here

    $actual = $this->builder->groupBy($groups);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaving0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->invalidOperator($operator)) == false (line 1341)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == false (line 1347)

    $actual = $this->builder->having($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaving1()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->invalidOperator($operator)) == false (line 1341)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == true (line 1347)

    $actual = $this->builder->having($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaving2()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->invalidOperator($operator)) == true (line 1341)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == false (line 1347)

    $actual = $this->builder->having($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaving3()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->invalidOperator($operator)) == true (line 1341)
    // if (!$value instanceof \Illuminate\Database\Query\Expression) == true (line 1347)

    $actual = $this->builder->having($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrHaving0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orHaving($column, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHavingRaw0()
{
    $sql = m::mock('UntypedParameter_sql_');
    $bindings = [];
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->builder->havingRaw($sql, $bindings, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrHavingRaw0()
{
    $sql = m::mock('UntypedParameter_sql_');
    $bindings = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->orHavingRaw($sql, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrderBy0()
{
    $column = m::mock('UntypedParameter_column_');
    $direction = m::mock('UntypedParameter_direction_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orderBy($column, $direction);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrderByDesc0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orderByDesc($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLatest0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->latest($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOldest0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->oldest($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInRandomOrder0()
{
    $seed = m::mock('UntypedParameter_seed_');

    // TODO: Your mock expectations here

    $actual = $this->builder->inRandomOrder($seed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrderByRaw0()
{
    $sql = m::mock('UntypedParameter_sql_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->builder->orderByRaw($sql, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkip0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->builder->skip($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffset0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->builder->offset($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTake0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->builder->take($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLimit0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value >= 0) == false (line 1524)

    $actual = $this->builder->limit($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLimit1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value >= 0) == true (line 1524)

    $actual = $this->builder->limit($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForPage0()
{
    $page = m::mock('UntypedParameter_page_');
    $perPage = m::mock('UntypedParameter_perPage_');

    // TODO: Your mock expectations here

    $actual = $this->builder->forPage($page, $perPage);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForPageAfterId0()
{
    $perPage = m::mock('UntypedParameter_perPage_');
    $lastId = m::mock('UntypedParameter_lastId_');
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->forPageAfterId($perPage, $lastId, $column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnion0()
{
    $query = m::mock('UntypedParameter_query_');
    $all = m::mock('UntypedParameter_all_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($query instanceof \Closure) == false (line 1584)

    $actual = $this->builder->union($query, $all);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnion1()
{
    $query = m::mock('UntypedParameter_query_');
    $all = m::mock('UntypedParameter_all_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($query instanceof \Closure) == true (line 1584)

    $actual = $this->builder->union($query, $all);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnionAll0()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    $actual = $this->builder->unionAll($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLock0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->lock)) == false (line 1616)

    $actual = $this->builder->lock($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLock1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->lock)) == true (line 1616)

    $actual = $this->builder->lock($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLockForUpdate0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->lockForUpdate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSharedLock0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->sharedLock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToSql0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->toSql();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind0()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->builder->find($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->value($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($original)) == false (line 1688)

    $actual = $this->builder->get($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($original)) == true (line 1688)

    $actual = $this->builder->get($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPaginate0()
{
    $perPage = m::mock('UntypedParameter_perPage_');
    $columns = m::mock('UntypedParameter_columns_');
    $pageName = m::mock('UntypedParameter_pageName_');
    $page = m::mock('UntypedParameter_page_');

    // TODO: Your mock expectations here

    $actual = $this->builder->paginate($perPage, $columns, $pageName, $page);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSimplePaginate0()
{
    $perPage = m::mock('UntypedParameter_perPage_');
    $columns = m::mock('UntypedParameter_columns_');
    $pageName = m::mock('UntypedParameter_pageName_');
    $page = m::mock('UntypedParameter_page_');

    // TODO: Your mock expectations here

    $actual = $this->builder->simplePaginate($perPage, $columns, $pageName, $page);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCountForPagination0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->groups)) == false (line 1770)
    // if (!isset($results[0])) == false (line 1772)
    // if (is_object($results[0])) == false (line 1774)

    $actual = $this->builder->getCountForPagination($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCountForPagination1()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->groups)) == false (line 1770)
    // if (!isset($results[0])) == false (line 1772)
    // if (is_object($results[0])) == true (line 1774)

    $actual = $this->builder->getCountForPagination($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCountForPagination2()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->groups)) == false (line 1770)
    // if (!isset($results[0])) == true (line 1772)

    $actual = $this->builder->getCountForPagination($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCountForPagination3()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->groups)) == true (line 1770)

    $actual = $this->builder->getCountForPagination($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCursor0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->columns)) == false (line 1816)

    $actual = $this->builder->cursor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCursor1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->columns)) == true (line 1816)

    $actual = $this->builder->cursor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChunkById0()
{
    $count = m::mock('UntypedParameter_count_');
    $callback = m::mock('UntypedParameter_callback_');
    $column = m::mock('UntypedParameter_column_');
    $alias = m::mock('UntypedParameter_alias_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($countResults == 0) == false (line 1850)
    // if ($callback($results) === false) == false (line 1857)
    // PhpParser\Node\Stmt\Do_ == false (line 1840)

    $actual = $this->builder->chunkById($count, $callback, $column, $alias);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChunkById1()
{
    $count = m::mock('UntypedParameter_count_');
    $callback = m::mock('UntypedParameter_callback_');
    $column = m::mock('UntypedParameter_column_');
    $alias = m::mock('UntypedParameter_alias_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($countResults == 0) == false (line 1850)
    // if ($callback($results) === false) == true (line 1857)

    $actual = $this->builder->chunkById($count, $callback, $column, $alias);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChunkById2()
{
    $count = m::mock('UntypedParameter_count_');
    $callback = m::mock('UntypedParameter_callback_');
    $column = m::mock('UntypedParameter_column_');
    $alias = m::mock('UntypedParameter_alias_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($countResults == 0) == true (line 1850)

    $actual = $this->builder->chunkById($count, $callback, $column, $alias);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck0()
{
    $column = m::mock('UntypedParameter_column_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->builder->pluck($column, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImplode0()
{
    $column = m::mock('UntypedParameter_column_');
    $glue = m::mock('UntypedParameter_glue_');

    // TODO: Your mock expectations here

    $actual = $this->builder->implode($column, $glue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($results[0])) == false (line 1940)

    $actual = $this->builder->exists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($results[0])) == true (line 1940)

    $actual = $this->builder->exists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDoesntExist0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->doesntExist();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->builder->count($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMin0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->min($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMax0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->max($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSum0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->sum($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAvg0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->avg($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAverage0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->average($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAggregate0()
{
    $function = m::mock('UntypedParameter_function_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$results->isEmpty()) == false (line 2041)

    $actual = $this->builder->aggregate($function, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAggregate1()
{
    $function = m::mock('UntypedParameter_function_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$results->isEmpty()) == true (line 2041)

    $actual = $this->builder->aggregate($function, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumericAggregate0()
{
    $function = m::mock('UntypedParameter_function_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$result) == false (line 2060)
    // if (is_int($result) || is_float($result)) == false (line 2064)

    $actual = $this->builder->numericAggregate($function, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumericAggregate1()
{
    $function = m::mock('UntypedParameter_function_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$result) == false (line 2060)
    // if (is_int($result) || is_float($result)) == true (line 2064)

    $actual = $this->builder->numericAggregate($function, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumericAggregate2()
{
    $function = m::mock('UntypedParameter_function_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$result) == true (line 2060)

    $actual = $this->builder->numericAggregate($function, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert0()
{
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == false (line 2106)
    // if (!is_array(reset($values))) == false (line 2110)

    $actual = $this->builder->insert($values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert1()
{
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == false (line 2106)
    // if (!is_array(reset($values))) == false (line 2110)

    $actual = $this->builder->insert($values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert2()
{
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == false (line 2106)
    // if (!is_array(reset($values))) == true (line 2110)

    $actual = $this->builder->insert($values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert3()
{
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == true (line 2106)

    $actual = $this->builder->insert($values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsertGetId0()
{
    $values = [];
    $sequence = m::mock('UntypedParameter_sequence_');

    // TODO: Your mock expectations here

    $actual = $this->builder->insertGetId($values, $sequence);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->update($values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdateOrInsert0()
{
    $attributes = [];
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->where($attributes)->exists()) == false (line 2174)

    $actual = $this->builder->updateOrInsert($attributes, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdateOrInsert1()
{
    $attributes = [];
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->where($attributes)->exists()) == true (line 2174)

    $actual = $this->builder->updateOrInsert($attributes, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $column = m::mock('UntypedParameter_column_');
    $amount = m::mock('UntypedParameter_amount_');
    $extra = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_numeric($amount)) == false (line 2191)

    $actual = $this->builder->increment($column, $amount, $extra);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testIncrement1()
{
    $column = m::mock('UntypedParameter_column_');
    $amount = m::mock('UntypedParameter_amount_');
    $extra = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_numeric($amount)) == true (line 2191)
    // throw new \InvalidArgumentException('Non-numeric value passed to increment method.') -> exception (line 2192)

    $actual = $this->builder->increment($column, $amount, $extra);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $column = m::mock('UntypedParameter_column_');
    $amount = m::mock('UntypedParameter_amount_');
    $extra = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_numeric($amount)) == false (line 2212)

    $actual = $this->builder->decrement($column, $amount, $extra);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testDecrement1()
{
    $column = m::mock('UntypedParameter_column_');
    $amount = m::mock('UntypedParameter_amount_');
    $extra = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_numeric($amount)) == true (line 2212)
    // throw new \InvalidArgumentException('Non-numeric value passed to decrement method.') -> exception (line 2213)

    $actual = $this->builder->decrement($column, $amount, $extra);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($id)) == false (line 2234)

    $actual = $this->builder->delete($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($id)) == true (line 2234)

    $actual = $this->builder->delete($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTruncate0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->truncate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTruncate1()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->truncate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNewQuery0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->newQuery();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRaw0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->builder->raw($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBindings0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->getBindings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRawBindings0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->getRawBindings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetBindings0()
{
    $bindings = [];
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_key_exists($type, $this->bindings)) == false (line 2319)

    $actual = $this->builder->setBindings($bindings, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetBindings1()
{
    $bindings = [];
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_key_exists($type, $this->bindings)) == true (line 2319)
    // throw new \InvalidArgumentException("Invalid binding type: {$type}.") -> exception (line 2320)

    $actual = $this->builder->setBindings($bindings, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddBinding0()
{
    $value = m::mock('UntypedParameter_value_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_key_exists($type, $this->bindings)) == false (line 2339)
    // if (is_array($value)) == false (line 2343)

    $actual = $this->builder->addBinding($value, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddBinding1()
{
    $value = m::mock('UntypedParameter_value_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_key_exists($type, $this->bindings)) == false (line 2339)
    // if (is_array($value)) == true (line 2343)

    $actual = $this->builder->addBinding($value, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testAddBinding2()
{
    $value = m::mock('UntypedParameter_value_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_key_exists($type, $this->bindings)) == true (line 2339)
    // throw new \InvalidArgumentException("Invalid binding type: {$type}.") -> exception (line 2340)

    $actual = $this->builder->addBinding($value, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMergeBindings0()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    $actual = $this->builder->mergeBindings($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnection0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->getConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProcessor0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->getProcessor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGrammar0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->getGrammar();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseWritePdo0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->useWritePdo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCloneWithout0()
{
    $properties = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->cloneWithout($properties);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCloneWithoutBindings0()
{
    $except = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->cloneWithoutBindings($except);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == false (line 2461)
    // if (\Illuminate\Support\Str::startsWith($method, 'where')) == false (line 2465)
    // throw new \BadMethodCallException("Call to undefined method {$className}::{$method}()") -> exception (line 2471)

    $actual = $this->builder->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == false (line 2461)
    // if (\Illuminate\Support\Str::startsWith($method, 'where')) == true (line 2465)

    $actual = $this->builder->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call2()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == true (line 2461)

    $actual = $this->builder->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
