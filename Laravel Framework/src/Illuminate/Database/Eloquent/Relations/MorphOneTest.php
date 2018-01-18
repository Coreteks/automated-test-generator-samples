<?php

namespace tests\Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use Mockery as m;

class MorphOneTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\Relations\MorphOne
*/
protected $morphOne;

public function setUp()
{
    parent::setUp();

    $this->morphOne = new \Illuminate\Database\Eloquent\Relations\MorphOne();
}

public function testGetResults0()
{
    // TODO: Your mock expectations here

    $actual = $this->morphOne->getResults();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation0()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->morphOne->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation1()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->morphOne->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->morphOne->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNewRelatedInstanceFor0()
{
    $parent = m::mock(\Illuminate\Database\Eloquent\Model::class);

    // TODO: Your mock expectations here

    $actual = $this->morphOne->newRelatedInstanceFor($parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
