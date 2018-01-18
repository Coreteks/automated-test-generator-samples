<?php

namespace tests\Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Mockery as m;

class HasManyThroughTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_query;
/**
* @var \Mockery\MockInterface
*/
protected $_farParent;
/**
* @var \Mockery\MockInterface
*/
protected $_throughParent;
/**
* @var mixed
*/
protected $_firstKey = null;
/**
* @var mixed
*/
protected $_secondKey = null;
/**
* @var mixed
*/
protected $_localKey = null;
/**
* @var mixed
*/
protected $_secondLocalKey = null;
/**
* @var \Illuminate\Database\Eloquent\Relations\HasManyThrough
*/
protected $hasManyThrough;

public function setUp()
{
    parent::setUp();

    $this->_query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $this->_farParent = m::mock(\Illuminate\Database\Eloquent\Model::class);
    $this->_throughParent = m::mock(\Illuminate\Database\Eloquent\Model::class);
    $this->_firstKey = null;
    $this->_secondKey = null;
    $this->_localKey = null;
    $this->_secondLocalKey = null;
    $this->hasManyThrough = new \Illuminate\Database\Eloquent\Relations\HasManyThrough($this->_query, $this->_farParent, $this->_throughParent, $this->_firstKey, $this->_secondKey, $this->_localKey, $this->_secondLocalKey);
}

public function testAddConstraints0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$constraints) == false (line 97)

    $actual = $this->hasManyThrough->addConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConstraints1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$constraints) == true (line 97)

    $actual = $this->hasManyThrough->addConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQualifiedParentKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->getQualifiedParentKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testThroughParentSoftDeletes0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->throughParentSoftDeletes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEagerConstraints0()
{
    $models = [];

    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->addEagerConstraints($models);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation0()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation1()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->match($models, $results, $relation);
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
    // if (isset($dictionary[$key = $model->getAttribute($this->localKey)])) == false (line 188)

    $actual = $this->hasManyThrough->match($models, $results, $relation);
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
    // if (isset($dictionary[$key = $model->getAttribute($this->localKey)])) == true (line 188)

    $actual = $this->hasManyThrough->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrNew0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($instance = $this->where($attributes)->first())) == false (line 226)

    $actual = $this->hasManyThrough->firstOrNew($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrNew1()
{
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($instance = $this->where($attributes)->first())) == true (line 226)

    $actual = $this->hasManyThrough->firstOrNew($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdateOrCreate0()
{
    $attributes = [];
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->updateOrCreate($attributes, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->first($columns);
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
    // if (!is_null($model = $this->first($columns))) == false (line 272)
    // throw (new \Illuminate\Database\Eloquent\ModelNotFoundException())->setModel(get_class($this->related)) -> exception (line 276)

    $actual = $this->hasManyThrough->firstOrFail($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstOrFail1()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($model = $this->first($columns))) == true (line 272)

    $actual = $this->hasManyThrough->firstOrFail($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind0()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id)) == false (line 288)

    $actual = $this->hasManyThrough->find($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind1()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id)) == true (line 288)

    $actual = $this->hasManyThrough->find($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindMany0()
{
    $ids = m::mock('UntypedParameter_ids_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($ids)) == false (line 306)

    $actual = $this->hasManyThrough->findMany($ids, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindMany1()
{
    $ids = m::mock('UntypedParameter_ids_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($ids)) == true (line 306)

    $actual = $this->hasManyThrough->findMany($ids, $columns);
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
    // if (is_array($id)) == false (line 328)
    // if (!is_null($result)) == false (line 332)
    // throw (new \Illuminate\Database\Eloquent\ModelNotFoundException())->setModel(get_class($this->related)) -> exception (line 336)

    $actual = $this->hasManyThrough->findOrFail($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindOrFail1()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id)) == false (line 328)
    // if (!is_null($result)) == true (line 332)

    $actual = $this->hasManyThrough->findOrFail($id, $columns);
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
    // if (is_array($id)) == true (line 328)
    // if (count($result) == count(array_unique($id))) == false (line 329)
    // throw (new \Illuminate\Database\Eloquent\ModelNotFoundException())->setModel(get_class($this->related)) -> exception (line 336)

    $actual = $this->hasManyThrough->findOrFail($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindOrFail3()
{
    $id = m::mock('UntypedParameter_id_');
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($id)) == true (line 328)
    // if (count($result) == count(array_unique($id))) == true (line 329)

    $actual = $this->hasManyThrough->findOrFail($id, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResults0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->getResults();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($models) > 0) == false (line 371)

    $actual = $this->hasManyThrough->get($columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($models) > 0) == true (line 371)

    $actual = $this->hasManyThrough->get($columns);
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

    $actual = $this->hasManyThrough->paginate($perPage, $columns, $pageName, $page);
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

    $actual = $this->hasManyThrough->simplePaginate($perPage, $columns, $pageName, $page);
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
    // if ($parentQuery->getQuery()->from == $query->getQuery()->from) == false (line 435)

    $actual = $this->hasManyThrough->getRelationExistenceQuery($query, $parentQuery, $columns);
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
    // if ($parentQuery->getQuery()->from == $query->getQuery()->from) == true (line 435)

    $actual = $this->hasManyThrough->getRelationExistenceQuery($query, $parentQuery, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationExistenceQueryForSelfRelation0()
{
    $query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $parentQuery = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->throughParentSoftDeletes()) == false (line 460)

    $actual = $this->hasManyThrough->getRelationExistenceQueryForSelfRelation($query, $parentQuery, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationExistenceQueryForSelfRelation1()
{
    $query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $parentQuery = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->throughParentSoftDeletes()) == true (line 460)

    $actual = $this->hasManyThrough->getRelationExistenceQueryForSelfRelation($query, $parentQuery, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationCountHash0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->getRelationCountHash();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQualifiedFarKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->getQualifiedFarKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQualifiedFirstKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->getQualifiedFirstKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQualifiedForeignKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->getQualifiedForeignKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQualifiedLocalKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasManyThrough->getQualifiedLocalKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
