<?php

namespace tests\Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Mockery as m;

class HasOneTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\Relations\HasOne
*/
protected $hasOne;

public function setUp()
{
    parent::setUp();

    $this->hasOne = new \Illuminate\Database\Eloquent\Relations\HasOne();
}

public function testGetResults0()
{
    // TODO: Your mock expectations here

    $actual = $this->hasOne->getResults();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation0()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->hasOne->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation1()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->hasOne->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->hasOne->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNewRelatedInstanceFor0()
{
    $parent = m::mock(\Illuminate\Database\Eloquent\Model::class);

    // TODO: Your mock expectations here

    $actual = $this->hasOne->newRelatedInstanceFor($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
