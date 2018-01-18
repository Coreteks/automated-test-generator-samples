<?php

namespace tests\Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Mockery as m;

class BelongsToTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_query;
/**
* @var \Mockery\MockInterface
*/
protected $_child;
/**
* @var mixed
*/
protected $_foreignKey = null;
/**
* @var mixed
*/
protected $_ownerKey = null;
/**
* @var mixed
*/
protected $_relation = null;
/**
* @var \Illuminate\Database\Eloquent\Relations\BelongsTo
*/
protected $belongsTo;

public function setUp()
{
    parent::setUp();

    $this->_query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $this->_child = m::mock(\Illuminate\Database\Eloquent\Model::class);
    $this->_foreignKey = null;
    $this->_ownerKey = null;
    $this->_relation = null;
    $this->belongsTo = new \Illuminate\Database\Eloquent\Relations\BelongsTo($this->_query, $this->_child, $this->_foreignKey, $this->_ownerKey, $this->_relation);
}

public function testGetResults0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsTo->getResults();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConstraints0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$constraints) == false (line 91)

    $actual = $this->belongsTo->addConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConstraints1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$constraints) == true (line 91)

    $actual = $this->belongsTo->addConstraints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEagerConstraints0()
{
    $models = [];

    // TODO: Your mock expectations here

    $actual = $this->belongsTo->addEagerConstraints($models);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation0()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->belongsTo->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation1()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->belongsTo->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->belongsTo->match($models, $results, $relation);
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
    // if (isset($dictionary[$model->{$foreign}])) == false (line 191)

    $actual = $this->belongsTo->match($models, $results, $relation);
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
    // if (isset($dictionary[$model->{$foreign}])) == true (line 191)

    $actual = $this->belongsTo->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch3()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->belongsTo->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch4()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($dictionary[$model->{$foreign}])) == false (line 191)

    $actual = $this->belongsTo->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch5()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($dictionary[$model->{$foreign}])) == true (line 191)

    $actual = $this->belongsTo->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->belongsTo->update($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssociate0()
{
    $model = m::mock('UntypedParameter_model_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($model instanceof \Illuminate\Database\Eloquent\Model) == false (line 222)

    $actual = $this->belongsTo->associate($model);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssociate1()
{
    $model = m::mock('UntypedParameter_model_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($model instanceof \Illuminate\Database\Eloquent\Model) == true (line 222)

    $actual = $this->belongsTo->associate($model);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDissociate0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsTo->dissociate();
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
    // if ($parentQuery->getQuery()->from == $query->getQuery()->from) == false (line 251)

    $actual = $this->belongsTo->getRelationExistenceQuery($query, $parentQuery, $columns);
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
    // if ($parentQuery->getQuery()->from == $query->getQuery()->from) == true (line 251)

    $actual = $this->belongsTo->getRelationExistenceQuery($query, $parentQuery, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationExistenceQueryForSelfRelation0()
{
    $query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $parentQuery = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->belongsTo->getRelationExistenceQueryForSelfRelation($query, $parentQuery, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationCountHash0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsTo->getRelationCountHash();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetForeignKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsTo->getForeignKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQualifiedForeignKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsTo->getQualifiedForeignKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOwnerKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsTo->getOwnerKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQualifiedOwnerKeyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsTo->getQualifiedOwnerKeyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelation0()
{
    // TODO: Your mock expectations here

    $actual = $this->belongsTo->getRelation();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
