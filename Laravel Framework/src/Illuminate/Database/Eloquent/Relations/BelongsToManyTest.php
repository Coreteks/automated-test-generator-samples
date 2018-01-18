<?php

namespace tests\Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Mockery as m;

class BelongsToManyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_query;
/**
* @var \Mockery\MockInterface
*/
protected $_parent;
/**
* @var mixed
*/
protected $_table = null;
/**
* @var mixed
*/
protected $_foreignPivotKey = null;
/**
* @var mixed
*/
protected $_relatedPivotKey = null;
/**
* @var mixed
*/
protected $_parentKey = null;
/**
* @var mixed
*/
protected $_relatedKey = null;
/**
* @var mixed
*/
protected $_relationName = null;
/**
* @var \Illuminate\Database\Eloquent\Relations\BelongsToMany
*/
protected $belongsToMany;

public function setUp()
{
    parent::setUp();

    $this->_query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $this->_parent = m::mock(\Illuminate\Database\Eloquent\Model::class);
    $this->_table = null;
    $this->_foreignPivotKey = null;
    $this->_relatedPivotKey = null;
    $this->_parentKey = null;
    $this->_relatedKey = null;
    $this->_relationName = null;
    $this->belongsToMany = new \Illuminate\Database\Eloquent\Relations\BelongsToMany($this->_query, $this->_parent, $this->_table, $this->_foreignPivotKey, $this->_relatedPivotKey, $this->_parentKey, $this->_relatedKey, $this->_relationName);
}

