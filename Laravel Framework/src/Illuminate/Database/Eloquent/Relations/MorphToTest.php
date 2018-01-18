<?php

namespace tests\Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Mockery as m;

class MorphToTest extends \PHPUnit_Framework_TestCase
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
protected $_foreignKey = null;
/**
* @var mixed
*/
protected $_ownerKey = null;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var mixed
*/
protected $_relation = null;
/**
* @var \Illuminate\Database\Eloquent\Relations\MorphTo
*/
protected $morphTo;

public function setUp()
{
    parent::setUp();

    $this->_query = m::mock(\Illuminate\Database\Eloquent\Builder::class);
    $this->_parent = m::mock(\Illuminate\Database\Eloquent\Model::class);
    $this->_foreignKey = null;
    $this->_ownerKey = null;
    $this->_type = null;
    $this->_relation = null;
    $this->morphTo = new \Illuminate\Database\Eloquent\Relations\MorphTo($this->_query, $this->_parent, $this->_foreignKey, $this->_ownerKey, $this->_type, $this->_relation);
}

public function testAddEagerConstraints0()
{
    $models = [];

    // TODO: Your mock expectations here

    $actual = $this->morphTo->addEagerConstraints($models);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResults0()
{
    // TODO: Your mock expectations here

    $actual = $this->morphTo->getResults();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEager0()
{
    // TODO: Your mock expectations here

    $actual = $this->morphTo->getEager();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEager1()
{
    // TODO: Your mock expectations here

    $actual = $this->morphTo->getEager();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateModelByType0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->morphTo->createModelByType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->morphTo->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssociate0()
{
    $model = m::mock('UntypedParameter_model_');

    // TODO: Your mock expectations here

    $actual = $this->morphTo->associate($model);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDissociate0()
{
    // TODO: Your mock expectations here

    $actual = $this->morphTo->dissociate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMorphType0()
{
    // TODO: Your mock expectations here

    $actual = $this->morphTo->getMorphType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDictionary0()
{
    // TODO: Your mock expectations here

    $actual = $this->morphTo->getDictionary();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->morphTo->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->morphTo->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call2()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->morphTo->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
