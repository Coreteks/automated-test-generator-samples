<?php

namespace tests\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder;
use Mockery as m;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_query;
/**
* @var \Illuminate\Database\Eloquent\Builder
*/
protected $builder;

public function setUp()
{
    parent::setUp();

    $this->_query = m::mock(\Illuminate\Database\Query\Builder::class);
    $this->builder = new \Illuminate\Database\Eloquent\Builder($this->_query);
}

public function testMake0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->make($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithGlobalScope0()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $scope = m::mock('UntypedParameter_scope_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($scope, 'extend')) == false (line 121)

    $actual = $this->builder->withGlobalScope($identifier, $scope);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithGlobalScope1()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $scope = m::mock('UntypedParameter_scope_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($scope, 'extend')) == true (line 121)

    $actual = $this->builder->withGlobalScope($identifier, $scope);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithoutGlobalScope0()
{
    $scope = m::mock('UntypedParameter_scope_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($scope)) == false (line 136)

    $actual = $this->builder->withoutGlobalScope($scope);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithoutGlobalScope1()
{
    $scope = m::mock('UntypedParameter_scope_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($scope)) == true (line 136)

    $actual = $this->builder->withoutGlobalScope($scope);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithoutGlobalScopes0()
{
    $scopes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($scopes)) == false (line 155)

    $actual = $this->builder->withoutGlobalScopes($scopes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithoutGlobalScopes1()
{
    $scopes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($scopes)) == true (line 155)

    $actual = $this->builder->withoutGlobalScopes($scopes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithoutGlobalScopes2()
{
    $scopes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($scopes)) == true (line 155)

    $actual = $this->builder->withoutGlobalScopes($scopes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemovedScopes0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->removedScopes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereKey0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id) || $id instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 184)

    $actual = $this->builder->whereKey($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereKey1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id) || $id instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 184)

    $actual = $this->builder->whereKey($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereKeyNot0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id) || $id instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 201)

    $actual = $this->builder->whereKeyNot($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereKeyNot1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id) || $id instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 201)

    $actual = $this->builder->whereKeyNot($id);
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
    // if ($column instanceof \Closure) == false (line 221)

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
    // if ($column instanceof \Closure) == true (line 221)

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

public function testHydrate0()
{
    $items = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->hydrate($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromQuery0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->builder->fromQuery($query, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind0()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id) || $id instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 285)

    $actual = $this->builder->find($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind1()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id) || $id instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 285)

    $actual = $this->builder->find($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindMany0()
{
    $ids = m::mock('UntypedParameter_ids_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($ids)) == false (line 301)

    $actual = $this->builder->findMany($ids, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindMany1()
{
    $ids = m::mock('UntypedParameter_ids_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($ids)) == true (line 301)

    $actual = $this->builder->findMany($ids, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testFindOrFail0()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id)) == false (line 321)
    // if (!is_null($result)) == false (line 325)
    // throw (new \Illuminate\Database\Eloquent\ModelNotFoundException())->setModel(get_class($this->model), $id) -> exception (line 329)

    $actual = $this->builder->findOrFail($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindOrFail1()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id)) == false (line 321)
    // if (!is_null($result)) == true (line 325)

    $actual = $this->builder->findOrFail($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testFindOrFail2()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id)) == true (line 321)
    // if (count($result) == count(array_unique($id))) == false (line 322)
    // throw (new \Illuminate\Database\Eloquent\ModelNotFoundException())->setModel(get_class($this->model), $id) -> exception (line 329)

    $actual = $this->builder->findOrFail($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindOrFail3()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id)) == true (line 321)
    // if (count($result) == count(array_unique($id))) == true (line 322)

    $actual = $this->builder->findOrFail($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindOrNew0()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($model = $this->find($id, $columns))) == false (line 343)

    $actual = $this->builder->findOrNew($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindOrNew1()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($model = $this->find($id, $columns))) == true (line 343)

    $actual = $this->builder->findOrNew($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrNew0()
{
    $attributes = [];
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($instance = $this->where($attributes)->first())) == false (line 359)

    $actual = $this->builder->firstOrNew($attributes, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrNew1()
{
    $attributes = [];
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($instance = $this->where($attributes)->first())) == true (line 359)

    $actual = $this->builder->firstOrNew($attributes, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrCreate0()
{
    $attributes = [];
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($instance = $this->where($attributes)->first())) == false (line 375)

    $actual = $this->builder->firstOrCreate($attributes, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrCreate1()
{
    $attributes = [];
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($instance = $this->where($attributes)->first())) == true (line 375)

    $actual = $this->builder->firstOrCreate($attributes, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdateOrCreate0()
{
    $attributes = [];
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->updateOrCreate($attributes, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testFirstOrFail0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($model = $this->first($columns))) == false (line 408)
    // throw (new \Illuminate\Database\Eloquent\ModelNotFoundException())->setModel(get_class($this->model)) -> exception (line 412)

    $actual = $this->builder->firstOrFail($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrFail1()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($model = $this->first($columns))) == true (line 408)

    $actual = $this->builder->firstOrFail($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOr0()
{
    $columns = m::mock('UntypedParameter_columns_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($columns instanceof \Closure) == false (line 424)
    // if (!is_null($model = $this->first($columns))) == false (line 430)

    $actual = $this->builder->firstOr($columns, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOr1()
{
    $columns = m::mock('UntypedParameter_columns_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($columns instanceof \Closure) == false (line 424)
    // if (!is_null($model = $this->first($columns))) == true (line 430)

    $actual = $this->builder->firstOr($columns, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOr2()
{
    $columns = m::mock('UntypedParameter_columns_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($columns instanceof \Closure) == true (line 424)
    // if (!is_null($model = $this->first($columns))) == false (line 430)

    $actual = $this->builder->firstOr($columns, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOr3()
{
    $columns = m::mock('UntypedParameter_columns_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($columns instanceof \Closure) == true (line 424)
    // if (!is_null($model = $this->first($columns))) == true (line 430)

    $actual = $this->builder->firstOr($columns, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($result = $this->first([$column])) == false (line 445)

    $actual = $this->builder->value($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue1()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($result = $this->first([$column])) == true (line 445)

    $actual = $this->builder->value($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($models = $builder->getModels($columns)) > 0) == false (line 463)

    $actual = $this->builder->get($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($models = $builder->getModels($columns)) > 0) == true (line 463)

    $actual = $this->builder->get($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetModels0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->builder->getModels($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEagerLoadRelations0()
{
    $models = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->eagerLoadRelations($models);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEagerLoadRelations1()
{
    $models = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($name, '.') === false) == false (line 495)

    $actual = $this->builder->eagerLoadRelations($models);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEagerLoadRelations2()
{
    $models = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($name, '.') === false) == true (line 495)

    $actual = $this->builder->eagerLoadRelations($models);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelation0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($nested) > 0) == false (line 555)

    $actual = $this->builder->getRelation($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelation1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($nested) > 0) == true (line 555)

    $actual = $this->builder->getRelation($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCursor0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->cursor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCursor1()
{
    // TODO: Your mock expectations here

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
    // if ($countResults == 0) == false (line 635)
    // if ($callback($results) === false) == false (line 642)
    // PhpParser\Node\Stmt\Do_ == false (line 625)

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
    // if ($countResults == 0) == false (line 635)
    // if ($callback($results) === false) == true (line 642)

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
    // if ($countResults == 0) == true (line 635)

    $actual = $this->builder->chunkById($count, $callback, $column, $alias);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck0()
{
    $column = m::mock('UntypedParameter_column_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->model->hasGetMutator($column) && !$this->model->hasCast($column) && !in_array($column, $this->model->getDates())) == false (line 680)

    $actual = $this->builder->pluck($column, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck1()
{
    $column = m::mock('UntypedParameter_column_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->model->hasGetMutator($column) && !$this->model->hasCast($column) && !in_array($column, $this->model->getDates())) == true (line 680)

    $actual = $this->builder->pluck($column, $key);
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

public function testCreate0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->create($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForceCreate0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->forceCreate($attributes);
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

public function testIncrement0()
{
    $column = m::mock('UntypedParameter_column_');
    $amount = m::mock('UntypedParameter_amount_');
    $extra = [];

    // TODO: Your mock expectations here

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

    $actual = $this->builder->decrement($column, $amount, $extra);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->onDelete)) == false (line 836)

    $actual = $this->builder->delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->onDelete)) == true (line 836)

    $actual = $this->builder->delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForceDelete0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->forceDelete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnDelete0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->builder->onDelete($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testScopes0()
{
    $scopes = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->scopes($scopes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testScopes1()
{
    $scopes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_int($scope)) == false (line 880)

    $actual = $this->builder->scopes($scopes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testScopes2()
{
    $scopes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_int($scope)) == true (line 880)

    $actual = $this->builder->scopes($scopes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApplyScopes0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->scopes) == false (line 903)

    $actual = $this->builder->applyScopes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApplyScopes1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->scopes) == false (line 903)
    // if (!isset($builder->scopes[$identifier])) == false (line 910)

    $actual = $this->builder->applyScopes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApplyScopes2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->scopes) == false (line 903)
    // if (!isset($builder->scopes[$identifier])) == true (line 910)

    $actual = $this->builder->applyScopes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApplyScopes3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->scopes) == true (line 903)

    $actual = $this->builder->applyScopes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWith0()
{
    $relations = m::mock('UntypedParameter_relations_');

    // TODO: Your mock expectations here

    $actual = $this->builder->with($relations);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithout0()
{
    $relations = m::mock('UntypedParameter_relations_');

    // TODO: Your mock expectations here

    $actual = $this->builder->without($relations);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNewModelInstance0()
{
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    $actual = $this->builder->newModelInstance($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQuery0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->getQuery();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetQuery0()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    $actual = $this->builder->setQuery($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToBase0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->toBase();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEagerLoads0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->getEagerLoads();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEagerLoads0()
{
    $eagerLoad = [];

    // TODO: Your mock expectations here

    $actual = $this->builder->setEagerLoads($eagerLoad);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetModel0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->getModel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetModel0()
{
    $model = m::mock(\Illuminate\Database\Eloquent\Model::class);

    // TODO: Your mock expectations here

    $actual = $this->builder->setModel($model);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQualifyColumn0()
{
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->builder->qualifyColumn($column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMacro0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->builder->getMacro($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === 'macro') == false (line 1256)
    // if (isset($this->localMacros[$method])) == false (line 1262)
    // if (isset(static::$macros[$method])) == false (line 1268)
    // if (method_exists($this->model, $scope = 'scope' . ucfirst($method))) == false (line 1276)
    // if (in_array($method, $this->passthru)) == false (line 1280)

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
    // if ($method === 'macro') == false (line 1256)
    // if (isset($this->localMacros[$method])) == false (line 1262)
    // if (isset(static::$macros[$method])) == false (line 1268)
    // if (method_exists($this->model, $scope = 'scope' . ucfirst($method))) == false (line 1276)
    // if (in_array($method, $this->passthru)) == true (line 1280)

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
    // if ($method === 'macro') == false (line 1256)
    // if (isset($this->localMacros[$method])) == false (line 1262)
    // if (isset(static::$macros[$method])) == false (line 1268)
    // if (method_exists($this->model, $scope = 'scope' . ucfirst($method))) == true (line 1276)

    $actual = $this->builder->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call3()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === 'macro') == false (line 1256)
    // if (isset($this->localMacros[$method])) == false (line 1262)
    // if (isset(static::$macros[$method])) == true (line 1268)
    // if (static::$macros[$method] instanceof \Closure) == false (line 1269)

    $actual = $this->builder->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call4()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === 'macro') == false (line 1256)
    // if (isset($this->localMacros[$method])) == false (line 1262)
    // if (isset(static::$macros[$method])) == true (line 1268)
    // if (static::$macros[$method] instanceof \Closure) == true (line 1269)

    $actual = $this->builder->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call5()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === 'macro') == false (line 1256)
    // if (isset($this->localMacros[$method])) == true (line 1262)

    $actual = $this->builder->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call6()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === 'macro') == true (line 1256)

    $actual = $this->builder->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === 'macro') == false (line 1300)
    // if (!isset(static::$macros[$method])) == false (line 1306)
    // if (static::$macros[$method] instanceof \Closure) == false (line 1310)

    $actual = $this->builder->__callStatic($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic1()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === 'macro') == false (line 1300)
    // if (!isset(static::$macros[$method])) == false (line 1306)
    // if (static::$macros[$method] instanceof \Closure) == true (line 1310)

    $actual = $this->builder->__callStatic($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__callStatic2()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === 'macro') == false (line 1300)
    // if (!isset(static::$macros[$method])) == true (line 1306)
    // throw new \BadMethodCallException("Method {$method} does not exist.") -> exception (line 1307)

    $actual = $this->builder->__callStatic($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic3()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === 'macro') == true (line 1300)

    $actual = $this->builder->__callStatic($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__clone0()
{
    // TODO: Your mock expectations here

    $actual = $this->builder->__clone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
