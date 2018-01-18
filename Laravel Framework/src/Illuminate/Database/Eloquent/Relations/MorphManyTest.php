<?php

namespace tests\Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Mockery as m;

class MorphManyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\Relations\MorphMany
*/
protected $morphMany;

public function setUp()
{
    parent::setUp();

    $this->morphMany = new \Illuminate\Database\Eloquent\Relations\MorphMany();
}

public function testGetResults0()
{
    // TODO: Your mock expectations here

    $actual = $this->morphMany->getResults();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation0()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->morphMany->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitRelation1()
{
    $models = [];
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->morphMany->initRelation($models, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $models = [];
    $results = m::mock(\Illuminate\Database\Eloquent\Collection::class);
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->morphMany->match($models, $results, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