public function testAddConstraints0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$constraints) == false (line 155)

    $actual = $this->belongsToMany->addConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConstraints1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$constraints) == true (line 155)

    $actual = $this->belongsToMany->addConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEagerConstraints0()
{
    $models = [];

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->addEagerConstraints($models);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation0()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation1()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch1()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($dictionary[$key = $model->{$this->parentKey}])) == false (line 239)

    $actual = $this->belongsToMany->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch2()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($dictionary[$key = $model->{$this->parentKey}])) == true (line 239)

    $actual = $this->belongsToMany->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUsing0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->using($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAs0()
{
    $accessor = m::mock('UntypedParameter_accessor_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->as($accessor);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWherePivot0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');
    $boolean = m::mock('UntypedParameter_boolean_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->wherePivot($column, $operator, $value, $boolean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWherePivotIn0()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');
    $boolean = m::mock('UntypedParameter_boolean_');
    $not = m::mock('UntypedParameter_not_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->wherePivotIn($column, $values, $boolean, $not);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWherePivot0()
{
    $column = m::mock('UntypedParameter_column_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->orWherePivot($column, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrWherePivotIn0()
{
    $column = m::mock('UntypedParameter_column_');
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->orWherePivotIn($column, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindOrNew0()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($instance = $this->find($id, $columns))) == false (line 361)

    $actual = $this->belongsToMany->findOrNew($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindOrNew1()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($instance = $this->find($id, $columns))) == true (line 361)

    $actual = $this->belongsToMany->findOrNew($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrNew0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($instance = $this->where($attributes)->first())) == false (line 376)

    $actual = $this->belongsToMany->firstOrNew($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrNew1()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($instance = $this->where($attributes)->first())) == true (line 376)

    $actual = $this->belongsToMany->firstOrNew($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrCreate0()
{
    $attributes = [];
    $joining = [];
    $touch = m::mock('UntypedParameter_touch_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($instance = $this->where($attributes)->first())) == false (line 393)

    $actual = $this->belongsToMany->firstOrCreate($attributes, $joining, $touch);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrCreate1()
{
    $attributes = [];
    $joining = [];
    $touch = m::mock('UntypedParameter_touch_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($instance = $this->where($attributes)->first())) == true (line 393)

    $actual = $this->belongsToMany->firstOrCreate($attributes, $joining, $touch);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdateOrCreate0()
{
    $attributes = [];
    $values = [];
    $joining = [];
    $touch = m::mock('UntypedParameter_touch_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($instance = $this->where($attributes)->first())) == false (line 411)

    $actual = $this->belongsToMany->updateOrCreate($attributes, $values, $joining, $touch);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdateOrCreate1()
{
    $attributes = [];
    $values = [];
    $joining = [];
    $touch = m::mock('UntypedParameter_touch_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($instance = $this->where($attributes)->first())) == true (line 411)

    $actual = $this->belongsToMany->updateOrCreate($attributes, $values, $joining, $touch);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind0()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->find($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindMany0()
{
    $ids = m::mock('UntypedParameter_ids_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->findMany($ids, $columns);
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
    // if (is_array($id)) == false (line 463)
    // if (!is_null($result)) == false (line 467)
    // throw (new \Illuminate\Database\Eloquent\ModelNotFoundException())->setModel(get_class($this->related)) -> exception (line 471)

    $actual = $this->belongsToMany->findOrFail($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindOrFail1()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id)) == false (line 463)
    // if (!is_null($result)) == true (line 467)

    $actual = $this->belongsToMany->findOrFail($id, $columns);
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
    // if (is_array($id)) == true (line 463)
    // if (count($result) == count(array_unique($id))) == false (line 464)
    // throw (new \Illuminate\Database\Eloquent\ModelNotFoundException())->setModel(get_class($this->related)) -> exception (line 471)

    $actual = $this->belongsToMany->findOrFail($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindOrFail3()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id)) == true (line 463)
    // if (count($result) == count(array_unique($id))) == true (line 464)

    $actual = $this->belongsToMany->findOrFail($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->first($columns);
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
    // if (!is_null($model = $this->first($columns))) == false (line 497)
    // throw (new \Illuminate\Database\Eloquent\ModelNotFoundException())->setModel(get_class($this->related)) -> exception (line 501)

    $actual = $this->belongsToMany->firstOrFail($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrFail1()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($model = $this->first($columns))) == true (line 497)

    $actual = $this->belongsToMany->firstOrFail($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResults0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getResults();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($models) > 0) == false (line 538)

    $actual = $this->belongsToMany->get($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($models) > 0) == true (line 538)

    $actual = $this->belongsToMany->get($columns);
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

    $actual = $this->belongsToMany->paginate($perPage, $columns, $pageName, $page);
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

    $actual = $this->belongsToMany->simplePaginate($perPage, $columns, $pageName, $page);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChunk0()
{
    $count = m::mock('UntypedParameter_count_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->chunk($count, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouchIfTouching0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->touchingParent()) == false (line 679)
    // if ($this->getParent()->touches($this->relationName)) == false (line 683)

    $actual = $this->belongsToMany->touchIfTouching();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouchIfTouching1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->touchingParent()) == false (line 679)
    // if ($this->getParent()->touches($this->relationName)) == true (line 683)

    $actual = $this->belongsToMany->touchIfTouching();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouchIfTouching2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->touchingParent()) == true (line 679)
    // if ($this->getParent()->touches($this->relationName)) == false (line 683)

    $actual = $this->belongsToMany->touchIfTouching();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouchIfTouching3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->touchingParent()) == true (line 679)
    // if ($this->getParent()->touches($this->relationName)) == true (line 683)

    $actual = $this->belongsToMany->touchIfTouching();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($ids = $this->allRelatedIds()) > 0) == false (line 726)

    $actual = $this->belongsToMany->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($ids = $this->allRelatedIds()) > 0) == true (line 726)

    $actual = $this->belongsToMany->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllRelatedIds0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->allRelatedIds();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave0()
{
    $model = m::mock(\Illuminate\Database\Eloquent\Model::class);
    $pivotAttributes = [];
    $touch = m::mock('UntypedParameter_touch_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->save($model, $pivotAttributes, $touch);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSaveMany0()
{
    $models = m::mock('UntypedParameter_models_');
    $pivotAttributes = [];

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->saveMany($models, $pivotAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSaveMany1()
{
    $models = m::mock('UntypedParameter_models_');
    $pivotAttributes = [];

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->saveMany($models, $pivotAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate0()
{
    $attributes = [];
    $joining = [];
    $touch = m::mock('UntypedParameter_touch_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->create($attributes, $joining, $touch);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateMany0()
{
    $records = [];
    $joinings = [];

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->createMany($records, $joinings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateMany1()
{
    $records = [];
    $joinings = [];

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->createMany($records, $joinings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationExistenceQuery0()
{
    $query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $parentQuery = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentQuery->getQuery()->from == $query->getQuery()->from) == false (line 828)

    $actual = $this->belongsToMany->getRelationExistenceQuery($query, $parentQuery, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationExistenceQuery1()
{
    $query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $parentQuery = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentQuery->getQuery()->from == $query->getQuery()->from) == true (line 828)

    $actual = $this->belongsToMany->getRelationExistenceQuery($query, $parentQuery, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationExistenceQueryForSelfJoin0()
{
    $query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $parentQuery = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getRelationExistenceQueryForSelfJoin($query, $parentQuery, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExistenceCompareKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getExistenceCompareKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationCountHash0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getRelationCountHash();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithTimestamps0()
{
    $createdAt = m::mock('UntypedParameter_createdAt_');
    $updatedAt = m::mock('UntypedParameter_updatedAt_');

    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->withTimestamps($createdAt, $updatedAt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreatedAt0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->createdAt();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdatedAt0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->updatedAt();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetForeignPivotKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getForeignPivotKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQualifiedForeignPivotKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getQualifiedForeignPivotKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelatedPivotKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getRelatedPivotKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQualifiedRelatedPivotKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getQualifiedRelatedPivotKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQualifiedParentKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getQualifiedParentKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTable0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getTable();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationName0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getRelationName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPivotAccessor0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsToMany->getPivotAccessor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
