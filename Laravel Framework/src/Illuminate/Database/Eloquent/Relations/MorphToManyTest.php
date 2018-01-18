<?php

namespace tests\Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Mockery as m;

class MorphToManyTest extends \PHPUnit_Framework_TestCase
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
protected $_name = null;
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
* @var mixed
*/
protected $_inverse = null;
/**
* @var \Illuminate\Database\Eloquent\Relations\MorphToMany
*/
protected $morphToMany;

public function setUp()
{
    parent::setUp();

    $this->_query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $this->_parent = m::mock(\Illuminate\Database\Eloquent\Model::class);
    $this->_name = null;
    $this->_table = null;
    $this->_foreignPivotKey = null;
    $this->_relatedPivotKey = null;
    $this->_parentKey = null;
    $this->_relatedKey = null;
    $this->_relationName = null;
    $this->_inverse = null;
    $this->morphToMany = new \Illuminate\Database\Eloquent\Relations\MorphToMany($this->_query, $this->_parent, $this->_name, $this->_table, $this->_foreignPivotKey, $this->_relatedPivotKey, $this->_parentKey, $this->_relatedKey, $this->_relationName, $this->_inverse);
}

public function testAddEagerConstraints0()
{
    $models = [];

    // TODO: Your mock expectations here

    $actual = $this->morphToMany->addEagerConstraints($models);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRelationExistenceQuery0()
{
    $query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $parentQuery = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $columns = m::mock('UntypedParameter_columns_');

    // TODO: Your mock expectations here

    $actual = $this->morphToMany->getRelationExistenceQuery($query, $parentQuery, $columns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNewPivot0()
{
    $attributes = [];
    $exists = m::mock('UntypedParameter_exists_');

    // TODO: Your mock expectations here

    $actual = $this->morphToMany->newPivot($attributes, $exists);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMorphType0()
{
    // TODO: Your mock expectations here

    $actual = $this->morphToMany->getMorphType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMorphClass0()
{
    // TODO: Your mock expectations here

    $actual = $this->morphToMany->getMorphClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
